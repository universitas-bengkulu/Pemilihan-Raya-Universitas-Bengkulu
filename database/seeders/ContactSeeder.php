<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'jadwal_id' => '1',
            'marquee' => 'Kontak Narahubung KPU Universitas Bengkulu, E-mail : Kpu.unib22@gmail.com, WhatsApp : +62 831-8716-1914, +62 813-6962-1347',
            'no_tlp' => '6283187161914; 6281369621347',
            'email' =>  'Kpu.unib22@gmail.com',
            'facebook' =>  'https://www.facebook.com/kpu.unib.3',
            'instagram' =>  'https://www.instagram.com/kpu_kbmunib/',
            'twitter' =>  '#',
        ]);
    }
}
