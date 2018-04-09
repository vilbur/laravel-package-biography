<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiographyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('biography', function(Blueprint $table) {
			$table->increments('id');

			$table->string('project',\Config::get('migrations.lenght.description'))->nullable();
			$table->string('client',\Config::get('migrations.lenght.summary'))->nullable();			
			$table->string('summary',\Config::get('migrations.lenght.summary'))->nullable();
			$table->string('description',\Config::get('migrations.lenght.description'))->nullable();
			$table->string('job_title',\Config::get('migrations.lenght.summary'))->nullable();
			$table->string('image',	\Config::get('migrations.image'))->nullable();

			$table->date('since')->nullable();
			$table->date('until')->nullable();

			$table->timestamps();
		});

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biography');
    }
}
