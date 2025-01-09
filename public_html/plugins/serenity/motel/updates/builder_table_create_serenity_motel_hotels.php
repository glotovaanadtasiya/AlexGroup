<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelHotels extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_hotels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('coordinates', 255)->nullable();
            $table->string('metro', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_hotels');
    }
}
