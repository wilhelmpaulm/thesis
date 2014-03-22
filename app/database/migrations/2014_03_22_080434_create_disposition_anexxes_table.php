<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispositionAnexxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disposition_anexxes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('disposition_id');
			$table->string('letter');
			$table->string('title')->nullable();
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
		Schema::drop('disposition_anexxes');
	}

}
