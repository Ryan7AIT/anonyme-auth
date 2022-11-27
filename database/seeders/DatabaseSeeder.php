<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ryan',
            'email' => 'ryan@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'hamza',
            'email' => 'hamza@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Aymen',
            'email' => 'aymen@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Amine',
            'email' => 'amine@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Wassim',
            'email' => 'wassim@gmail.com',
            'faculty_id' => 2
        ]);



        Faculty::factory()->create([
            'name' => 'faculty informatique'
        ]);

        Faculty::factory()->create([
            'name' => 'faculty Mathematique'
        ]);

        Faculty::factory()->create([
            'name' => 'faculty Chimie'
        ]);

        Faculty::factory()->create([
            'name' => 'faculty Biology'
        ]);
    }
}
