<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('plan_id');
            $table->string('name_plan');
            $table->integer('location_id');
            $table->date('start_at');
            $table->integer('datenumber');
            $table->string('content')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
