<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelStocks9 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->text('mobiletext')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->dropColumn('mobiletext');
        });
    }
}
