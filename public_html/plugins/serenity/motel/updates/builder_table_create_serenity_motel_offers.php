<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelOffers extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_offers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->integer('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_offers');
    }
}
