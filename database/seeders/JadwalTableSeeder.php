<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert([
            'tanggal' => Carbon::create(2024, 1, 16),
            'waktu_mulai' => '18:00',
            'waktu_selesai' => '24:00',
            'status_jadwal' => 1,
        ]);
    }
}
