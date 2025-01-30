@extends('layout.app')

@section('title', 'Student Details')

@section('page-title', 'Student Details')

@section('content')
    <div class="bg-white p-5 shadow-md rounded-md">
        <h2 class="text-xl font-bold text-blue-500">Student Details</h2>

        <div class="mt-4">
            <div class="mb-4">
                <span class="font-semibold text-gray-600">Name:</span>
                <p class="text-lg text-gray-800">{{ $student->name }}</p>
            </div>

            <div class="mb-4">
                <span class="font-semibold text-gray-600">Email:</span>
                <p class="text-lg text-gray-800">{{ $student->email }}</p>
            </div>

            <div class="mb-4">
                <span class="font-semibold text-gray-600">Phone:</span>
                <p class="text-lg text-gray-800">{{ $student->phone }}</p>
            </div>

            <div class="mb-4">
                <span class="font-semibold text-gray-600">Courses:</span>
                <ul class="list-disc pl-5 text-lg text-gray-800">
                    @foreach($student->courses as $course)
                        <li>{{ $course->name }}</li>
                    @endforeach
                </ul>
            </div>

           
            <div class="mt-6 flex space-x-4">
                <a href="{{ route('students.edit', $student->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
                
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                </form>
            </div>

            <div class="mt-6">
                <a href="{{ route('students.index') }}" class="text-blue-600 hover:underline">Back to Students List</a>
            </div>
        </div>
    </div>
@endsection
