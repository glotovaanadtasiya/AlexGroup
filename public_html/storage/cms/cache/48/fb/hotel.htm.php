<?php 
use Serenity\Motel\Models\Hotel;use Serenity\Motel\Models\Name;use Serenity\Motel\Models\Service;use Serenity\Motel\Models\Offer;class Cms66014862d5303312277570_0f97f52b44b2ce50a091bc270e15d0f2Class extends Cms\Classes\LayoutCode
{




public function onInit()
{
    $this['hotels'] = Hotel::all();
    $this['services'] = Service::all();
    $this['offers'] = Offer::all();
    
    $hotel = Hotel::where('slug', $this->param('slug'))->first();
    if(!$hotel)
        return $this->controller->run('404');
    
    $this['hotel'] = $hotel;
}
public function onSubmitBooking(){
    
    $vars = [
		'type' => 1, /*запись в crm*/
		'connect-type' => Input::get('connect-type'), 
        'booking_hotel_select' => Input::get('booking-hotel-select'), 
        'booking_roomtype_select' => Input::get('booking-roomtype-select'), 
        'arrival_date' => Input::get('arrival_date'),
        'booking_time_select' => Input::get('booking-time-select'),
        'booking_rp_select' => Input::get('booking-rp-select'),
        'fname' => Input::get('fname'),
        'phone' => Input::get('phone'),
		'booking_hours' => Input::get('booking-hours'),
		'booking_minutes' => Input::get('booking-minutes'),
		'booking_smocking' => Input::get('booking-smocking'),
		'email' => Input::get('email')
		
        ];
	

	/*отправка в crm*/
	
	$url = 'http://suz.motelspb.com/_321/backend/save.php';
	$params = $vars;
	$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
		)
	)));


	
    Mail::send('serenity.motel.booking', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Новая заявка на бронирование номера');

    });
    
    $name = Name::where('name', Input::get('fname'));
	
	

	
    
	/*логирование данных*/
	$file_log = $_SERVER["DOCUMENT_ROOT"] . "/1/log.log";
	date_default_timezone_set('Europe/Moscow');
    $fw = fopen($file_log, "a");
	fwrite($fw, date("H:i:s  d.m.y")." from site VARS " . var_export($vars, true));	
    fclose($fw);
	/**/

    return [
        '@.modals' => $this->renderPartial('blocks/successPopup.htm', ['name' => $name]),
    ];
    
}
public function onSubmitContactForm(){
    
    
    $vars = [
        'name' => Input::get('name'),
        'phone' => Input::get('phone'),
        'email' => Input::get('email'),
        'question' => Input::get('question'),
        ];
    Mail::send('serenity.motel.contactform', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Новая заявка на бронирование номера');
    });
    
   Flash::success('Вопрос отправлен');
    
    return [
        'ok' => 1,
    ];
    
}
}
