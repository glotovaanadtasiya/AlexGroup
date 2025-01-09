<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Stock extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_stocks';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = ['slider'];

    public $attachOne = [
        'img_title'  => ['System\Models\File'],
        
    ];


}
