<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormSubpoenasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('form_subpoenas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->integer('agent_id');
            $table->string('location');
            $table->string('time');
            $table->string('date_requested');
            $table->string('date_signed');
            $table->string('chief')->nullable();
            $table->string('status')->nullable()->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('form_subpoenas');
    }

}
