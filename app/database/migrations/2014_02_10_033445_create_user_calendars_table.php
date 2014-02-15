<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_calendars', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('receiver_id');
			$table->integer('sender_id');
			$table->string('action')->nullable();
			$table->string('details')->nullable();
			$table->string('date_start');
			$table->string('date_end');
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
		Schema::drop('user_calendars');
	}

}
