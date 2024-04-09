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
        Schema::create('project_supervisor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('supervisor_id')->on('supervisors')->references('id')->onDelete('cascade');
            $table->foreign('project_id')->on('projects')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_supervisor');
    }
};
