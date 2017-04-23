<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('document_type_id');
            $table->integer('document_id');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')->on('customer')
                ->onDelete('cascade');

            $table->foreign('document_type_id')
                ->references('id')->on('documentType')
                ->onDelete('cascade');

            $table->foreign('document_id')
                ->references('id')->on('document')
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
        Schema::dropIfExists('documents');
    }
}
