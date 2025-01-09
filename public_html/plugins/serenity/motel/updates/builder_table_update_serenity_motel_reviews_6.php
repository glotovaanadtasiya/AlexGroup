<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelReviews6 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->string('rating_service', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('rating_room', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('rating_food', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->boolean('rating_service')->nullable()->unsigned(false)->default(null)->change();
            $table->boolean('rating_room')->nullable()->unsigned(false)->default(null)->change();
            $table->boolean('rating_food')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
