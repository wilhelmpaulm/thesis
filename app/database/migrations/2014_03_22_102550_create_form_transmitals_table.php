<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormTransmitalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_transmitals', function(Blueprint $table) {
			$table->increments('id');
			$table->string('date');
			$table->integer('case_id');
			$table->integer('agent_id');
			$table->text('header')->nullable();
			$table->text('closing')->nullable();
			$table->text('introduction')->nullable();
			$table->text('crime')->nullable();
			$table->text('how')->nullable();
			$table->text('to')->nullable();
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
		Schema::drop('form_transmitals');
	}

}
