<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMoviesGenres extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_genres', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('genre_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_genres', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('genre_title', 191)->change();
        });
    }
}
