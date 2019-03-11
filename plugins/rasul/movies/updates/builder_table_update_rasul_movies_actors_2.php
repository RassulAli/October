<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMoviesActors2 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_actors', function($table)
        {
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_actors', function($table)
        {
            $table->string('name', 191)->change();
        });
    }
}
