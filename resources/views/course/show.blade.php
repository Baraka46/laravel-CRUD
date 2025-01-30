@extends('layout.app')

@section('title', 'Course Details')

@section('page-title', 'Course Details')

@section('content')
    <div class="bg-white p-5 shadow-md rounded-md">
        <h2 class="text-xl font-bold text-blue-500">Course Details</h2>

        <div class="mt-4">
            <div class="mb-4">
                <span class="font-semibold text-gray-600">Course Name:</span>
                <p class="text-lg text-gray-800">{{ $courses->name }}</p>
            </div>

            <div class="mb-4">
                <span class="font-semibold text-gray-600">Description:</span>
                <p class="text-lg text-gray-800">{{ $courses->description }}</p>
            </div>

            <div class="mb-4">
                <span class="font-semibold text-gray-600">Students Enrolled:</span>
                <ul class="list-disc pl-5 text-lg text-gray-800">
                    @foreach($courses->students as $student)
                        <li>{{ $student->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-6 flex space-x-4">
                <a href="{{ route('courses.edit', $courses->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</a>
                
                <form action="{{ route('courses.destroy', $courses->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button>
                </form>
                <a href="{{ route('courses.assign.form', $courses->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Assign students</a>
            </div>

            <div class="mt-6">
                <a href="{{ route('courses.index') }}" class="text-blue-600 hover:underline">Back to Courses List</a>
            </div>
        </div>
    </div>
@endsection
