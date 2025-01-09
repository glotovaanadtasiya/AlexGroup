<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels4 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
