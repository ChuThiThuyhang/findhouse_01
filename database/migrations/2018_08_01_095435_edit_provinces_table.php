<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditProvincesTable extends Migration
{
    public function up()
    {
        Schema::table('province', function (Blueprint $table)
        {
            $table->renameColumn('province_id', 'id');
        });
        Schema::rename('province', 'provinces');
    }

    public function down()
    {
        Schema::rename('provinces', 'province');
        Schema::table('province', function (Blueprint $table)
        {
            $table->renameColumn('id', 'province_id');
        });
    }
}
