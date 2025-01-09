<?php namespace Serenity\Motel\Components;

use Input;
use Cms\Classes\ComponentBase;
use Serenity\Motel\Models\Review;
use Serenity\Motel\Models\Hotel;

class ReviewList extends ComponentBase
{

    public $pageNumber;

    public $reviews;

    public $hotels;

    public $currentHotel;

    public function componentDetails()
    {
        return [
            'name' => 'Список отзывов',
            'description' => 'Список отзывов'
        ];
    }



    public function onRun(){
        $this->reviews = $this->reviews();
        $this->hotels = $this->hotels();
        $this->currentHotel = $this->hasHotel();
    }


    protected function reviews()
    {

        $hotel = Input::get('hotel');

        if($this->param('id')){
            $pageNumber = $this->param('page');
        }else{
            $pageNumber = 1;
        }

        $query = Review::paginate(20, $pageNumber);
        if($hotel){
            $query = Review::where('hotel_id', $hotel)->paginate(20, $pageNumber);
        }

        return $query;

    }

    protected function hotels()
    {

        $query = Hotel::all();
        return $query;

    }

    protected function hasHotel(){
        return Input::get('hotel');
    }


}
?>