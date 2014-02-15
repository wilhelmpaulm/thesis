<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('complaint_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('complaint_id');
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
		Schema::drop('complaint_addresses');
	}

}
