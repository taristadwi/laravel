<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->unsignedInteger('id_rute');
            $table->foreign('id_rute')->references('id_rute')->on('rute_perjalanan')->onDelete('cascade');

            $table->unsignedInteger('id_kereta');
            $table->foreign('id_kereta')->references('id_kereta')->on('kereta')->onDelete('cascade');

            $table->unsignedInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     * @return voidC
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
};
