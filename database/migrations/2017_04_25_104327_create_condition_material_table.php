<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConditionMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_material', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condition_id')->unsigned();
            $table->integer('material_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('condition_material', function (Blueprint $table) {
            $table->foreign('material_id')
                ->references('id')->on('materials')
                ->onDelete('cascade');

            $table->foreign('condition_id')
                ->references('id')->on('conditions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
