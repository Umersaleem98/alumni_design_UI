<style>
    /* Carousel height control */
    .header-carousel .owl-carousel-item {
        height: 420px;
    }

    .header-carousel .owl-carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    /* Dark overlay */
    .overlay-bg {
        background: rgba(0, 0, 0, 0.45);
    }

    /* Text size control */
    .carousel-title {
        font-size: 2.2rem;
        font-weight: 700;
    }

    .carousel-text {
        font-size: 0.95rem;
        max-width: 500px;
    }

    /* Mobile optimization */
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
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-2">
    <div class="owl-carousel header-carousel position-relative">

        <!-- Slide 1 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('templates/img/slider/carousel-1.jpg') }}" alt="">

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-7">
                            <h6 class="text-white text-uppercase mb-2 animated slideInDown">
                                {{-- Welcome to NUST Alumni Network --}}
                            </h6>

                            <h1 class="text-white animated slideInDown mb-3 carousel-title">
                                Welcome to NUST Alumni Network
                            </h1>

                            <p class="text-white mb-3 carousel-text">
                                A global community of graduates connected by shared experiences, lifelong learning, and
                                meaningful opportunities.
                            </p>

                            <a href="#" class="btn fs-5 btn-warning px-4 me-2 animated slideInLeft"
                                style="border-radius: 8px;">
                                Become a Part
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('templates/img/slider/carousel-2.jpg') }}" alt="">

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-7">
                            <h6 class="text-white text-uppercase mb-2 animated slideInDown">
                                {{-- Welcome to NUST Alumni Network --}}
                            </h6>

                            <h1 class="text-white animated slideInDown mb-3 carousel-title">
                                A Network That Spans Borders
                            </h1>

                            <p class="text-white mb-3 carousel-text">
                                Through national and international alumni chapters, NUST graduates remain connected
                                across Pakistan and around the world.
                            </p>

                            <a href="#" class="btn fs-5 btn-warning px-4 me-2 animated slideInLeft"
                                style="border-radius: 8px;">
                                Explore More
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('templates/img/slider/carousel-3.jpg') }}" alt="">

            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center overlay-bg">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-7">
                            <h6 class="text-white text-uppercase mb-2 animated slideInDown">
                                {{-- Welcome to NUST Alumni Network --}}
                            </h6>

                            <h1 class="text-white animated slideInDown mb-3 carousel-title">
                                Your Gateway to the Alumni Community
                            </h1>

                            <p class="text-white mb-3 carousel-text">
                                The alumni portal provides verified access to the alumni directory, digital alumni card,
                                and engagement opportunities — all in one place.
                            </p>

                            <a href="#" class="btn fs-5 btn-warning px-4 me-2 animated slideInLeft"
                                style="border-radius: 8px;">
                                Get Your Alumni Card
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Carousel End -->
