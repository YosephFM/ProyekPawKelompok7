<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI4A Laravel - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        .navbar-custom {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .hero-bg {
            background: linear-gradient(120deg,rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
        }
        .feature-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            border-radius: 1rem;
            margin: 0 auto 1rem auto;
            background: #e0f2fe;
            color: #0ea5e9;
        }
        .footer-custom {
             background: linear-gradient(120deg,rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
        }
        .p1{
            color:rgb(0, 0, 0);
            
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                PT Bintang Suryasindo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                 <a href="{{ route('login') }}" class="btn btn-lg btn-light text-primary fw-semibold shadow-sm px-5 py-3"><span class="p1">Login</span></a>
                            <a href="{{ route('register') }}" class="btn btn-lg btn-light text-primary fw-semibold shadow-sm px-5 py-3"><span class="p1">Sign Up</span></a>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg d-flex align-items-center" style="min-height: 80vh;">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">PT Bintang Suryasindo</h1>
            <p class="lead mb-4">Distributor minuman terpercaya di Palembang.</p>

        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-cart2"></i>
                    </div>
                    <h5 class="fw-bold">Pemesanan Online</h5>
                    <p class="text-muted">Pemesanan cepat dan hemat waktu.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-journal"></i>
                    </div>
                    <h5 class="fw-bold">Katalog Online</h5>
                    <p class="text-muted">Data Anda terlindungi dengan sistem keamanan terbaik dari Laravel.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5 class="fw-bold">Tracking Online</h5>
                    <p class="text-muted">Antarmuka yang sederhana dan mudah dipahami untuk semua pengguna.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->


    <!-- Footer -->
    <footer class="footer-custom text-center py-4 mt-auto">
        &copy; {{ date('Y') }} PT Bintang Suryasindo. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>