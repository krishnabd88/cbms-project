<!DOCTYPE html>
<html lang="en" class="h-100" id="register-page">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modernizr.3.6.0.min.js') }}"></script>
</head>

<body class="h-100">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
            </svg>
        </div>
    </div>

    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-input-content">
                        <div class="card">
                            <div class="card-body">
                                <!-- Logo Section -->
                                <div class="logo text-center mt-4">
                                    Client Management System
                                </div>

                                <!-- Register Form Heading -->
                                <h4 class="text-center mt-3">Create Your Account</h4>

                                <!-- Registration Form -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Error message for general error (session-based) -->
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <!-- Full Name Field -->
                                    <div class="form-group">
                                        <label for="name" class="col-form-label text-md-end">{{ __('Full Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email Field -->
                                    <div class="form-group">
                                        <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-group">
                                        <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password Field -->
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <!-- Additional Fields (e.g., Business Info) -->
                                    <div class="form-group">
                                        <label for="business_name" class="col-form-label text-md-end">{{ __('Business Name') }}</label>
                                        <input id="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') }}" autocomplete="business_name">
                                        @error('business_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="vat_no" class="col-form-label text-md-end">{{ __('VAT No') }}</label>
                                        <input id="vat_no" type="text" class="form-control @error('vat_no') is-invalid @enderror" name="vat_no" value="{{ old('vat_no') }}" autocomplete="vat_no">
                                        @error('vat_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="mobile" class="col-form-label text-md-end">{{ __('Mobile') }}</label>
                                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required>
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-center m-b-15 m-t-15">
                                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                                    </div>

                                    <!-- Login Link -->
                                    <div class="text-center">
                                        <p class="m-t-30">Already have an account? 
                                            <a href="{{ route('login') }}">Login Now</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('js/custom.mini.nav.js') }}"></script>
</body>
</html>
