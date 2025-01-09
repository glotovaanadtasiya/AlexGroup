<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelOfferService2 extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_offer_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('service_id');
            $table->integer('offer_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_offer_service');
    }
}
