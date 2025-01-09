<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSerenityMotelNewsPosts extends Migration
{
    public function up()
    {
        Schema::create('serenity_motel_news_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->text('introtext')->nullable();
            $table->text('content')->nullable();
            $table->string('slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('sort_order')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('serenity_motel_news_posts');
    }
}
