<?php 
use Serenity\Motel\Models\Hotel;
use Serenity\Motel\Models\Name;
class Cms65e5b79c47b2b230578793_a8db92612f981f559dc467b007691d0eClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $this['hotels'] = Hotel::all();
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
	
	
    Mail::send('serenity.motel.booking', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Новая заявка на бронирование номера');

    });
    
    $name = Name::where('name', Input::get('fname'));
	
	
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
