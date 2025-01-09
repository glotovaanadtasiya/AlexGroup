<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels8 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->string('rating_service', 255)->nullable();
            $table->string('rating_room', 255)->nullable();
            $table->string('rating_food', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('rating_service');
            $table->dropColumn('rating_room');
            $table->dropColumn('rating_food');
        });
    }
}
