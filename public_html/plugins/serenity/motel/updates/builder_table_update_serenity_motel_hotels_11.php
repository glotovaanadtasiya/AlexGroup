<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels11 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->string('yandex_map_link', 65535)->nullable()->unsigned(false)->default(null)->change();
            $table->string('google_map_link', 65535)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->text('yandex_map_link')->nullable()->unsigned(false)->default(null)->change();
            $table->text('google_map_link')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
