<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFeedBackClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [];
        for ($i=5; $i <= 11; $i++) { 
            $classes[] = [
                'title' => $i
            ];
        }

        DB::table('landing_feed_back_classes')->insert($classes);
    }
}
