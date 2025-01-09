<?php namespace Serenity\Motel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSerenityMotelStocks extends Migration
{
    public function up()
    {
        Schema::rename('serenity_motel_discounts', 'serenity_motel_stocks');
        Schema::table('serenity_motel_stocks', function($table)
        {
            $table->string('slug', 255)->nullable();
            $table->text('content')->nullable();
            $table->text('properties')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::rename('serenity_motel_stocks', 'serenity_motel_discounts');
        Schema::table('serenity_motel_discounts', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('content');
            $table->dropColumn('properties');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
