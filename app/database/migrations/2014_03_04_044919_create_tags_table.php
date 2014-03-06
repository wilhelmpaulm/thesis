<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('reference_id');
            $table->string('table');
            $table->text('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('tags');
    }

}
