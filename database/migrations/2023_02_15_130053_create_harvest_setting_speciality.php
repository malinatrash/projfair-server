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
        Schema::create('setting_speciality', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('setting_id');
            $table->unsignedBigInteger('speciality_id');

            $table->foreign('setting_id')->on('harvest_settings')->references('id')->onDelete('cascade');
            $table->foreign('speciality_id')->on('specialities')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_speciality');
    }
};
