@extends('layouts.blog')

@section('title', 'All Posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success">+ New Post</a>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->body, 120) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-primary">Read More</a>
            </div>
        </div>
    @endforeach
@endsection
