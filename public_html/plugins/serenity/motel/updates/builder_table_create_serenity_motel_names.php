<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelNames extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_names', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('gender', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_names');
    }
}
