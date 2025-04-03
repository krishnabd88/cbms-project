<div class="nk-nav-scroll" style="overflow: hidden; width: auto; height: 100%;">
    <div class="nav-user">
        <img src="{{ asset('assets/images/users/1.jpg') }}" alt="User" class="rounded-circle">
        <h5>{{ Auth::user()->name }}</h5> <!-- Dynamic user name -->
        <p>{{ Auth::user()->role ?? 'User' }}</p> <!-- Dynamic role -->
        <div class="nav-user-option">
            <div class="setting-option">
                <div data-toggle="dropdown">
                    <i class="mdi mdi-settings"></i>
                </div>
                <div class="dropdown-menu animated flipInX">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Lock</a>
                    <!-- Logout Option -->
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <!-- Logout Form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="notification-option">
                <div data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                </div>
                <div class="dropdown-menu animated flipInX">
                    <a class="dropdown-item" href="#">Email
                        <span class="badge badge-primary pull-right m-t-3">05</span>
                    </a>
                    <a class="dropdown-item" href="#">Feedback
                        <span class="badge badge-danger pull-right m-t-3">02</span>
                    </a>
                    <a class="dropdown-item" href="#">Report
                        <span class="badge badge-warning pull-right m-t-3">02</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <ul class="metismenu" id="menu">
        <!-- Dashboard Section -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="fa fa-tachometer-alt"></i>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>

        <!-- Users Section -->
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">
                <i class="fa fa-users"></i>
                <span class="nav-text">Users</span>
            </a>
        </li>

        <!-- Clients Section -->
        <li class="nav-item">
            <a href="{{ route('clients.index') }}" class="nav-link">
                <i class="fa fa-briefcase"></i>
                <span class="nav-text">Clients</span>
            </a>
        </li>

        <!-- Organizations Section -->
        <li class="nav-item">
            <a href="{{ route('organizations.index') }}" class="nav-link">
                <i class="fa fa-building"></i>
                <span class="nav-text">Organizations</span>
            </a>
        </li>

        <!-- Projects Section -->
        <li class="nav-item">
            <a href="{{ route('projects.index') }}" class="nav-link">
                <i class="fa fa-project-diagram"></i>
                <span class="nav-text">Projects</span>
            </a>
        </li>

        <!-- Tasks Section -->
        <li class="nav-item">
            <a href="{{ route('tasks.index') }}" class="nav-link">
                <i class="fa fa-tasks"></i>
                <span class="nav-text">Tasks</span>
            </a>
        </li>

        <!-- Documents Section -->
        <li class="nav-item">
            <a href="{{ route('documents.index') }}" class="nav-link">
                <i class="fa fa-file-alt"></i>
                <span class="nav-text">Documents</span>
            </a>
        </li>

        <!-- Roles Section -->
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="fa fa-cogs"></i>
                <span class="nav-text">Roles</span>
            </a>
        </li>
    </ul>
</div>
