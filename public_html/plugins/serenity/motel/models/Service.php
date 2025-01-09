<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'image'  => ['System\Models\File']
    ];
}
