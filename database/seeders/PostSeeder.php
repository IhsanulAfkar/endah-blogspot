<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 50) as $index) { // Generate 50 fake posts
            Post::create([
                'title' => $faker->sentence(6, true), 
                'slug' => Str::slug($faker->sentence(6, true), '-'),
                'content' => $faker->paragraphs(3, true), 
                'is_published' => $faker->boolean(80), 
                'category_id' => 1, 
                'labels' => implode(',', $faker->words(3)), 
                'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'views' => $faker->numberBetween(0, 1000),
            ]);
        }
    }
}
