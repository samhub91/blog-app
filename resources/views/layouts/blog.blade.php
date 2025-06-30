<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Blog')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- ✅ Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Optional: Your blog.css --}}
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">My Blog</a>

            <div class="d-flex">
                <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Back to Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
