<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #0f2027 0%, #2c5364 100%);
            color: #fff;
        }
        .main-card {
            background: rgba(255,255,255,0.97);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.37);
            padding: 2.5rem 2rem;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .sidebar-custom {
            background: rgba(15,32,39,0.95);
            min-height: 100vh;
            border-radius: 20px 0 0 20px;
        }
        .sidebar-custom .nav-link, .sidebar-custom .nav-link.active {
            color: #fff;
        }
        .sidebar-custom .nav-link.active, .sidebar-custom .nav-link:hover {
            background: #0ea5e9;
            color: #fff;
        }
        .brand-logo {
            max-width: 60px;
            margin: 1.5rem auto 1rem auto;
            display: block;
        }
        .brand-title {
            color: #fff;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 2rem;
        }
        .footer-custom {
            background: transparent;
            color: #fff;
            text-align: center;
            padding: 1rem 0 0 0;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar-custom p-0">
            <img src="{{ asset('images/logo_pt.png') }}" alt="Logo" class="brand-logo">
            <div class="brand-title">PT BINTANG SURYASINDO</div>
            <ul class="nav flex-column mb-5">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('Dashboard') ? 'active' : '' }}" href="{{ url('Dashboard') }}">
                        <i class="bi bi-house"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('order') ? 'active' : '' }}" href="{{ url('order') }}">
                        <i class="bi bi-cart"></i> Pesan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('prodi') ? 'active' : '' }}" href="{{ url('prodi') }}">
                        <i class="bi bi-palette"></i> Program Studi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}" href="{{ url('mahasiswa') }}">
                        <i class="bi bi-person"></i> Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sesi') ? 'active' : '' }}" href="{{ url('sesi') }}">
                        <i class="bi bi-clock"></i> Sesi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mata_kuliah') ? 'active' : '' }}" href="{{ url('mata_kuliah') }}">
                        <i class="bi bi-book"></i> Mata Kuliah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('jadwal') ? 'active' : '' }}" href="{{ url('jadwal') }}">
                        <i class="bi bi-calendar"></i> Jadwal
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="main-card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div></div> 
                    <div>
                        <span class="me-2" style="color: #000;">
                            <i class="bi bi-person-circle" style="color: #000;"></i> {{ Auth::user()->name ?? 'User' }}
                        </span>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                        </form>
                    </div>
                </div>
                @yield('content')
            </div>
            <footer class="footer-custom mt-4">
                &copy; {{ date('Y') }} PT BINTANG SURYASINDO. All rights reserved.
            </footer>
        </main>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>