<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('discount');
            $table->integer('min');
            $table->integer('condition_type_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('conditions', function (Blueprint $table) {
            $table->foreign('condition_type_id')
                ->references('id')->on('condition_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('conditions');
    }
}
