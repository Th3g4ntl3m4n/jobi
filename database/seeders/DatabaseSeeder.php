<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(1)->create();

       User::create([
        'name' => 'Jefferson Hernandez',
        'email' => 'jeffersonhernandezc@outlook.com',
        'password' => bcrypt('password'),
       ])->assignRole('1');

      

        \App\Models\Cv::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);
    }
}