<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvidenceDocumentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('evidence_documents', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('case_id');
            $table->float('version')->default("1.0");
            $table->integer('origin_id');
            $table->string('title')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('details')->nullable();
            $table->string('owner')->nullable();
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
        Schema::drop('evidence_documents');
    }

}
