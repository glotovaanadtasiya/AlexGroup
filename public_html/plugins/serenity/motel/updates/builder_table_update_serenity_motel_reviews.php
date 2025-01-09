<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelReviews extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->string('name', 255)->nullable();
            $table->text('text')->nullable();
            $table->string('author', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_reviews', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('text');
            $table->dropColumn('author');
			
			$table->dropColumn('hotel');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
