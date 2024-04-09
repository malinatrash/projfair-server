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
        Schema::create('active_harvest_setting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harvest_setting_id')->nullable();

            $table->foreign('harvest_setting_id')->on('harvest_settings')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_harvest_setting');
    }
};
