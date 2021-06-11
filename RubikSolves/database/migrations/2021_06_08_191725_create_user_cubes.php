<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCubes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cubes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('cube_type_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('cube_type_id')->references('id')->on('cube_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_cubes');
    }
}
