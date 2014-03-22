<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormCoordinationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_coordinations', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->integer('agent_id');
			$table->string('area');
			$table->string('time');
			$table->string('date');
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
		Schema::drop('form_coordinations');
	}

}
