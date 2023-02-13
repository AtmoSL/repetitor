<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFeedBackTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $targets = [
            [
                'title' => 'ЕГЭ'
            ],
            [
                'title' => 'Общая программа'
            ],
        ];

        DB::table('landing_feed_back_targets')->insert($targets);
    }
}
