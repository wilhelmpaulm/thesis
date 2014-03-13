<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvidenceObjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('evidence_objects', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->string('owner')->nullable();
            $table->string('title')->nullable();
              $table->integer('user_id')->nullable();
            $table->text('details')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('date_received')->nullable();
            $table->string('file_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('evidence_objects');
    }

}
