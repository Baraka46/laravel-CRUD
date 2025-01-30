<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
   
});
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::get('courses/{course}/assign-students', [CourseController::class, 'assignStudentsForm'])->name('courses.assign.form');
Route::post('courses/{course}/assign-students', [CourseController::class, 'assignStudents'])->name('courses.assign');
Route::delete('courses/{course}/students/{student}', [CourseController::class, 'removeStudent'])->name('courses.remove.student');
