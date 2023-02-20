<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0;$i<5;$i++) {
            DB::table('contents')->insert([
                'category_id' => rand(1,8),
                'title' => $faker->title,
                'image' => $faker->imageUrl('800', '400', 'cats', true, 'Faker'),
                'text' => $faker->paragraph(6),
                'slug' => str::slug($faker->title),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
