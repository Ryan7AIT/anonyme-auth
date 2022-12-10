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
            'name' => 'Society 1',
            'chef_dept_email' => 'hamza@gmail.com',
            'description' => 'test description'
        ]);

        Society::factory()->create([
            'name' => 'Society 2',
            'chef_dept_email' => 'hamza1@gmail.com',
            'description' => 'test description'

        ]);

        Society::factory()->create([
            'name' => 'Society 3',
            'chef_dept_email' => 'hamza2@gmail.com',
            'description' => 'test description'

        ]);

        Society::factory()->create([
            'name' => 'Society 4',
            'chef_dept_email' => 'hamza3@gmail.com',
            'description' => 'test description'


        ]);


        \App\Models\User::factory()->create([
            'fname' => 'ryan',
            'lname' => 'ait',
            'name' => 'chef de society 1',
            'email' => 'chef1@gmail.com',
            'society_id' => 1
        ]);


        \App\Models\User::factory()->create([
            'fname' => 'ryan',
            'lname' => 'ait',
            'name' => 'ryan',
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
            'fname' => 'hmza1',
            'lname' => 'tidjani1',
            'name' => 'chef2',
            'email' => 'hamza1@gmail.com',
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
            'society_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'lilia',
            'lname' => 'alious',
            'name' => 'lilia',
            'email' => 'lilia@gmail.com',
            'society_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'wassime',
            'lname' => 'bou',
            'name' => 'Wassim',
            'email' => 'wassim@gmail.com',
            'society_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'oumamima',
            'lname' => 'zer',
            'name' => 'oumamima',
            'email' => 'oumamima@gmail.com',
            'society_id' => 2
        ]);


        \App\Models\User::factory()->create([
            'fname' => 'boss2',
            'lname' => 'boss2',
            'name' => 'chef de el badr',
            'email' => 'elbadr@gmail.com',
            'id' => 11
        ]);

        \App\Models\User::factory()->create([
            'fname' => 'boss1',
            'lname' => 'boss1',
            'name' => 'chef de bna',
            'email' => 'bna@gmail.com',
            'id' => 10

        ]);


        Bank::factory()->create([
            'name' => 'BNA',
            'user_id' => 10
        ]);

        Bank::factory()->create([
            'name' => 'EL Badr',
            'user_id' => 11
        ]);

    }
}
