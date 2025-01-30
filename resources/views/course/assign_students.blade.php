@extends('layout.app')

@section('title', 'Assign Students')

@section('page-title', 'Assign Students to ' . $course->name)

@section('content')
<div class="bg-white p-5 shadow-md rounded-md">
    <div class="flex justify-between items-center">
        <h2 class="text-xl font-bold text-blue-500">Assign Students to {{ $course->name }}</h2>
        <a href="{{ route('courses.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Back to Courses</a>
    </div>

    <form action="{{ route('courses.assign', $course->id) }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="students" class="block text-gray-700 font-bold mb-2">Select Students:</label>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($students as $student)
                    <div class="flex items-center space-x-2 border border-gray-300 p-3 rounded-md shadow-sm">
                        <input 
                            type="checkbox" 
                            name="students[]" 
                            value="{{ $student->id }}" 
                            id="student-{{ $student->id }}" 
                            class="form-checkbox h-5 w-5 text-blue-500 focus:ring-blue-500 focus:border-blue-500">
                        <label for="student-{{ $student->id }}" class="text-gray-700">
                            <span class="font-semibold">{{ $student->name }}</span> 
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Assign Students
        </button>
    </form>

    @if($course->students->count() > 0)
        <h3 class="mt-6 text-lg font-bold text-gray-700">Assigned Students</h3>
        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($course->students as $index => $student)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $student->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="{{ route('courses.remove.student', [$course->id, $student->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
