<x-layout title="Beranda - Edukasi Pengolahan Jagung">
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100 py-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold text-white mb-4">
                            Wujudkan <span class="text-warning">Kemandirian Pangan</span>
                            Melalui Pengolahan Jagung
                        </h1>
                        <p class="lead text-white-50 mb-4">
                            Bergabunglah dengan gerakan edukasi pengolahan jagung untuk menciptakan
                            kemandirian pangan di Desa Sambikerep. Pelajari berbagai teknik pengolahan
                            dan resep inovatif berbahan dasar jagung.
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="{{ route('edukasi') }}" class="btn btn-warning btn-lg px-4 py-2">
                                <i class="fas fa-play me-2"></i>
                                Mulai Belajar
                            </a>
                            <a href="{{ route('tentang') }}" class="btn btn-outline-light btn-lg px-4 py-2">
                                <i class="fas fa-info-circle me-2"></i>
                                Pelajari Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image text-center">
                        <img src="https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                             alt="Jagung Segar" class="img-fluid rounded-3 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-success mb-3">Mengapa Pengolahan Jagung?</h2>
                    <p class="lead text-muted">
                        Jagung adalah komoditas penting yang dapat diolah menjadi berbagai produk bernilai tinggi
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-chart-line text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Nilai Ekonomi Tinggi</h4>
                        <p class="text-muted">
                            Pengolahan jagung dapat meningkatkan nilai jual hingga 3-5 kali lipat
                            dibanding menjual dalam bentuk biji mentah
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-leaf text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Ramah Lingkungan</h4>
                        <p class="text-muted">
                            Pengolahan jagung lokal mengurangi ketergantungan impor dan
                            jejak karbon transportasi pangan
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Pemberdayaan Masyarakat</h4>
                        <p class="text-muted">
                            Memberikan keterampilan dan peluang usaha baru bagi masyarakat desa
                            untuk meningkatkan kesejahteraan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-success mb-3">Produk Olahan Jagung</h2>
                    <p class="lead text-muted">
                        Berbagai produk berkualitas yang dapat dihasilkan dari jagung lokal
                    </p>
                </div>
            </div>
            <div class="row g-4">
                @php
                    $products = [
                        [
                            'image' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                            'title' => 'Tepung Jagung',
                            'description' => 'Tepung jagung berkualitas tinggi untuk berbagai keperluan kuliner'
                        ],
                        [
                            'image' => 'https://images.unsplash.com/photo-1599909533896-0c71b0b4a5e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                            'title' => 'Keripik Jagung',
                            'description' => 'Camilan sehat dan renyah dengan berbagai varian rasa'
                        ],
                        [
                            'image' => 'https://images.unsplash.com/photo-1574894709920-11b28e7367e3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                            'title' => 'Popcorn Premium',
                            'description' => 'Popcorn berkualitas dengan cita rasa yang gurih dan nikmat'
                        ],
                        [
                            'image' => 'https://images.unsplash.com/photo-1625937286074-9ca519d5d9df?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                            'title' => 'Sirup Jagung',
                            'description' => 'Sirup alami sebagai pemanis sehat pengganti gula'
                        ]
                    ];
                @endphp

                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="product-card bg-white rounded-3 shadow-sm overflow-hidden h-100">
                            <img src="{{ $product['image'] }}"
                                 alt="{{ $product['title'] }}"
                                 class="card-img-top"
                                 style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $product['title'] }}</h5>
                                <p class="card-text text-muted">
                                    {{ $product['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section py-5 bg-success text-white">
        <div class="container">
            <div class="row text-center">
                @php
                    $stats = [
                        ['icon' => 'fas fa-users', 'number' => '150', 'label' => 'Peserta Pelatihan'],
                        ['icon' => 'fas fa-seedling', 'number' => '25', 'label' => 'Varietas Jagung'],
                        ['icon' => 'fas fa-industry', 'number' => '50', 'label' => 'Produk Olahan'],
                        ['icon' => 'fas fa-chart-line', 'number' => '200', 'label' => '% Peningkatan Nilai']
                    ];
                @endphp

                @foreach($stats as $stat)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="stat-item">
                            <i class="{{ $stat['icon'] }} fa-3x mb-3"></i>
                            <h3 class="display-4 fw-bold counter" data-target="{{ $stat['number'] }}">0</h3>
                            <p class="lead">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5 bg-warning">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-dark mb-3">
                        Siap Memulai Perjalanan Pengolahan Jagung?
                    </h2>
                    <p class="lead text-dark mb-0">
                        Bergabunglah dengan program edukasi kami dan wujudkan kemandirian pangan desa
                    </p>
                </div>
                <div class="col-lg-4 text-end">
                    <a href="{{ route('edukasi') }}" class="btn btn-dark btn-lg px-4 py-2">
                        <i class="fas fa-rocket me-2"></i>
                        Mulai Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
