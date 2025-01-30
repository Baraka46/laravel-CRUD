@extends('layout.app')

@section('title', 'Courses List')

@section('page-title', 'All Courses')

@section('content')
    <div class="bg-white p-5 shadow-md rounded-md">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-blue-500">List of Courses</h2>
            <a href="{{ route('courses.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add Course</a>
        </div>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Course Name</th>
                    <th class="border border-gray-300 px-4 py-2">Description</th>
                    <th class="border border-gray-300 px-4 py-2">no of Students</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $index => $course)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('courses.show', $course->id) }}" class="text-blue-600 hover:underline">
                                {{ $course->name }}
                            </a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $course->description }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ count($course->students) }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
