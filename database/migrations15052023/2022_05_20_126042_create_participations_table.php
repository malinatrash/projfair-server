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
            $table->integer('priority');
            $table->string('review')->nullable();

            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('state_id');

            $table->foreign('project_id')->on('projects')->references('id')->onDelete('cascade');
            $table->foreign('candidate_id')->on('candidates')->references('id')->onDelete('cascade');
            $table->foreign('state_id')->on('state_participations')->references('id')->onDelete('cascade');
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
