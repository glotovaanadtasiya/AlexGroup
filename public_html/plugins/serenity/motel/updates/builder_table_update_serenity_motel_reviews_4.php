<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelReviews4 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->integer('hotel_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->dropColumn('hotel_id');
        });
    }
}
