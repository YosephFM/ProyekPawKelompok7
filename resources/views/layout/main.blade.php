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
                @if(auth()->user() && auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('barang') ? 'active' : '' }}" href="{{ url('barang') }}">
                        <i class="bi bi-pie-chart"></i> Data Minuman
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('infopesanan') ? 'active' : '' }}" href="{{ url('infopesanan') }}">
                        <i class="bi bi-box-seam"></i> Info Pesanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mitra') ? 'active' : '' }}" href="{{ url('mitra') }}">
                        <i class="bi bi-people"></i> Mitra
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('jadwal') ? 'active' : '' }}" href="{{ url('jadwal') }}">
                        <i class="bi bi-calendar"></i> Jadwal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('About_us') ? 'active' : '' }}" href="{{ url('About_us') }}">
                        <i class="bi bi-buildings"></i> About Us
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- sweetalert js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                    title: `Apakah Anda yakin ingin menghapus data ${nama} ini?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>

    @session('success')
    <script type="text/javascript">
      swal({
        title: "Terima Kasih!",
        text: "{{ session('success') }}",
        icon: "success"
      });
    </script>
    @endsession
</body>
</html>