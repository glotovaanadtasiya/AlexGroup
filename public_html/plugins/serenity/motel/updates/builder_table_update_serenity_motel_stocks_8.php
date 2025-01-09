<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelStocks8 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->boolean('dont_display_in_app')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->dropColumn('dont_display_in_app');
        });
    }
}
