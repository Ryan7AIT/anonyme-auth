<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bank;
use App\Models\Faculty;
use App\Models\Society;
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




        Society::factory()->create([
            'name' => 'faculty informatique',
            'chef_dept_email' => 'hamza@gmail.com',
            'description' => 'test description'
        ]);

        Society::factory()->create([
            'name' => 'faculty Mathematique',
            'chef_dept_email' => 'hamza1@gmail.com',
            'description' => 'test description'

        ]);

        Society::factory()->create([
            'name' => 'faculty Chimie',
            'chef_dept_email' => 'hamza2@gmail.com',
            'description' => 'test description'

        ]);

        Society::factory()->create([
            'name' => 'faculty Biology',
            'chef_dept_email' => 'hamza3@gmail.com',
            'description' => 'test description'

        ]);

        \App\Models\User::factory()->create([
            'fname' => 'ryan',
            'lname' => 'ait',
            'name' => 'chef1',
            'email' => 'ryan@gmail.com',
            'society_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'hmza',
            'lname' => 'tidjani',
            'name' => 'chef2',
            'email' => 'hamza@gmail.com',
            'society_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'aymen',
            'lname' => 'mosa',
            'name' => 'Aymen',
            'email' => 'aymen@gmail.com',
            'society_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'amine',
            'lname' => 'moh',
            'name' => 'Amine',
            'email' => 'amine@gmail.com',
            'society_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'wassime',
            'lname' => 'bou',
            'name' => 'Wassim',
            'email' => 'wassim@gmail.com',
            'society_id' => 2
        ]);


        \App\Models\User::factory()->create([
            'fname' => 'boss2',
            'lname' => 'boss2',
            'name' => 'boss2',
            'email' => 'boss2@gmail.com',
            'id' => 11
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'boss1',
            'lname' => 'boss1',
            'name' => 'boss1',
            'email' => 'boss1@gmail.com',
            'id' => 10

        ]);


        Bank::factory()->create([
            'name' => 'bank 1',
            'user_id' => 10
        ]);

        Bank::factory()->create([
            'name' => 'bank 2',
            'user_id' => 11
        ]);

    }
}
