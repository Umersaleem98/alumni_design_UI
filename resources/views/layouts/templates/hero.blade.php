<link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css" rel="stylesheet">

<style>
    /* Carousel height */
    .header-carousel .owl-carousel-item {
        height: 420px;
        position: relative;
    }

    .header-carousel .owl-carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    /* Dark overlay */
    .overlay-bg {
        background: rgba(0, 0, 0, 0.63);
    }

    /* Text styling */
    .carousel-title {
        font-size: 2.2rem;
        font-weight: 700;
    }

    .carousel-text {
        font-size: 0.95rem;
        max-width: 500px;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .header-carousel .owl-carousel-item {
            height: 320px;
        }

        .carousel-title {
            font-size: 1.6rem;
        }

        .carousel-text {
            font-size: 0.85rem;
        }
    }
</style>
<div class="container-fluid p-0 mb-2">
    <div class="owl-carousel header-carousel position-relative">

        <!-- Slide 1 -->
        <div class="owl-carousel-item">
            <img src="{{ asset('templates/img/slider/carousel-1.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-lg-7">
                            <h1 class="text-white mb-3 carousel-title">
                                Welcome to NUST Alumni Network
                            </h1>
                            <p class="text-white mb-3 carousel-text">
                                A global community of graduates connected by shared experiences and lifelong learning.
                            </p>
                            <a href="{{ route('register.index') }}"
                               class="btn btn-warning px-4 fs-5" style="border-radius:8px;">
                                Become a Part
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="owl-carousel-item">
            <img src="{{ asset('templates/img/slider/carousel-2.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-lg-7">
                            <h1 class="text-white mb-3 carousel-title">
                                A Network That Spans Borders
                            </h1>
                            <p class="text-white mb-3 carousel-text">
                                Connecting NUST graduates across Pakistan and around the world.
                            </p>
                            <a href="{{ route('alumni.connect.index') }}"
                               class="btn btn-warning px-4 fs-5" style="border-radius:8px;">
                                Explore More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="owl-carousel-item">
            <img src="{{ asset('templates/img/slider/carousel-3.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-lg-7">
                            <h1 class="text-white mb-3 carousel-title">
                                Your Gateway to Alumni Community
                            </h1>
                            <p class="text-white mb-3 carousel-text">
                                Access alumni directory, alumni card, and engagement opportunities.
                            </p>
                            <a href="{{ route('register.index') }}"
                               class="btn btn-warning px-4 fs-5" style="border-radius:8px;">
                                Get Your Alumni Card
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script>
$(document).ready(function () {
    $(".header-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,

        /* 🔥 TIMING CONTROL */
        autoplayTimeout: 19000,   // 9 seconds per slide
        smartSpeed: 1800,        // smooth transition speed

        autoplayHoverPause: true,
        dots: true,
        nav: false,

        animateOut: 'fadeOut',
        animateIn: 'fadeIn'
    });
});
</script>
