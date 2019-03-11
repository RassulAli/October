<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasulMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('rasul_movies_actors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasul_movies_actors');
    }
}
