<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemLogsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('system_logs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('target_id');
            $table->integer('case_id')->nullable();
            $table->integer('reference_id')->nullable();
            $table->string('table')->nullable();
            $table->string('status')->nullable()->default("unread");
            $table->string('division');
            $table->string('action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('system_logs');
    }

}
