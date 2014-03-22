<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransmitalAnexxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transmital_anexxes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('transmital_id');
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
		Schema::drop('transmital_anexxes');
	}

}
