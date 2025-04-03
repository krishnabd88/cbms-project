<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
  <div class="container-fluid">
    <!-- CRM on the left side -->
    <a class="navbar-brand text-white" href="">CMS</a>
    <!-- Navbar Toggle for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Navbar Links and Dropdown Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @guest
          <!-- Authentication Links for Guests -->
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif

          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @else
          <!-- Dropdown for Logged-In User (Profile on the right side) -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-decoration-none text-white" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }} <!-- Display logged-in user's name -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="{{ route('users.show', auth()->user()) }}">
                  <i class="bi bi-person-fill me-2"></i>Profile
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <!-- Logout Form -->
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item" style="background: none; border: none; color: inherit; cursor: pointer;">
                    <i class="bi bi-box-arrow-left me-2"></i>Sign out
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>


