<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels10 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->text('yandex_map_link')->nullable();
            $table->text('google_map_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('yandex_map_link');
            $table->dropColumn('google_map_link');
        });
    }
}
