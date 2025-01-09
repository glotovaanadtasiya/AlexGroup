<?php namespace Ro\Rooms\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRoRoomsHotels extends Migration
{
    public function up()
    {
        Schema::create('ro_rooms_hotels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ro_rooms_hotels');
    }
}
