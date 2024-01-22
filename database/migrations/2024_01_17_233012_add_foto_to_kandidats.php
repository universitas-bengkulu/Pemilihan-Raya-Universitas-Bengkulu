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
        Schema::table('kandidats', function (Blueprint $table) {
            $table->text('visi')->change();
            $table->string('foto_ketua')->after('nomor_hp_calon_ketua')->nullable();
            $table->string('foto_wakil_ketua')->after('nomor_hp_calon_wakil_ketua')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kandidats', function (Blueprint $table) {
            $table->dropColumn('foto_ketua');
            $table->dropColumn('foto_wakil_ketua');

        });
    }
};
