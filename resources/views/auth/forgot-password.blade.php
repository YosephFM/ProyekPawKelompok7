<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI4A Laravel - Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
        }
        .footer-custom {
            background: linear-gradient(120deg,rgb(0, 7, 11) 0%, #0ea5e9 100%);
            color: #fff;
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
                    <h3 class="mb-4 text-center fw-bold">Forgot Password</h3>
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Lupa kata sandi? Tidak masalah. Cukup beri tahu kami alamat email Anda, sehingga Anda dapat memilih yang baru.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Footer -->
            <footer>
                &copy; {{ date('Y') }} SI4A Laravel. All rights reserved.
            </footer>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>