<?php 
use Serenity\Motel\Models\Hotel;class Cms65e5dff5e9225633227275_45be09d1ba45c30ed274990874a29fd7Class extends Cms\Classes\LayoutCode
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
        'booking_hotel_select' => Input::get('booking-hotel-select'), 
        'booking_roomtype_select' => Input::get('booking-roomtype-select'), 
        'arrival_date' => Input::get('arrival_date'),
        'booking_time_select' => Input::get('booking-time-select'),
        'booking_rp_select' => Input::get('booking-rp-select'),
        'fname' => Input::get('fname'),
        'phone' => Input::get('phone'),
        ];
    Mail::send('serenity.motel.booking', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Новая заявка на бронирование номера');
    });
    
    $name = Name::where('name', Input::get('fname'));
    
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
