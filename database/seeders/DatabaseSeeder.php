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
        \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ryan',
            'email' => 'ryan@gmail.com',
        ]);

        Faculty::factory(4)->create();
    }
}
