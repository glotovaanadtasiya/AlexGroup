<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelQuestions extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_questions', function($table)
        {
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_questions', function($table)
        {
            $table->dropColumn('question');
            $table->dropColumn('answer');
        });
    }
}
