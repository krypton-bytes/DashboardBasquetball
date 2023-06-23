<?php

namespace Database\Seeders;
//seeder
use Database\Seeders\entrenadorSeeder;
use Database\Seeders\equipoSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);
        $this->call(entrenadorSeeder::class);
        $this->call(equipoSeeder::class);
    }
}
