<?php

namespace Database\Seeders;

use App\Models\Dpt;
use App\Models\Kandidat;
use App\Models\Rekapitulasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekapitulasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kandidatIds = Kandidat::pluck('id')->toArray();

        // Ambil data Dpt yang belum digunakan
        $availableDpt = Dpt::whereNotIn('npm', Rekapitulasi::pluck('dpt_npm')->toArray())->get();

        // Buat data sebanyak yang diinginkan
        $totalData = 150; // Ganti sesuai kebutuhan
        for ($i = 0; $i < $totalData; $i++) {
            // Ambil data kandidat secara acak
            $randomKandidatId = $kandidatIds[array_rand($kandidatIds)];

            // Ambil data Dpt secara acak
            $randomDpt = $availableDpt->random();

            // Simpan data ke tabel Namamodel
            Rekapitulasi::create([
                'kandidat_id' => $randomKandidatId,
                'jadwal_id' => 1,
                'dpt_npm' => $randomDpt->npm,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Hapus data Dpt yang sudah digunakan agar tidak terjadi duplikasi
            $availableDpt = $availableDpt->reject(function ($dpt) use ($randomDpt) {
                return $dpt->npm === $randomDpt->npm;
            });
        }
    }
}
