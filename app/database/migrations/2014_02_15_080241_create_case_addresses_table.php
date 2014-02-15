<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('province')->nullable();
			$table->string('barangay')->nullable();
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
		Schema::drop('case_addresses');
	}

}
