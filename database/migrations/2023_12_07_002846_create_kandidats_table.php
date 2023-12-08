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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('nama_calon_ketua');
            $table->string('npm_calon_ketua');
            $table->string('jenis_kelamin_calon_ketua');
            $table->string('prodi_calon_ketua');
            $table->string('jenjang_prodi_calon_ketua');
            $table->string('nomor_hp_calon_ketua');
            $table->string('nama_calon_wakil_ketua');
            $table->string('npm_calon_wakil_ketua');
            $table->string('jenis_kelamin_calon_wakil_ketua');
            $table->string('prodi_calon_wakil_ketua');
            $table->string('jenjang_prodi_calon_wakil_ketua');
            $table->string('nomor_hp_calon_wakil_ketua');
            $table->string('visi');
            $table->string('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
