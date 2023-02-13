<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFeedBackSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
                'title' => 'Математика'
            ],
            [
                'title' => 'Физика'
            ],
            [
                'title' => 'Информатика'
            ],
        ];

        DB::table('landing_feed_back_subjects')->insert($subjects);
    }
}
