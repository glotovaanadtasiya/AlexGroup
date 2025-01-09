<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelServices extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_services', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_services', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
