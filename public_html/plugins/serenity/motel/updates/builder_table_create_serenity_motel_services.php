<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelServices extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_services');
    }
}
