<?php namespace Rasul\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRasulMovies5 extends Migration
{
    public function up()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('rasul_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
