<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\DptTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            DptTableSeeder::class,
            JadwalTableSeeder::class,
            ContactSeeder::class,
            JadwalKegiatanSeeder::class,
            DptFebTableSeeder::class,
            DptFHTableSeeder::class,
            DptFisipTableSeeder::class,
            DptFkikTableSeeder::class,
            DptFkipTableSeeder::class,
            DptFPTableSeeder::class,
            DptFTTableSeeder::class,

            // tambahkan seeder lainnya di sini
        ]);
    }
}
