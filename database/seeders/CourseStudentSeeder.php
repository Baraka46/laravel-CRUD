<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Course;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $students = Student::all();
        $courses = Course::all();

        
        $students->each(function ($student) use ($courses) {
           
            $randomCourses = $courses->random(3);
            
            foreach ($randomCourses as $course) {
                
                DB::table('course_student')->insert([
                    'student_id' => $student->id,
                    'course_id' => $course->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
