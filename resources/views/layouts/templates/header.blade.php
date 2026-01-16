<style>
    /* ===== Sticky Navbar ===== */
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1030;
        transition: background-color 0.3s ease;
        background-color: white;
    }

    /* ===== Desktop Nav Links ===== */
    .navbar-nav .nav-link {
        padding: 0.4rem 0.6rem;
        font-weight: 500;
        position: relative;
        color: #000;
        transition: color 0.3s ease;
    }

    /* ===== Active & Hover ===== */
    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link:hover {
        color: #dc3545 !important;
    }

    .navbar-nav .nav-link.active::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 100%;
        height: 2px;
        border-radius: 1px;
        background-color: #dc3545;
    }

    /* ===== Mobile Nav Links ===== */
    .offcanvas .nav-link {
        padding: 0.6rem 0;
        font-weight: 500;
        color: #000;
    }

    .offcanvas .nav-link.active {
        color: #dc3545;
    }

    /* Responsive Logo */
    .navbar-brand img {
        max-width: 100%;
        height: auto;
        width: 80px;
        transition: width 0.3s ease;
    }

    /* Adjust logo size for smaller screens */
    @media (max-width: 992px) {
        .navbar-brand img {
            width: 100px;
        }
    }

    @media (max-width: 576px) {
        .navbar-brand img {
            width: 80px;
        }
    }

    /* Smooth width transition for navbar container */
    #navbarContainer {
        transition: max-width 0.5s ease;
        max-width: 1140px;
        /* default max-width of .container */
        margin-left: auto;
        margin-right: auto;
    }

    #navbarContainer.container-fluid {
        max-width: 100% !important;
        padding-left: 15px;
        padding-right: 15px;
        margin-left: 0;
        margin-right: 0;
    }
</style>

<div class="container-fluid bg-primary d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-2">

            <div class="d-flex align-items-center">
                <div class="me-4 d-flex align-items-center">
                    <i class="fa fa-phone-alt text-light me-2"></i>
                    <span class="text-light">051-90856838</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="far fa-envelope text-light me-2"></i>
                    <span class="text-light">info@alumni.nust.edu.pk</span>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('register.index') }}" class="btn btn-danger btn-sm fw-semibold rounded-2">
                    Register
                </a>
                <a href="{{ url('login') }}" class="btn btn-danger btn-sm fw-semibold rounded-2">
                    Login
                </a>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid bg-white shadow-sm sticky-navbar">
    <nav class="navbar navbar-expand-lg navbar-light py-1">
        <!-- IMPORTANT: container class here will be toggled -->
        <div id="navbarContainer" class="container">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('templates/img/logo.png') }}" class="text-primary" alt="Logo" />
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
                aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">
                <ul class="navbar-nav text-center">
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

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-primary fw-bold" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarContainer = document.getElementById('navbarContainer');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                // Replace container with container-fluid
                if (navbarContainer.classList.contains('container')) {
                    navbarContainer.classList.replace('container', 'container-fluid');
                }
            } else {
                // Replace container-fluid back to container
                if (navbarContainer.classList.contains('container-fluid')) {
                    navbarContainer.classList.replace('container-fluid', 'container');
                }
            }
        });
    });
</script>
