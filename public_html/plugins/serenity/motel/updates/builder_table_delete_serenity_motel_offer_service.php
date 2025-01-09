<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSerenityMotelOfferService extends Migration
{
    public function up()
    {
        Schema::dropIfExists('serenity_motel_offer_service');
    }
    
    public function down()
    {
        Schema::create('serenity_motel_offer_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('offer_id')->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
}
