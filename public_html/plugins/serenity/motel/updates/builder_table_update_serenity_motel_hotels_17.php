<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels17 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->text('seo_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('seo_text');
        });
    }
}
