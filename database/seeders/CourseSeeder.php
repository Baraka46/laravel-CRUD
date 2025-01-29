<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); 

        // Generate 15 courses
        for ($i = 0; $i < 15; $i++) {
            DB::table('courses')->insert([
                'name' => $faker->word,         
                'description' => $faker->sentence(10), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
