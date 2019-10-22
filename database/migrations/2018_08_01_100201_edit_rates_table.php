<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditRatesTable extends Migration
{
    public function up()
    {
        Schema::table('rate', function (Blueprint $table)
        {
            $table->renameColumn('rate_id', 'id');
        });
        Schema::rename('rate', 'rates');
    }

    public function down()
    {
        Schema::rename('rates', 'rate');
        Schema::table('rate', function (Blueprint $table)
        {
            $table->renameColumn('id', 'rate_id');
        });
    }
}
