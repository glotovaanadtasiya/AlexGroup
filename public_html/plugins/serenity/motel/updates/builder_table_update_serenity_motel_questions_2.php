<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelQuestions2 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_questions', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_questions', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
