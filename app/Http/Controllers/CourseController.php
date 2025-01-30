<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses =Course::with('students')->get();
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|unique:courses,name',
            'description' => 'required|string|max:255',
        ]);
    
       
        Course::create($request->all());
    
        // Redirect to the student list with a success message
        return redirect()->route('courses.index')->with('success', 'Student created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses = Course::with('students')->findOrFail($id); 
        return view('course.show', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $courses = Course::findOrFail($id);
    return view('course.edit', compact('courses'));
}


public function update(Request $request, string $id)
{
    $courses = Course::findOrFail($id);
    $courses->update($request->all()); // You can add validation here if needed
    return redirect()->route('course.show', $id)->with('success', 'Student updated successfully');
}


public function destroy(string $id)
{
    $courses = Course::findOrFail($id);
    $courses->delete();
    return redirect()->route('courses.index')->with('success', 'Student deleted successfully');
}


//assigning


public function assignStudentsForm($courseId)
    {
        $course = Course::findOrFail($courseId);
        $students = Student::all(); 
        return view('course.assign_students', compact('course', 'students'));
    }

    public function assignStudents(Request $request, $courseId)
    {
        $request->validate([
            'students' => 'required|array',
            'students.*' => 'exists:students,id' 
        ]);

        $course = Course::findOrFail($courseId);
        $course->students()->sync($request->students); 

        return redirect()->route('courses.show', $courseId)->with('success', 'Students assigned successfully');
    }

     
    public function removeStudent($courseId, $studentId)
    {
        $course = Course::findOrFail($courseId);
        $course->students()->detach($studentId); 

        return redirect()->route('courses.show', $courseId)->with('success', 'Student removed from course');
    }
}
