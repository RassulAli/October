<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMovies2 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->string('slug')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->smallInteger('slug')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
