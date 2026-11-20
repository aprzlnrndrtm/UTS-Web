<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - PT Anugerah Rizal Pangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body class="login-shell d-flex align-items-center min-vh-100 py-5">
<div class="container d-flex justify-content-center">
    <div class="card login-card">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo PT Anugerah Rizal Pangan" class="login-mark mb-3" onerror="this.style.display='none'">
                <div class="eyebrow mb-2">PT Anugerah Rizal Pangan</div>
                <h1 class="h3 fw-bold mb-1">Masuk Admin</h1>
                <p class="text-secondary mb-0">Kelola katalog produk Anda.</p>
            </div>
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input id="username" type="text" name="username" value="{{ old('username') }}" autocomplete="username" class="form-control @error('username') is-invalid @enderror">
                    @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" type="password" name="password" autocomplete="current-password" class="form-control @error('password') is-invalid @enderror">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button class="btn btn-brand w-100 py-2">Masuk ke Admin</button>
            </form>
            <div class="text-center mt-4"><a href="{{ route('home') }}" class="small text-decoration-none">&larr; Kembali ke website</a></div>
        </div>
    </div>
</div>
</body>
</html>
