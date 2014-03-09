<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseRequirementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_requirements', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->string('status');
			$table->text('requirement')->nullable();
			$table->string('date_requested')->nullable();
			$table->string('date_due')->nullable();
			$table->string('date_received')->nullable();
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
		Schema::drop('case_requirements');
	}

}
