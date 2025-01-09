<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Hotel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_hotels';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['standart_prop', 'suite_prop', 'lux_prop'];
    
    public $attachOne = [
        'how_to_get_to_map'  => ['System\Models\File'],
        'how_to_get_to_photo'  => ['System\Models\File']
    ];

    public $attachMany = [
        'slider'  => ['System\Models\File'],
        'standart_photos'  => ['System\Models\File'],
        'suite_photos'  => ['System\Models\File'],
        'lux_photos'  => ['System\Models\File'],
    ];
}
