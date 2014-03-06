<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrossReferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cross_references', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->integer('reference_id');
			$table->string('table');
			$table->integer('tags_id');
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
		Schema::drop('cross_references');
	}

}
