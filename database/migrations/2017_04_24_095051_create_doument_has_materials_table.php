<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoumentHasMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doument_has_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('document_id')->unsigned();
            $table->integer('material_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('doument_has_materials', function (Blueprint $table) {
            $table->foreign('material_id')
                ->references('id')->on('materials')
                ->onDelete('cascade');

            $table->foreign('document_id')
                ->references('id')->on('documents')
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
        Schema::dropIfExists('doument_has_materials');
    }
}
