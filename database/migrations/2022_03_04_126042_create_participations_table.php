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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->bigIncrements('id');

            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_candidate');
            $table->unsignedBigInteger('id_state');

            $table->foreign('id_project')->on('projects')->references('id')->onDelete('cascade');
            $table->foreign('id_candidate')->on('candidates')->references('id')->onDelete('cascade');
            $table->foreign('id_state')->on('state_participations')->references('id')->onDelete('cascade');

            $table->string('motivation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
};
