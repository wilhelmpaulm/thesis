<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseEvidencesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('case_evidences', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->string('type');
            $table->integer('evidence_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('case_evidences');
    }

}
