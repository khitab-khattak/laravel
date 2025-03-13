<?php

namespace Database\Seeders;

use App\Models\job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Khitab Khattak',
            'email' => 'khitabk29@gmail.com',
        ]);
        $this->call(JobSeeder::class);
    }
}
