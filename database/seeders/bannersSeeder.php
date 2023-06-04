<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
            [
                [
                    'title' => 'SWEETS',
                    'sub_title' => 'SWEETS',
                    'link_title' => 'Buy Now',
                    'link_url' => '#',
                    'status' => 'active',
                    'image_url' => 'SF_0'.rand(01, 023) . '.jpg',
                ],
                [
                    'title' => 'ORGANIC JAGGERY SWEETS',
                    'sub_title' => "ORGANIC JAGGERY SWEETS",
                    'link_title' => 'Buy Now',
                    'link_url' => '#',
                    'status' => 'active',
                    'image_url' => 'SF_0'.rand(024, 033) . '.jpg',
                ],
                [
                    'title' => 'NON-VEG PICKLE',
                    'sub_title' => 'NON-VEG PICKLE',
                    'link_title' => 'Buy Now',
                    'link_url' => '#',
                    'status' => 'active',
                    'image_url' => 'SF_0'.rand(043, 053) . '.jpg',
                ],
                [
                    'title' => 'SPICES',
                    'sub_title' => 'SPICES',
                    'link_title' => 'Buy Now',
                    'link_url' => '#',
                    'status' => 'active',
                    'image_url' => 'SF_0'.rand(071, 077). '.jpg',
                ]
            ]
        );
    }
}
