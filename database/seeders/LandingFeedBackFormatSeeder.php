<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFeedBackFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formats = [
            [
                'title' => 'Очно(СПБ)'
            ],
            [
                'title' => 'Заочно'
            ],
        ];

        DB::table('landing_feed_back_formats')->insert($formats);
    }
}
