<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_reviews';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'hotel' => [
            'Serenity\Motel\Models\Hotel',
        ]
    ];

    public function scopeWithHotel($query, $hotel_id = false){
        if($hotel_id){
            return $query->where('hotel_id','=',$hotel_id)->orderBy('created_at', 'desc');
        }else{
            return $query->orderBy('created_at', 'desc');
        }

    }



}
