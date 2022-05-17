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
        Schema::create('speciality_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('speciality_id');
            $table->integer('course');

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
        Schema::dropIfExists('speciality_courses');
    }
};
