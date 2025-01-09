<?php namespace Ro\Rooms\Models;

use Model;

/**
 * Model
 */
class Hotels extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ro_rooms_hotels';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
