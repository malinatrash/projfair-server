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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('fio');
            $table->string('about');
            $table->string('email');
            $table->string('numz');
            $table->string('phone');
            $table->integer('course');
            $table->string('api_token')->nullable();

            $table->string('training_group');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->on('groups')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
