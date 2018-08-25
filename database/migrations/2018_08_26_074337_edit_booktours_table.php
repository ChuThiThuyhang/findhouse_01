<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditBooktoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_tours', function (Blueprint $table) {
            $table->string('status');
            $table->integer('slot_Book');
            $table->dropColumn('time_book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_tours', function (Blueprint $table) {
            $table->date('time_book');
        });
    }
}
