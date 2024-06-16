<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Fruits',
                'photo' => '1716885045.png',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Vegetables',
                'photo' => '1716885070.jpg',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Banner::insert($banners);
    }
}
