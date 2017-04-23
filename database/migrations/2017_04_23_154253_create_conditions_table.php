<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('material_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('conditions', function (Blueprint $table) {
            $table->foreign('condition_type_id')
                ->references('id')->on('document_types')
                ->onDelete('cascade');

            $table->foreign('material_id')
                ->references('id')->on('materials')
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
