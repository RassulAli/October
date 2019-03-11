<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMoviesGenres3 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_genres', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_genres', function($table)
        {
            $table->string('slug', 191)->nullable();
        });
    }
}
