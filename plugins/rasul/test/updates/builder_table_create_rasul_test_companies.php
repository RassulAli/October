<?php namespace Rasul\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRasulTestCompanies extends Migration
{
    public function up()
    {
        Schema::create('rasul_test_companies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 200)->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rasul_test_companies');
    }
}
