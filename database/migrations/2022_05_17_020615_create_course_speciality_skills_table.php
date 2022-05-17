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
        Schema::create('course_speciality_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('specialityCouse_id');

            $table->foreign('skill_id')->on('skills')->references('id')->onDelete('cascade');
            $table->foreign('specialityCouse_id')->on('speciality_courses')->references('id')->onDelete('cascade');
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_speciality_skills');
    }
};
