<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMovies3 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->string('slug', 191)->nullable();
        });
    }
}
