@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Dashboard
    </h2>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">✅ You're logged in!</h1>

            <a href="{{ route('posts.index') }}"
               class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded hover:bg-blue-800 transition">
                🚀 Go to Blog App
            </a>
        </div>
    </div>
@endsection
