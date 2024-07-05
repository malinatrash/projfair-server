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
        Schema::table('harvest_settings', function (Blueprint $table) {
            $table->integer('max_project_points')->default(10);
            $table->integer('max_expert_points')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('harvest_settings', function (Blueprint $table) {
            $table->dropColumn('max_project_points');
            $table->dropColumn('max_expert_points');
        });
    }
};
