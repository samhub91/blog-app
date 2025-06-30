@extends('layouts.blog')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    <p class="text-muted">
        Posted on {{ $post->created_at->format('F j, Y') }}
    </p>

    <div class="mb-4">
        {!! nl2br(e($post->body)) !!}
    </div>

    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this post?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">← Back to All Posts</a>
@endsection
