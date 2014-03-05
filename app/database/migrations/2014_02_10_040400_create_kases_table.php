<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kases', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('complaint_id')->nullable();
			$table->string('name')->nullable();
			$table->text('details')->nullable();
			$table->integer('agent_id');
			$table->string('division');
			$table->integer('complainant_id');
			$table->string('status')->nullable();
			$table->string('date_assigned')->nullable();
			$table->string('date_reported')->nullable();
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
		Schema::drop('kases');
	}

}
