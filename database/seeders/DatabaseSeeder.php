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
            'fname' => 'ryan',
            'lname' => 'ait',
            'name' => 'Ryan',
            'email' => 'ryan@gmail.com',
            'status' =>'acepted'
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'hmza',
            'lname' => 'tidjani',
            'name' => 'hamza',
            'email' => 'hamza@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'aymen',
            'lname' => 'mosa',
            'name' => 'Aymen',
            'email' => 'aymen@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'amine',
            'lname' => 'moh',
            'name' => 'Amine',
            'email' => 'amine@gmail.com',
            'faculty_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'wassime',
            'lname' => 'bou',
            'name' => 'Wassim',
            'email' => 'wassim@gmail.com',
            'faculty_id' => 2
        ]);



        Faculty::factory()->create([
            'name' => 'faculty informatique',
            'chef_dept_email' => 'hamza@gmail.com'
        ]);

        Faculty::factory()->create([
            'name' => 'faculty Mathematique',
            'chef_dept_email' => 'hamza1@gmail.com'

        ]);

        Faculty::factory()->create([
            'name' => 'faculty Chimie',
            'chef_dept_email' => 'hamza2@gmail.com'

        ]);

        Faculty::factory()->create([
            'name' => 'faculty Biology',
            'chef_dept_email' => 'hamza3@gmail.com'

        ]);
    }
}
