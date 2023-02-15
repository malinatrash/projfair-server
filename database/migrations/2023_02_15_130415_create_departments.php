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
    { // КАФЕДРЫ
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->unsignedBigInteger('institute_id');
            $table->foreign('institute_id')->on('institutes')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
