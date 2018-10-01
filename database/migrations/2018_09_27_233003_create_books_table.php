<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price');
            $table->string('title');
            $table->string('author');
            $table->string('genres');
            $table->integer('pages')->unsigned();
            $table->string('publisher');
            $table->integer('year')->unsigned();
            $table->integer('hardcover')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->integer('updated_at')->unsigned();
            $table->integer('created_at')->unsigned();
            $table->integer('created_by')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
