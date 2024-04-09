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
        Schema::create('theme_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('theme_source_id')->nullable();
            $table->foreign('theme_source_id')->on('theme_sources')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_sources');


        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['theme_source_id']);
            $table->dropColumn('theme_source_id');
        });
    }
};
