<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookToursTable extends Migration
{
    public function up()
    {
        Schema::create('book_tours', function (Blueprint $table) {
            $table->increments('bookid');
            $table->integer('tour_id');
            $table->integer('users_id');
            $table->date('time_book');
            $table->float('price_total');
            $table->string('description');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('book_tours');
    }
}
