<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComplaintsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('complaints', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('division')->nullable();
            $table->string('client_id')->nullable();
            $table->string('date_commited')->nullable();
            $table->string('date_reported')->nullable();
            $table->text('narration')->nullable();
            $table->string('agency_reported')->nullable();
            $table->text('agency_report_details')->nullable();
            $table->string('agency_report_status')->nullable();
            $table->text('court_action_details')->nullable();
            $table->text('considerations')->string();
            $table->string('img_signature')->nullable();
            $table->string('img_right_thumb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('complaints');
    }

}
