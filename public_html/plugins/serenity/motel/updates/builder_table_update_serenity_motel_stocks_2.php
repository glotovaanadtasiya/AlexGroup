<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelStocks2 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
