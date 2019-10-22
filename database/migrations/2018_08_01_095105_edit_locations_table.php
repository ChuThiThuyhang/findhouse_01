<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('location', function (Blueprint $table)
        {
            $table->renameColumn('location_id', 'id');
        });
        Schema::rename('location', 'locations');
    }

    public function down()
    {
        Schema::rename('locations', 'location');
        Schema::table('location', function (Blueprint $table)
        {
            $table->renameColumn('id', 'location_id');
        });
    }
}
