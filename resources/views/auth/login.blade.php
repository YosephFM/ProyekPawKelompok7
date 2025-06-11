<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI4A Laravel - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
        }
        .navbar-custom {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .footer-custom {
            background: linear-gradient(120deg,rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
        }
        .p1{
            color:rgb(0, 0, 0);
        }
        .card {
            background: rgba(255,255,255,0.97);
        }
        .form-check-label, .form-label, .form-control, .form-control:focus {
            color: #222 !important;
            background-color: #fff !important;
        }
    </style>
</head>
<body>
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <img src="{{ asset('images/logo_pt.png') }}" alt="" class="d-block mx-auto mb-3" style="max-width: 120px;">
                    <h3 class="mb-4 text-center fw-bold">Login</h3>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label for="remember_me" class="form-check-label text-sm text-gray-600">{{ __('Remember me') }}</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="btn btn-primary">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                        Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none text-primary">Daftar</a>
                    </form>
                </div>
            </div>
            <!-- Footer -->
            <footer class=>
                &copy; {{ date('Y') }} PT Bintang Suryasindo. All rights reserved.
            </footer>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>