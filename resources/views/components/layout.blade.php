<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Edukasi Pengolahan Jagung - Desa Sambikerep' }}</title>
    <meta name="description" content="{{ $description ?? 'Program KKN Edukasi Pengolahan Jagung untuk Kemandirian Pangan Desa Sambikerep' }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- Additional Head Content -->
    {{ $head ?? '' }}
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-success" href="{{ route('home') }}">
            <i class="fas fa-seedling me-2"></i>
            Jagung Sambikerep
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('edukasi') ? 'active' : '' }}" href="{{ route('edukasi') }}">Edukasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('resep') ? 'active' : '' }}" href="{{ route('resep') }}">Resep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-seedling me-2"></i>
                    Jagung Sambikerep
                </h5>
                <p class="text-light mb-0">
                    Program KKN Edukasi Pengolahan Jagung untuk Kemandirian Pangan Desa Sambikerep
                </p>
            </div>
            <div class="col-lg-6 text-end">
                <p class="text-light mb-0">
                    © {{ date('Y') }} KKN Desa Sambikerep. Dibuat dengan <i class="fas fa-heart text-danger"></i>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="{{ asset('js/dashboard.js') }}"></script>

<!-- Additional Scripts -->
{{ $scripts ?? '' }}
</body>
</html>
