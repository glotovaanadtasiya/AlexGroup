<?php 
class Cms65e5b3cc17330715815563_176c5aa9b91f0209a82d086c9d525039Class extends Cms\Classes\LayoutCode
{
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
public function onSubmitReviewForm(){
    
    
    $vars = [
        'name' => Input::get('name'),
        'phone' => Input::get('phone'),
        'email' => Input::get('email'),
        'review' => Input::get('review'),
        'service' => Input::get('service'),
        'room' => Input::get('room'),
        'food' => Input::get('food'),
        ];
    Mail::send('serenity.motel.reviewform', $vars, function($message){
        $message->to('4687777@alex-group.net', 'Администратор');
        $message->subject('Новый отзыв об отеле с сайта motelspb.ru');
    });
    
   Flash::success('Отзыв отправлен');
    
    return [
        'ok' => 1,
    ];
    
}
}
