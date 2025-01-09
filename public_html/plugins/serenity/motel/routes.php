<?php
use Serenity\Motel\Models\Hotel;
use Serenity\Motel\Models\Stock;
use Serenity\Motel\Models\Offer;
use Serenity\Motel\Models\Name;


function replaceTarrifs($data) {
  $text = str_replace('[night]', 'тариф «Ночной» — 12 часовой тариф, действует в Вс-Чт с 23:00 до 13:00', $data);
  $text = str_replace('[day]', 'тариф «Дневной» — 12 часовой тариф, действует: в Сб с 09:00 до 21:00, в Вс-Пн с 09:00 до 23:00.', $text);
  return $text;
}

/*
Route::get('api/v1/hotels', function (){
    $hotels = Hotel::with('standart_photos', 'suite_photos', 'lux_photos')->get();
  
  return $hotels;
});
*/

Route::get('api/v1/hotels', function (){
  $hotels = Hotel::with('standart_photos', 'suite_photos', 'lux_photos')->get();
  
  /* del inactive tariffs */
  foreach ($hotels as $hotel){
    
  if(isset($hotel->standart_prop[0]['tariffs'])) 
      {
        $standart = $hotel['standart_prop'];
        $tmp = $standart[0];
        $tariffs = $tmp['tariffs'];
        foreach ($tariffs as $key => $tariff) if(isset($tariff['price_hide']) && $tariff['price_hide']) unset($tariffs[$key]);
    $tariffs=array_values($tariffs);
        $tmp['tariffs'] = $tariffs;
        $standart[0] = $tmp;
        $hotel['standart_prop'] = $standart;
      }
    
    if(isset($hotel->suite_prop[0]['tariffs'])) 
      {
        $suite = $hotel['suite_prop'];
        $tmp = $suite[0];
        $tariffs = $tmp['tariffs'];
        foreach ($tariffs as $key => $tariff) if(isset($tariff['price_hide']) && $tariff['price_hide']) unset($tariffs[$key]);
    $tariffs=array_values($tariffs);
        $tmp['tariffs'] = $tariffs;
        $suite[0] = $tmp;
        $hotel['suite_prop'] = $suite;
      }
    if(isset($hotel->lux_prop[0]['tariffs'])) 
      {
        $lux = $hotel['lux_prop'];
        $tmp = $lux[0];
        $tariffs = $tmp['tariffs'];
        foreach ($tariffs as $key => $tariff) if(isset($tariff['price_hide']) && $tariff['price_hide']) unset($tariffs[$key]);
    $tariffs=array_values($tariffs);
        $tmp['tariffs'] = $tariffs;
        $lux[0] = $tmp;
        $hotel['lux_prop'] = $lux;
      }   
  }
  /* /del inactive tariffs */
  
  return $hotels;
});



Route::get('api/v1/hotels/{id}', function ($id) {
  $hotel = Hotel::with('standart_photos', 'suite_photos', 'lux_photos')->find($id);
  return $hotel;
});

Route::post('api/v1/hotelsreg/{id}', function ($id){
    if(isset($_POST['token']) && ($_POST['token']=='kRKGJ72hudrY0UfV0c0E7pJthDzhQ53ehcAH3iQbkGH8H3yEvPWjlIjTFVykzF8C'))
    {
        $assocIds=[
          21=>99,
          20=>31,
          19=>28,
          17=>27,
          16=>26,
          15=>24,
          14=>23,
          5=>21,
          12=>18,
          2=>15,
          10=>14,
          6=>13,
          4=>12,
          11=>10,
          3=>9,
          13=>7,
          ];
        $key = array_search ($id, $assocIds);
        $hotelMas = Hotel::with('standart_photos', 'suite_photos', 'lux_photos')->where('crm_id',$id)->get()->toArray();
        $hotel = $hotelMas[0];
        $hotelsReg=[];
        $descstandart='';
        $descsuite='';
        $desclux='';
        if(isset($hotel['standart_prop'][0]['type_description']) && !empty($hotel['standart_prop'][0]['type_description']))
            $descstandart = $hotel['standart_prop'][0]['type_description'];
        if(isset($hotel['suite_prop'][0]['type_description']) && !empty($hotel['suite_prop'][0]['type_description']))
            $descsuite = $hotel['suite_prop'][0]['type_description'];
        if(isset($hotel['lux_prop'][0]['type_description']) && !empty($hotel['lux_prop'][0]['type_description']))
            $desclux = $hotel['lux_prop'][0]['type_description'];
        $hotelsReg=[
            'id'=>$id,
            'name'=>$hotel['name'],
            'address'=>$hotel['address'],
            'coordinates'=>$hotel['coordinates'],
            'yandex_map_link'=>$hotel['yandex_map_link'],
            'desc_standart'=>$descstandart,
            'desc_suite'=>$descsuite,
            'desc_lux'=>$desclux,
            'standart_photos'=>$hotel['standart_photos'],
            'suite_photos'=>$hotel['suite_photos'],
            'lux_photos'=>$hotel['lux_photos'],
            
            ];
      return $hotelsReg;
    }
    else
    {
        //return json_encode(['error'=>true,'message'=>'Invalid token']);
        return abort('403');
    }
});

