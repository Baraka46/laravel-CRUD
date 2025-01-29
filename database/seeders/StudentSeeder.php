<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); 

        // Generate 15 students
        for ($i = 0; $i < 15; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,         
                'email' => $faker->unique()->safeEmail,  
                'phone' => $faker->phoneNumber,  
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
