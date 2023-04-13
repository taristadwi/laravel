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
        Schema::create('rute_perjalanan', function (Blueprint $table) {
            $table->increments('id_rute');
            $table->unsignedInteger('id_stasiun');
            $table->foreign('id_stasiun')->references('id_stasiun')->on('stasiun')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rute_perjalanan');
    }
};
