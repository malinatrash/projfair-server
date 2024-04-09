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

        Schema::table('project_supervisor', function (Blueprint $table) {
            $table->dropForeign(['project_supervisor_role_id']);
            $table->dropColumn('project_supervisor_role_id');
        });

        Schema::create('project_supervisor_role', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_supervisor_id');
            $table->unsignedBigInteger('project_supervisor_role_id');

            $table->foreign('project_supervisor_id')->on('project_supervisor')->references('id')->onDelete('cascade');
            $table->foreign('project_supervisor_role_id')->on('project_supervisor_roles')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_supervisor', function (Blueprint $table) {
            $table->unsignedBiginteger('project_supervisor_role_id')->nullable();
            $table->foreign('project_supervisor_role_id')->on('project_supervisor_roles')->references('id')->onDelete('cascade');
        });
        Schema::dropIfExists('project_supervisor_role');
    }
};
