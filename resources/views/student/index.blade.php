@extends('layout.app')

@section('title', 'Students List')

@section('page-title', 'All Students')

@section('content')
<div class="bg-white p-5 shadow-md rounded-md">
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-blue-500">List of Students</h2>
        <a href="{{ route('students.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add Student</a>
    </div>
        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $index => $student)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:underline">
                                {{ $student->name }}
                            </a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
