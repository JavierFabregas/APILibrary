<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLendBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lend_book', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_user');
            $table->Integer('id_book');
            $table->timestamps();

            $table->foreing('id_user')->references('id')->on('users');
            $table->foreing('id_book')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_lend_book');
    }
}
