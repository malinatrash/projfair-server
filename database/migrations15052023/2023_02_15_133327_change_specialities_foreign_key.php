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
        Schema::table('specialities', function (Blueprint $table) {
            $table->dropConstrainedForeignId('institute_id');

            $table->unsignedBiginteger('department_id')->nullable();
            $table->foreign('department_id')->on('departments')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialities', function (Blueprint $table) {

            $table->dropConstrainedForeignId('department_id');

            $table->unsignedBiginteger('institute_id')->nullable();

            $table->foreign('institute_id')->on('institutes')->references('id')->onDelete('cascade');
        });
    }
};
