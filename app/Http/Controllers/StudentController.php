<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students =Student::with('courses')->get();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:15',
        ]);
    
        // Create the student
        Student::create($request->all());
    
        // Redirect to the student list with a success message
        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::with('courses')->findOrFail($id); 
        return view('student.show', compact('student'));
    }
    
   
public function edit(string $id)
{
    $student = Student::findOrFail($id);
    return view('student.edit', compact('student'));
}


public function update(Request $request, string $id)
{
    $student = Student::findOrFail($id);
    $student->update($request->all()); // You can add validation here if needed
    return redirect()->route('students.show', $id)->with('success', 'Student updated successfully');
}


public function destroy(string $id)
{
    $student = Student::findOrFail($id);
    $student->delete();
    return redirect()->route('students.index')->with('success', 'Student deleted successfully');
}

}
