<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelHotels2 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->text('standart_prop')->nullable();
            $table->text('junior_suite_prop')->nullable();
            $table->text('suite_prop')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_hotels', function($table)
        {
            $table->dropColumn('standart_prop');
            $table->dropColumn('junior_suite_prop');
            $table->dropColumn('suite_prop');
        });
    }
}
