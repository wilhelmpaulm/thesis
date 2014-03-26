<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_forms', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->integer('agent_id');
			$table->integer('form_id');
			$table->string('form_type');
			$table->string('division')->nullable();
			$table->string('status')->default("Pending");
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
		Schema::drop('case_forms');
	}

}
