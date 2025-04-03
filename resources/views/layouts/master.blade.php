<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Link to local CSS files -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet"> <!-- Font Awesome -->
    <link href="{{ asset('assets/css/linea.css') }}" rel="stylesheet"> <!-- Linea Icons -->
    <!-- Link to Linea Icons CSS via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/linea-icons/2.0.0/linea.css" rel="stylesheet">
    <!-- Bootstrap JS and Popper.js (required for dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> <!-- Your custom styles -->

    <!-- Modernizr (for feature detection) -->
    <script src="{{ asset('js/modernizr.3.6.0.min.js') }}"></script>
</head>

<body class="v-light compact-nav fix-header fix-sidebar">
    <!-- Preloader (loading animation) -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div id="main-wrapper">
        <!-- Top Navbar -->
        @include('components.nav.topnav') 

        <div class="container-fluid px-0">
            <div class="row mx-0 px-0">
                <!-- Sidebar -->
                
                <div class="col-md-2 col-12 p-0" style="min-height: 100vh;">
                    @include('components.nav.sidenav') 
                </div>
            
        
                <!-- Main Content Area -->
                <div class="{{ isset($noSidebar) ? 'col-12' : 'col-md-10 col-12' }} py-3">
                    <!-- Content Section -->
                    @yield('content') <!-- Dynamic page-specific content goes here -->
                </div>
            </div>
        </div>
        
    </div>

    <!-- Local JavaScript files -->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script> <!-- Common JS -->
    <script src="{{ asset('js/custom.mini.nav.js') }}"></script> <!-- Custom Navigation Script -->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.js') }}"></script> <!-- Chart.js Library -->
    <script src="{{ asset('js/dashboard.1.js') }}"></script> <!-- Custom Dashboard Script -->
</body>

</html>
