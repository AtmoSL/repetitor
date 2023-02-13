<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFeedBackStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'title' => 'Новый'
            ],
            [
                'title' => 'Думает'
            ],
            [
                'title' => 'Обработано'
            ],
        ];

        DB::table('landing_feed_back_statuses')->insert($statuses);
    }
}
