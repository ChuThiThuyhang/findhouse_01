<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditToursTable extends Migration
{
    public function up()
    {
        Schema::table('tours', function (Blueprint $table)
        {
            $table->renameColumn('tour_id', 'id');
            $table->string('image');
            $table->integer('slot');
            $table->string('transport');
            $table->float('priceKid');
            $table->string('type');
            $table->string('pricekidsup');
        });
    }

    public function down()
    {
        Schema::table('tours', function (Blueprint $table)
        {
            $table->renameColumn('id', 'tour_id');
        });
    }
}
