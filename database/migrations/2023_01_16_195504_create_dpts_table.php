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
        Schema::create('dpts', function (Blueprint $table) {
            $table->string('npm')->primary();
            $table->string('nama_lengkap');
            $table->enum('jenjang',['S1','D3']);
            $table->string('angkatan');
            $table->string('prodi');
            $table->string('nama_singkat_fakultas');
            $table->string('nama_lengkap_fakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dpts');
    }
};
