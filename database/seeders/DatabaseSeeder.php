<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin1',
             'email' => 'admin1@gmail.com',
             'password' => '$2y$10$LOBnYDVSEuT9oAG6Io47JuL5RV2tGmS6ylxLRghtW25d/OAI5NHvy	'
         ]);
    }
}