Route::get('api/v1/stocks', function (){
    $stocks = Stock::with('img_title')->where([
    ['active', 1],
    ['dont_display_in_app', '!=' , 1],
    ])->get();
    foreach ($stocks as $stock){
    $stock->url = 'https://motelspb.com/stocks/stock/'.$stock->slug.'/';
  
  
$stock->html = '<!DOCTYPE html><link rel="stylesheet" href="https://motelspb.com/themes/motel/assets/css/main.min.css"><link rel="stylesheet" href="https://motelspb.com/themes/motel/assets/css/mobileapp.css">' . 
  '<main class="main">
    <div class="darkcommontheme darktheme">
      <div class="s-stock-top section" style="background-image: url('.$stock->img_title->path.')">
        <div class="s-stock-top__container container">
          <div class="s-stock-top__box">
            <h1 class="s-stock-top__title h1">'.$stock->name.'</h1>
          </div>
        </div>
      </div>
      <div class="section s-stock-info">       
        <div class="container container_narrow">
          <div class="s-stock-info__text plaintext">
          
      '.$stock->content.'
      
          </div>
        </div>
      </div>
    </div>
  </main>';
  
  /*
  if ($stock->view_add_service == 1) {
    $services = Service::all();
    $offers = Offer::all();
  $rendered = $this->renderPartial('blocks/additional_services_table', ['services' => $services, 'offers' => $offers]);
    $stock->html .= $rendered;
  }   */  
    

    $stock->html = html_entity_decode($stock->html);
    
    if ($stock->mobiletext) $stock->content = html_entity_decode(strip_tags($stock->mobiletext));
    else {
      $stock->content = strip_tags($stock->content);
      $stock->content = html_entity_decode($stock->content);
      }
    }

    return $stocks;
});

Route::get('api/v1/stocks/{id}', function ($id) {
    $stock = Stock::with('img_title')->find($id);
    if ($stock->mobiletext) $stock->content = html_entity_decode(strip_tags($stock->mobiletext));
  else {
    $stock->content = strip_tags($stock->content);
    $stock->content = html_entity_decode($stock->content);
    }
    return $stock;
});

Route::get('api/v1/offers', function (){
    return Offer::with('services')->get();
});

Route::get('api/v1/hotels2', function (){
    return $hotels = Db::table('serenity_motel_hotels')
        ->leftJoin('system_files', 'serenity_motel_hotels.id', '=', 'system_files.attachment_id')
        ->select('serenity_motel_hotels.name', 'system_files.file_name')
        ->where('system_files.field', '=', 'standart_photos')
        ->get();
});



/* Отправка письма с бронированием из приложения */
Route::match(['post'], '/api/v1/send_reservation', function () {

    $hotel_price = 0;
    $offer_price = 0;
    $total_price = 0;


    if(Input::get('date')){
        $booking_date = substr(Input::get('date'), 0, 10);
        $booking_date = explode(".", $booking_date);
        $booking_day = date("w", mktime(0,0,0, $booking_date[1], $booking_date[2], $booking_date[0]));
    }else{
        return ['successfully' => false];
    }


    $hotel = Hotel::find(Input::get('hotel_id'));

    if(Input::get('additional_services')){
        $offer = Offer::where('name', Input::get('additional_services'))->get();

        if(isset($offer))
            $offer_price = $offer[0]['price'];
    }


    switch (Input::get('room_type')){
        case "Номер класса Стандарт":
            $tariffs = $hotel->standart_prop[0]['tariffs'];
            break;
        case "Номер класса Полу-люкс":
            $tariffs = $hotel->suite_prop[0]['tariffs'];
            break;
        case "Номер класса Люкс":
            $tariffs = $hotel->lux_prop[0]['tariffs'];
            break;
    }

    if(!isset($tariffs))
        return ['successfully' => false];

    foreach ($tariffs as $tariff){
        if($tariff['price_name'] != Input::get('time'))
            continue;

        if(in_array($booking_day, ['0', '1', '2', '3', '4'])){
            $hotel_price = $tariff['sun_thu'];
        }else{
            $hotel_price = $tariff['fri_sat'];
        }
    }


    $total_price = $hotel_price + $offer_price;

    $vars = [
        'hotel_name' => Input::get('hotel_name'),
        'hotel_id' => Input::get('hotel_id'),
        'room_type' => Input::get('room_type'),
        'time' => Input::get('time'),
        'date' => Input::get('date'),
        'additional_services' => Input::get('additional_services'),
        'no_smoking' => Input::get('no_smoking'),
        'name' => Input::get('name'),
        'phone' => Input::get('phone'),
        'price' => $total_price,
    ];
  
  


/*логирование данных*/
  $file_log = $_SERVER["DOCUMENT_ROOT"] . "/1/log.log";
  date_default_timezone_set('Europe/Moscow');
    $fw = fopen($file_log, "a");
  fwrite($fw, date("H:i:s  d.m.y")." app VARS " . var_export($vars, true)); 
    fclose($fw);
/**/
  
  

    Mail::send('serenity.motel.booking_from_app', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Заявка на бронирование номера из приложения');
    });
  
  
  /************************second mail********************
  use \Swift_Mailer;
  use \Swift_SmtpTransport as SmtpTransport;
  
  
  // Backup your default mailer so we replace it after
  // sending our custom mail
  $backup = Mail::getSwiftMailer();

  // Setup your yandex mailer
  $transport = Swift_SmtpTransport::newInstance('smtp.yandex.ru', 465, 'ssl');
  $transport->setUsername('smtp4motel@alex-group.net');
  $transport->setPassword('THu3358E');
  // other config if needed...

  $yandex = new Swift_Mailer($transport);

  // Set the mailer as yandex
  Mail::setSwiftMailer($yandex);

  // Send your message
    Mail::send('serenity.motel.booking_from_app', $vars, function($message){
        $message->to('akmor@ya.ru', 'Администратор');
        $message->subject('Заявка на бронирование номера из приложения');
    });

  // Restore your original mailer
  Mail::setSwiftMailer($backup);
  /***************************************************************************/

    return ['successfully' => true];


});
?>