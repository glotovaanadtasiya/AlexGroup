<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelRooms extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_rooms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('hotel_id')->nullable();
            $table->string('type', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('properties')->nullable();
            $table->text('prices')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_rooms');
    }
}
