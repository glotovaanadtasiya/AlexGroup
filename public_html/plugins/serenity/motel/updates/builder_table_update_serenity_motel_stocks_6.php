<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelStocks6 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->boolean('view_add_service')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->dropColumn('view_add_service');
        });
    }
}
