<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('last_name');
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('alias')->nullable();
			$table->string('birthdate')->nullable();
			$table->string('occupation')->nullable();
			$table->string('sex')->nullable();
			$table->string('civil_status')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('birth_place')->nullable();
			$table->string('educational_attainment')->nullable();
			$table->string('hair_color')->nullable();
			$table->string('eye_color')->nullable();
			$table->string('height')->nullable();
			$table->string('weight')->nullable();
			$table->string('complexion')->nullable();
			$table->string('build')->nullable();
			$table->string('race')->nullable();
			$table->string('img_picture')->nullable();
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
		Schema::drop('clients');
	}

}
