<style>
    /* ===== Sticky Navbar ===== */
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1030;
        background-color: #01273E;
        transition: background-color 0.3s ease;
    }

    /* ===== Desktop Nav Links ===== */
    .navbar-nav .nav-link {
        padding: 0.5rem 0.75rem;
        font-size: 16.5px;
        /* INCREASED */
        font-weight: 500;
        color: #ffffff;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #FBAF17 !important;
    }

    /* ===== Mobile Nav Links ===== */
    .offcanvas .nav-link {
        padding: 0.75rem 0;
        font-size: 16px;
        font-weight: 500;
        color: #ffffff;
    }

    .offcanvas .nav-link.active {
        color: #FBAF17;
    }

    /* ===== Logo ===== */
    .navbar-brand img {
        height: 80px;
        width: auto;
    }

    @media (max-width: 576px) {
        .navbar-brand img {
            height: 65px;
        }
    }

    /* ===== Smooth container switch ===== */
    #navbarContainer {
        transition: max-width 0.4s ease;
    }
</style>
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-2">

            <div class="d-flex align-items-center gap-4">
                <div>
                    <i class="fa fa-phone-alt me-2"></i>
                    <span>+92-51-90856838</span>
                </div>
                <div>
                    <i class="far fa-envelope me-2"></i>
                    <span>info@alumni.nust.edu.pk</span>
                </div>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('register.index') }}" class="btn btn-danger btn-sm fw-semibold">
                    Register
                </a>
                <a href="{{ route('login.index') }}" class="btn btn-danger btn-sm fw-semibold">
                    Login
                </a>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid sticky-navbar shadow-sm" style="background-color: #01273E">
    <nav class="navbar navbar-expand-lg navbar-dark py-1" style="background-color: #01273E">
        <div id="navbarContainer" class="container">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('templates/img/logo.png') }}" alt="Logo" class="p-2"
                    style="width: 80px; height: 60px;">
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('event.*') ? 'active' : '' }}"
                            href="{{ route('event.index') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('alumni.connect.*') ? 'active' : '' }}"
                            href="{{ route('alumni.connect.index') }}">Alumni Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('alumni.privileges.*') ? 'active' : '' }}"
                            href="{{ route('alumni.privileges.index') }}">Alumni Privileges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('nust.giving.back.*') ? 'active' : '' }}"
                            href="{{ route('nust.giving.back.index') }}">Giving Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about.*') ? 'active' : '' }}"
                            href="{{ route('about.index') }}">About</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" style="background:#01273E">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold text-light">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('event.index') }}">Event</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('alumni.connect.index') }}">Alumni Community</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('alumni.privileges.index') }}">Alumni
                    Privileges</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('nust.giving.back.index') }}">Giving Back</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">About</a></li>
        </ul>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarContainer = document.getElementById('navbarContainer');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbarContainer.classList.replace('container', 'container-fluid');
            } else {
                navbarContainer.classList.replace('container-fluid', 'container');
            }
        });
    });
</script>
