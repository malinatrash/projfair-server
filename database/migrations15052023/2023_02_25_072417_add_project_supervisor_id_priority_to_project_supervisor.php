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

            $table->integer('priority')->nullable();
            $table->unsignedBiginteger('project_supervisor_role_id')->nullable();
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
            $table->dropColumn('priority');
            $table->dropConstrainedForeignId('project_supervisor_role_id');
        });
    }
};
