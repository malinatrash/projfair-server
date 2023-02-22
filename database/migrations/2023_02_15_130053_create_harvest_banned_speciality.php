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
        Schema::create('harvest_banned_specialities', function (Blueprint $table) {
            $table->id();

            $table->integer('course')->nullable();


            $table->unsignedBigInteger('harvest_setting_id');
            $table->unsignedBigInteger('speciality_id');

            $table->foreign('harvest_setting_id')->on('harvest_settings')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('harvest_banned_specialities');
    }
};
