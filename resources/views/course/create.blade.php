@extends('layout.app')

@section('title', 'Create Course')

@section('page-title', 'Create a New Course')

@section('content')
    <div class="bg-white p-5 shadow-md rounded-md">
        <h2 class="text-xl font-bold text-blue-500">Create New Course</h2>

        <form action="{{ route('courses.store') }}" method="POST" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-semibold">Course Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full p-2 border border-gray-300 rounded-md" required>
                @error('name')
                    <div class="text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-600 font-semibold">Description</label>
                <textarea name="description" id="description" rows="4" class="w-full p-2 border border-gray-300 rounded-md" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Create Course</button>
        </form>
    </div>
@endsection
