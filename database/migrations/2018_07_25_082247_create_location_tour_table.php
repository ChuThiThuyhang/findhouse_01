<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationTourTable extends Migration
{
    public function up()
    {
        Schema::create('location_tour', function (Blueprint $table) {
            $table->integer('location_id');
            $table->integer('tour_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('location_tour');
    }
}
