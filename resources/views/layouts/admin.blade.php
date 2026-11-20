<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - PT Anugerah Rizal Pangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-dark admin-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.products.index') }}">Admin Panel</a>
        <div class="d-flex gap-2">
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-light" target="_blank">Lihat Website</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-danger">Logout</button>
            </form>
        </div>
    </div>
</nav>
<main class="container admin-main py-4 flex-grow-1">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @yield('content')
</main>
<footer class="text-light py-3">
    <div class="container small text-center">&copy; {{ date('Y') }} PT Anugerah Rizal Pangan · Panel Admin</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
