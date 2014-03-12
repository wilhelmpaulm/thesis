<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourceHistoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('resource_histories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->integer('resource_id');
            $table->integer('user_id');
            $table->text('details')->nullable();
            $table->float('amount')->nullable();
            $table->string('status');
            $table->string('date_requested');
            $table->string('date_approved')->nullable();
            $table->string('date_due')->nullable();
            $table->string('date_issued')->nullable();
            $table->string('date_returned')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('resource_histories');
    }

}
