<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('autor');
            $table->string('editorial');
            $table->string('description')->nullable();
            $table->string('cover_page');
            $table->string('coste');
            $table->string('code');
            $table->integer('descuento')->default(0);
            $table->integer('user_id')->unsigned()->nullable(); //Publicante
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('one_subtype_id')->unsigned()->nullable();
            $table->foreign('one_subtype_id')->references('id')->on('subtypes');
            $table->integer('two_subtype_id')->unsigned()->nullable();
            $table->foreign('two_subtype_id')->references('id')->on('subtypes');
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('types');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('books');
    }

}
