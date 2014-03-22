<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormDispositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form_dispositions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('case_id');
			$table->integer('agent_id');
			$table->text('synopsis')->nullable();
			$table->text('coc')->nullable();
			$table->text('ma')->nullable();
			$table->text('cop')->nullable();
			$table->text('mfe')->nullable();
			$table->text('recommendations')->nullable();
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
		Schema::drop('form_dispositions');
	}

}
