<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvidenceHistoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('evidence_histories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('evidence_id');
            $table->string('type');
            $table->string('date_held')->nullable();
            $table->string('date_released')->nullable();
            $table->string('holder')->nullable();
            $table->string('location')->nullable();
            $table->string('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('evidence_histories');
    }

}
