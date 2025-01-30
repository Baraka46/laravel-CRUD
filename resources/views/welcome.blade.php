@extends('layout.app')

@section('title', 'Welcome to Our Application')

@section('content')
<div class="bg-gray-100 min-h-screen flex flex-col items-center justify-center py-12 px-6 sm:px-8">
    <div class="max-w-md w-full text-center">
        <h1 class="text-4xl font-extrabold text-blue-500 mb-4">
            Welcome to Our Application!
        </h1>
        <p class="text-lg text-gray-600 mb-6">
            We're excited to have you here. This is your new custom welcome page.
        </p>
        <a href="" class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">
            Get Started
        </a>
    </div>
</div>
@endsection
