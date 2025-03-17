<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 users
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'John Doe',
            'email' => '',
            'password' => 'password',
            'photo' => '',     
           ]);
    }
}
