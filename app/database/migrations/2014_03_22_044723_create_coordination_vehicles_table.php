<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoordinationVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coordination_vehicles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('coordination_id');
			$table->string('vehicle')->nullable();
			$table->string('model')->nullable();
			$table->string('plate_no')->nullable();
			$table->string('color')->nullable();
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
		Schema::drop('coordination_vehicles');
	}

}
