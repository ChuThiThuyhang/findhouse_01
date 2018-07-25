<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateTable extends Migration
{
    public function up()
    {
        Schema::create('rate', function (Blueprint $table) {
            $table->increments('rate_id');
            $table->string('name');
            $table->float('rate_point');
            $table->date('start_at');
            $table->integer('rate_date_number');   
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rate');
    }
}
