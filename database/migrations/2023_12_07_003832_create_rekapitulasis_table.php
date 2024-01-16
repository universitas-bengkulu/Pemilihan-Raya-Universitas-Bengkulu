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
        Schema::create('rekapitulasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kandidat_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->string('dpt_npm');
            $table->timestamps();

            $table->foreign('kandidat_id')->references('id')->on('kandidats');
            $table->foreign('jadwal_id')->references('id')->on('jadwals');
            $table->foreign('dpt_npm')->references('npm')->on('dpts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapitulasis');
    }
};
