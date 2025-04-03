<!-- resources/views/partials/header.blade.php -->
<div class="header">
    <div class="nav-header">
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>

    <div class="header-content">
        <div class="header-left">
            <ul>
                <li class="icons position-relative">
                    <a href="javascript:void(0)" id="search-toggle">
                        <i class="icon-magnifier f-s-16" aria-label="Search"></i>
                    </a>

                    <div class="header-search" id="header-search" style="display: none;">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="icon-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header-right ml-auto">
            <ul>
                <li class="icons">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-account f-s-20" aria-hidden="true" aria-label="User Account"></i>
                    </a>

                    <div class="drop-down dropdown-profile animated bounceInDown">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                                            <i class="icon-power"></i> <span>Logout</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('search-toggle').addEventListener('click', function() {
        var searchForm = document.getElementById('header-search');
        searchForm.style.display = searchForm.style.display === 'none' ? 'block' : 'none';
    });
</script>
