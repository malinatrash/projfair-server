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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //$table->bigIncrements('id');
            $table->string('title');
            $table->integer('places');
            $table->string('goal');
            $table->string('description');
            $table->tinyInteger('difficulty');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('requirements');
            $table->string('customer')->nullable();
            $table->string('additional_inf')->nullable();
            $table->string('product_result');
            $table->string('study_result');
            $table->string('result')->nullable();

            $table->unsignedBiginteger('state_id');
            $table->unsignedBiginteger('supervisor_id');
            $table->unsignedBiginteger('type_id');

            //FK
            $table->foreign('state_id')->on('states')->references('id')->onDelete('cascade');
            $table->foreign('supervisor_id')->on('supervisors')->references('id')->onDelete('cascade');
            $table->foreign('type_id')->on('types')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
