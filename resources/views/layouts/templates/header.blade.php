<style>
    /* ===== Sticky Navbar ===== */
    .sticky-navbar {
        position: sticky;
        top: 0;
        z-index: 1030;
        transition: background-color 0.3s ease;
        background-color: #01273e;
    }

    /* ===== Desktop Nav Links ===== */
    .navbar-nav .nav-link.text-light {
        padding: 0.4rem 0.6rem;
        font-weight: 500;
        position: relative;
        color: #fff;
        transition: color 0.3s ease;
    }

    /* ===== Active & Hover ===== */
    .navbar-nav .nav-link.text-light:hover,
    .navbar-nav .nav-link.text-light.active {
        color: #FBAF17 !important;
    }

    .navbar-nav .nav-link.text-light.active::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 100%;
        height: 2px;
        border-radius: 1px;
        /* background-color: #FBAF17; */
    }

    /* ===== Mobile Nav Links ===== */
    .offcanvas .nav-link.text-light {
        padding: 0.6rem 0;
        font-weight: 500;
        color: #fff;
    }

    .offcanvas .nav-link.text-light.active {
        color: #FBAF17;
    }

    /* Responsive Logo */
    .navbar-brand img {
        padding: 10px;
        max-width: 100%;
        height: 50px;
        width: 80px;
        transition: width 0.3s ease;
    }

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

    /* Smooth width transition */
    #navbarContainer {
        transition: max-width 0.5s ease;
        max-width: 1140px;
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

<!-- ===== TOP LIGHT BAR ===== -->
<div class="container-fluid bg-light d-none d-lg-block">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-2">

            <div class="d-flex align-items-center">
                <div class="me-4 d-flex align-items-center">
                    <i class="fa fa-phone-alt text-dark me-2"></i>
                    <span class="text-dark">051-90856838</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="far fa-envelope text-dark me-2"></i>
                    <span class="text-dark">info@alumni.nust.edu.pk</span>
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

<!-- ===== MAIN NAVBAR ===== -->
<div class="container-fluid sticky-navbar shadow-sm" style="background-color: #162955 ">
    <nav class="navbar navbar-expand-lg navbar-dark py-1" style="background-color: #162955 ">
        <div id="navbarContainer" class="container">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('templates/img/logo.png') }}" alt="Logo">
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('event.*') ? 'active' : '' }}"
                            href="{{ route('event.index') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('alumni.connect.*') ? 'active' : '' }}"
                            href="{{ route('alumni.connect.index') }}">Alumni Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('alumni.privileges.*') ? 'active' : '' }}"
                            href="{{ route('alumni.privileges.index') }}">Alumni Privileges</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('nust.giving.back.*') ? 'active' : '' }}"
                            href="{{ route('nust.giving.back.index') }}">Giving Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light {{ request()->routeIs('about.*') ? 'active' : '' }}"
                            href="{{ route('about.index') }}">About</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>

<!-- ===== MOBILE MENU ===== -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" style="background:#01273e">
    <div class="offcanvas-header" style="background:#162955">
        <h5 class="offcanvas-title fw-bold text-light">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('event.index') }}">Event</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('alumni.connect.index') }}">Alumni
                    Community</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('alumni.privileges.index') }}">Alumni
                    Privileges</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('nust.giving.back.index') }}">Giving
                    Back</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('about.index') }}">About</a></li>
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
