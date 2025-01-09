<?php 
use Serenity\Motel\Models\Hotel;
use Serenity\Motel\Models\Name;
class Cms65e8fe9883447478627096_dfd859e1fa5c60e9fa4cb8a16322d51eClass extends Cms\Classes\LayoutCode
{
public function onStart()
{

    $this['hotels'] = Hotel::all();
	
	/*
	echo "<pre>";
	print_r ($this['hotels'] );
	echo "</pre>";
	
	$url = "http://178.130.14.194:8095/WebBook/api1_1.php"; //
	
	$data = [
		"action"=> "start",
		"auth"=> [
			"login"=> "guest",
			"pass"=> ""
			],
		"app_token"=> "9EFD4B81-DDEA-4805-A221-49E37E2AD387"
	];

	
	$postdata = json_encode($data);

	$ch = curl_init($url); 
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$result = curl_exec($ch);
	curl_close($ch);

	$result = json_decode($result, true);
	echo "<pre>";
	print_r ($result);
	echo "</pre>";*/


}
public function onChangeHotel(){
    $hotel_id = Input::get('hotel_id');
    //$hotel_type = Input::get('hotel_type');
    
    $hotel = Hotel::find($hotel_id);
    if($hotel){
        return [
            //'.find-room__field select' => $this->renderPartial('blocks/bookingTimeSelect.htm', ['hotel' => $hotel, 'type' => $hotel_type]),
            '[name="roomtype-select"]' => $this->renderPartial('blocks/roomtypeselect.htm', ['hotel' => $hotel]),
        ];
    }
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
