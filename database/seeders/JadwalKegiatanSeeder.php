<?php

namespace Database\Seeders;

use App\Models\JadwalKegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataDpts = [
                [
                    "jadwal_id"=> "1",
                    "judul"=> "Sosialisai Presma dan Wapresma",
                    "deskripsi"=> "",
                    "tgl"=> "23 Jan 2024"
                ],

            [
                "jadwal_id" => "1",
                "judul" => "Pendaftaran PRESMA WAPRESMA",
                "deskripsi" => "",
                "tgl" => "24 Jan 2024 - 3 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Verifikasi Berkas dan pengumuman lolos berkas",
                "deskripsi" => "",
                "tgl" => "4 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Verifikasi dan Validasi DPT",
                "deskripsi" => "",
                "tgl" => "4 -11 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Penetapan Balon Pres Wapres Oleh DPM",
                "deskripsi" => "",
                "tgl" => "5 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Penetapan Balon Pres Wapres Oleh MPM",
                "deskripsi" => "",
                "tgl" => "5 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Penyerahan Nama Timses dan saksi sekaligus koordinasi dengan saksi ahli paslon",
                "deskripsi" => "",
                "tgl" => "6 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Pengambilan Nomor Urut",
                "deskripsi" => "",
                "tgl" => "7 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Deklarasi PEMIRA Damai dan berintegritas serta Penandatanganan Pakta Integritas",
                "deskripsi" => "",
                "tgl" => "9 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Kampanye Online",
                "deskripsi" => "",
                "tgl" => "10 - 11 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Kampanye Offline",
                "deskripsi" => "",
                "tgl" => "12 - 16 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Debat Kandidat",
                "deskripsi" => "",
                "tgl" => "17 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Masa Terang",
                "deskripsi" => "",
                "tgl" => "18 - 19 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Simulasi Pencoblosan",
                "deskripsi" => "",
                "tgl" => "19 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Pencoblosan",
                "deskripsi" => "",
                "tgl" => "20 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Uji Publik",
                "deskripsi" => "",
                "tgl" => "21-22 Feb 2024"
            ],
            [
                "jadwal_id" => "1",
                "judul" => "Penetapan dan Pengumuman Hasil",
                "deskripsi" => "",
                "tgl" => "23 Feb 2024"
            ],
        ];;


        foreach ($dataDpts as $data) {
            JadwalKegiatan::create($data);
        }
    }
}
