<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
                        $table->string('street');
			$table->string('city');
			$table->string('postal_code');
			$table->string('province');
			$table->string('barangay');
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
		Schema::drop('user_addresses');
	}

}
