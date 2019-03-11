<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasulMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('rasul_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->smallInteger('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasul_movies_genres');
    }
}
