<?php 
use Serenity\Motel\Models\Stock;
use Serenity\Motel\Models\Service;
use Serenity\Motel\Models\Offer;
class Cms65e5b3ebe79b3295494966_cd26808b68d0158ae2667d2a159cb79eClass extends Cms\Classes\LayoutCode
{
public function onInit()
{
    $this['services'] = Service::all();
    $this['offers'] = Offer::all();

    $stock = Stock::where('slug', $this->param('slug'))->first();
    if(!$stock)
        return $this->controller->run('404');
    
    $this['stock'] = $stock;
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
