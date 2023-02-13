<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Landing\FeedBack\LandingFeedBack;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(LandingFeedBackClassSeeder::class);
        $this->call(LandingFeedBackFormatSeeder::class);
        $this->call(LandingFeedBackStatusSeeder::class);
        $this->call(LandingFeedBackTargetSeeder::class);
        $this->call(LandingFeedBackSubjectSeeder::class);
        LandingFeedBack::factory(10)->create();
    }
}
