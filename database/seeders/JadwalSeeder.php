<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwals')->insert([
            'tanggal' => '2023-12-25',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '16:00:00',
            'status_jadwal' =>  1,
        ]);
    }
}
