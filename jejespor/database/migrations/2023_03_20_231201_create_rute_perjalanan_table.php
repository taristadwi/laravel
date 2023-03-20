<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rute_perjalanan', function (Blueprint $table) {
            $table->increments('id_rute');
            $table->unsignedInteger('stasiun_tujuan');
            $table->foreign('stasiun_tujuan')->references('id_stasiun')->on('stasiun')->onDelete('cascade');
            $table->unsignedInteger('stasiun_keberangkatan');
            $table->foreign('stasiun_keberangkatan')->references('id_stasiun')->on('stasiun')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rute_perjalanan');
    }
};
