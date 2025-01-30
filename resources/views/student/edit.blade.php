@extends('layout.app')

@section('title', 'Edit Student')

@section('page-title', 'Edit Student')

@section('content')
    <div class="bg-white p-5 shadow-md rounded-md">
        <h2 class="text-xl font-bold text-blue-500">Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-semibold text-gray-600">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">Update Student</button>
        </form>

        <div class="mt-6">
            <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:underline">Back to Student Details</a>
        </div>
    </div>
@endsection
