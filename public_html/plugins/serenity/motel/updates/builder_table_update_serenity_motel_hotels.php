<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
        });
    }
}
