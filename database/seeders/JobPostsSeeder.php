<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JobPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('jobposts')->insert([
                'title' => fake()->words(rand(3, 10), true),
                'description' => fake()->paragraph(),
                'img' => fake()->imageUrl(640, 480),
                'experience' => rand(1, 10),
                'location' => fake()->city(),
                'requirements' => fake()->sentence(),
                'category' => fake()->word(),
                'salary' => rand(20000, 80000),
                'field' => fake()->word(),
                'user_id' => rand(1, 5),
            ]);
        }
    }
}
