<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_codes', function (Blueprint $table) {
            $table->increments('d');
            $table->integer('user_id');
            $table->string('activation_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('user_codes', function (Blueprint $table) {
        });
    }
}
