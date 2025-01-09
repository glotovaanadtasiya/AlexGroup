<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelNewsPosts extends Migration
{
    public function up()
    {
        Schema::table('serenity_motel_news_posts', function($table)
        {
            $table->text('slider');
        });
    }
    
    public function down()
    {
        Schema::table('serenity_motel_news_posts', function($table)
        {
            $table->dropColumn('slider');
        });
    }
}
