@extends('layouts.blog')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" class="form-control" rows="5" required>{{ old('body', $post->body) }}</textarea>
        </div>
        <div class="mb-3">
    <label class="form-label">Category</label>
    <select name="category_id" class="form-select" required>
        <option value="">Select a category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>


        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
