<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinceTable extends Migration
{
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->increments('province_id');
            $table->string('province_name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('province');
    }
}
