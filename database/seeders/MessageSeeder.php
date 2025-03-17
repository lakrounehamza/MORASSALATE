<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 messages
        Message::factory(10)->create();
        Message::factory()->create([
            'content' => 'Hello World',
            'user_id' => 1,
            'message_id' => null,
        ]);
    }
}
