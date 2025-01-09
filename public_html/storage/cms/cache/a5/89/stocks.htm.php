<?php 
use Serenity\Motel\Models\Stock;
class Cms65e5c1e092309813537681_0796eae69b08f0086bcb76229c029da8Class extends Cms\Classes\LayoutCode
{
public function onStart()
{
    
    //$this['favoriteStocks'] = Stock::where(['active' => 1, 'favorite' => 1])->get();
    //$this['stocks'] = Stock::where(['active' => 1, 'favorite' => 0])->get();
    
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
