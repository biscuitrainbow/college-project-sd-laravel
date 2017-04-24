<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemListHasDocumentsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('item_list_has_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_list_id')->unsigned();
            $table->integer('document_id')->unsigned();
        });

        Schema::table('item_list_has_documents', function (Blueprint $table) {
            $table->foreign('item_list_id')
                ->references('id')->on('item_lists')
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
    public function down() {
        Schema::dropIfExists('item_list_has_documents');
    }
}
