<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelReviews5 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->boolean('rating_service')->nullable();
            $table->boolean('rating_room')->nullable();
            $table->boolean('rating_food')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->dropColumn('rating_service');
            $table->dropColumn('rating_room');
            $table->dropColumn('rating_food');
        });
    }
}
