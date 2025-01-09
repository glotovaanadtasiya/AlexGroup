<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelNewsPosts2 extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_news_posts', function($table)
        {
            $table->text('slider')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_news_posts', function($table)
        {
            $table->text('slider')->nullable(false)->change();
        });
    }
}
