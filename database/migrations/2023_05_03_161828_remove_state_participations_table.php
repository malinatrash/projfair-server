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
        Schema::table('participations', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
        });
        Schema::dropIfExists('state_participations');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('state_participations', function (Blueprint $table) {
            $table->id();
            $table->string('state');
        });
        Schema::table('participations', function (Blueprint $table) {
            $table->foreign('state_id')->on('states')->references('id')->onDelete('cascade');
        });
    }
};
