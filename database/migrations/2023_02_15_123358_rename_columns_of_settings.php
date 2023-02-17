<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('harvest_settings', function (Blueprint $table) {
            $table->renameColumn('start', 'start_date_participation_harvest');
            $table->renameColumn('deadline', 'end_date_participation_harvest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('harvest_settings', function (Blueprint $table) {
            $table->renameColumn('start_date_participation_harvest', 'start');
            $table->renameColumn('end_date_participation_harvest', 'deadline');
        });
    }
};
