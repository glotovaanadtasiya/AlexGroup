<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelReviews3 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->boolean('active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
