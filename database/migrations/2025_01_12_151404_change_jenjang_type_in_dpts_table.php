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
        Schema::table('dpts', function (Blueprint $table) {
            $table->string('jenjang', 10)->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dpts', function (Blueprint $table) {
            $table->enum('jenjang', ['S1', 'D3'])->change();

        });
    }
};
