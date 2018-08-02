<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditPlansTable extends Migration
{
    public function up()
    {
        Schema::table('plans', function (Blueprint $table)
        {
            $table->renameColumn('plan_id', 'id');
        });
    }

    public function down()
    {
        Schema::table('plans', function (Blueprint $table)
        {
            $table->renameColumn('id', 'plan_id');
        });
    }
}
