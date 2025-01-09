<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Menu extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
	
	public $attachOne = [
        'image'  => ['System\Models\File'],
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_menu';

    protected $jsonable = ['menu_list'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
