<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMoviesActors3 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_actors', function($table)
        {
            $table->string('lastname')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_actors', function($table)
        {
            $table->integer('lastname')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
