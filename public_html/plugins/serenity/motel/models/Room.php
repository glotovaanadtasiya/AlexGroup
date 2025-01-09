<?php namespace Serenity\Motel\Models;

use Model;

/**
 * Model
 */
class Room extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'serenity_motel_rooms';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
