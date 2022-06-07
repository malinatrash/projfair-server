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
            $table->longText('goal');
            $table->longText('description');
            $table->tinyInteger('difficulty');
            $table->date('date_start');
            $table->date('date_end');
            $table->longText('requirements');
            $table->longText('customer')->nullable();
            $table->longText('additional_inf')->nullable();
            $table->longText('product_result');
            $table->longText('study_result');
            $table->longText('supervisors')->nullable();


            $table->unsignedBiginteger('state_id');
            $table->unsignedBiginteger('supervisor_id')->nullable();
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
