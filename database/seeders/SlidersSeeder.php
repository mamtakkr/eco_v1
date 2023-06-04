<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert(
            [
                [
                    'title' => 'SWEETS',
                    'sub_title' => 'SWEETS',
                    'short_description'=>'Contrary to popular belief',
                    'status' => 'show',
                    'image_url' => 'SF_0'.rand(01, 023) . '.jpg',
                ],
                [
                    'title' => 'ORGANIC JAGGERY SWEETS',
                    'sub_title' => "ORGANIC JAGGERY SWEETS",
                    'short_description'=>'Contrary to popular belief',
                    'status' => 'show',
                    'image_url' => 'SF_0'.rand(024, 033) . '.jpg',
                ],
                [
                    'title' => 'NON-VEG PICKLE',
                    'sub_title' => "NON-VEG PICKLE",
                    'short_description'=>'Contrary to popular belief',
                    'status' => 'show',
                    'image_url' => 'SF_0'.rand(043, 053) . '.jpg',
                ],
                [
                    'title' => 'SPICES',
                    'sub_title' => "SPICES",
                    'short_description'=>'Contrary to popular belief',
                    'status' => 'show',
                    'image_url' => 'SF_0'.rand(071, 077). '.jpg',
                ]
            ]
        );
    }
}
