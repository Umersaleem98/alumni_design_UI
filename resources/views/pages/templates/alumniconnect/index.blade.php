@include('layouts.templates.head')
<title>Events</title>

<style>
    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 8px;
    }

    .weekday {
        font-weight: 600;
        text-align: center;
        padding-bottom: 6px;
        border-bottom: 2px solid #800000;
        color: #800000;
    }

    .day {
        width: 100%;
        aspect-ratio: 1 / 1;
        text-align: center;
        line-height: 38px;
        border-radius: 8px;
        cursor: default;
        user-select: none;
        transition: background-color 0.25s ease;
        font-weight: 500;
    }

    .day:hover {
        background-color: #f8d7da;
    }

    .day.inactive {
        color: #ccc;
    }

    .day.today {
        border: 2px solid #800000;
        font-weight: 700;
    }

    .day.event {
        background-color: #800000;
        color: white;
        font-weight: 700;
        cursor: pointer;
    }

    .day.event:hover {
        background-color: #b52b33;
    }

    /* Page header background */
    .page-header {
        min-height: 300px;
        background: url('{{ asset('templates/img/bg.jpg') }}') center center no-repeat;
        background-size: cover;
        color: white;
        display: flex;
        align-items: center;
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .carousel img {
        aspect-ratio: 1 / 1;
        object-fit: cover;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }

    section img {
        aspect-ratio: 1 / 1;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    section img:hover {
        transform: scale(1.05);
    }

    .alumni-cta {
        background:
            linear-gradient(rgba(23, 34, 77, 0.9), rgba(23, 34, 77, 0.9)),
            url('{{ asset('templates/img/cta-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    }

    .cta-divider {
        height: 1px;
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.3);
    }




    .section-wrapper {
        position: relative;
        overflow: hidden;
    }

    .section-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        opacity: 1;
    }

    .section-content {
        position: relative;
        z-index: 1;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 2rem 1rem;
    }

    .page-header {
        position: relative;
        /* needed for the overlay positioning */
        min-height: 300px;
        background: url('{{ asset('templates/img/banner/alimni-connect.jpeg') }}') center center no-repeat;
        background-size: cover;
        color: white;
        display: flex;
        align-items: center;
        padding-top: 3rem;
        padding-bottom: 3rem;
        z-index: 0;
    }

    .page-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* black overlay with 50% opacity */
        z-index: -1;
        /* behind the content */
    }
</style>

<body>

    @include('layouts.templates.header')

    <!-- Page Header -->
    <div class="container-fluid page-header py-5">
        <div class="container">
            <h1 class="mb-3 animated text-light slideInDown">Alumni Community</h1>
            <p class="mb-3">
                A global community of NUST graduates connected by shared journeys and lifelong bonds.
            </p>
            {{-- <button class="btn btn-light btn-sm">View Upcoming Events</button> --}}
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center bg-white rounded shadow-sm p-4">

                <!-- Left: Image -->
                <div class="col-md-4 mb-3 mb-md-0 text-center">
                    <img src="{{ asset('templates/img/ncaa-visual.jpeg') }}" class="img-fluid rounded"
                        alt="Alumni Association">
                </div>

                <!-- Right: Content -->
                <div class="col-md-8">
                    <h1 class="fw-bold mb-3">Alumni <span style="color: #FBAF17">Association</span></h1>
                    <p class="text-muted mb-4">
                        The Alumni Association serves as the heart of our alumni network, fostering lifelong
                        connections, engagement, and collaboration among graduates. It works to strengthen bonds,
                        organize meaningful initiatives, and represent the collective voice of our alumni community.
                    </p>
                    {{-- <a href="#" class="btn btn-danger" style="border-radius: 8px;">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a> --}}
                </div>

            </div>
        </div>
    </section>



    <style>
        /* ===== Section with Background Video ===== */
        .section-wrapper {
            position: relative;
            overflow: hidden;
        }

        .section-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .section-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: -1;
        }

        .section-content {
            position: relative;
            z-index: 1;
            color: #fff;
        }

        /* ===== Chapter Cards ===== */
        .chapter-card {
            border: 2px solid #6A0901;
            padding: 12px;
            transition: 0.3s ease;
        }

        .chapter-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.25);
        }

        .chapter-card img {
            height: 150px;
            width: 100%;
            object-fit: cover;
        }

        .chapter-card h5 {
            font-size: 1rem;
            margin-bottom: 0;
        }

        /* ===== Tabs Styling ===== */
        .nav-tabs {
            border-bottom: none;
            gap: 1rem;
        }

        .nav-tabs .nav-link {
            border: 2px solid #800000;
            /* danger */
            color: #fff;
            background: transparent;
            border-radius: 8px;
            padding: 10px 26px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            background-color: rgba(220, 53, 69, 0.15);
        }

        .nav-tabs .nav-link.active {
            background-color: #800000;
            /* danger */
            border-color: #800000;
            color: #fff;
        }

        /* Desktop fine-tuning */
        @media (min-width: 992px) {
            .chapter-card img {
                height: 140px;
            }
        }
    </style>

    <section class="py-5 section-wrapper">

        <!-- Background Video -->
        <video autoplay muted loop playsinline class="section-video">
            <source src="{{ asset('videos/International.mp4') }}" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="section-overlay"></div>

        <!-- Content -->
        <div class="container section-content">

            <!-- Title -->
            <div class="text-center mb-4">
                <h1 class="fw-bold text-light">
                    Bringing NUST Alumni <span style="color: #FBAF17">Together Worldwide</span>
                </h1>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="chapterTabs">
                <li class="nav-item">
                    <button class="nav-link fs-5 active" data-bs-toggle="tab" data-bs-target="#national">
                        National Chapters
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link fs-5" data-bs-toggle="tab" data-bs-target="#international">
                        International Chapters
                    </button>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content">

                <!-- ===== National Chapters ===== -->
                <div class="tab-pane fade show active" id="national">
                    <div class="row g-4 justify-content-center text-center">

                        @forelse ($nationalChapters as $item)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="{{ url('chapter.show', $item->id) }}"
                                    class="text-decoration-none d-block bg-white rounded shadow p-2 chapter-card h-100">
                                    <img src="{{ asset('templates/img/International-chapters/' . $item->cover_image) }}"
                                        alt="{{ $item->chapter_name }}" class="img-fluid rounded mb-2">
                                    <h5 class="text-dark fw-semibold">
                                        {{ $item->chapter_name }}
                                    </h5>
                                </a>
                            </div>
                        @empty
                            <p>No national chapters found.</p>
                        @endforelse

                    </div>

                    <div class="text-center mt-4">
                        {{-- <a href="#" class="btn btn-danger px-4" style="border-radius:8px;">
                            Explore More
                        </a> --}}
                    </div>
                </div>

                <!-- ===== International Chapters ===== -->
                <div class="tab-pane fade" id="international">
                    <div class="row g-4 justify-content-center text-center">

                        @forelse ($internationalChapters as $item)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="{{ url('chapter.show', $item->id) }}"
                                    class="text-decoration-none d-block bg-white rounded shadow p-2 chapter-card h-100">
                                    <img src="{{ asset('templates/img/International-chapters/' . $item->cover_image) }}"
                                        alt="{{ $item->chapter_name }}" class="img-fluid rounded mb-2">
                                    <h5 class="text-dark fw-semibold">
                                        {{ $item->chapter_name }}
                                    </h5>
                                </a>
                            </div>
                        @empty
                            <p>No international chapters found.</p>
                        @endforelse

                    </div>

                    <div class="text-center mt-4">
                        {{-- <a href="#" class="btn btn-danger px-4" style="border-radius:8px;">
                            Explore More
                        </a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>


    <style>
        .facility-card {
            position: relative;
            height: 260px;
            border-radius: 14px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.35);
        }

        .facility-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        /* Overlay content */
        .facility-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.88);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 25px;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .facility-overlay h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .facility-overlay p {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.9;
        }

        /* Hover Effects */
        .facility-card:hover img {
            opacity: 0;
            transform: scale(1.05);
        }

        .facility-card:hover .facility-overlay {
            opacity: 1;
        }
    </style>

    <section class="py-5 campus-facilities">
        <div class="container text-center">

            <!-- Heading -->
            <div class="mb-5">
                <h1 class="mb-2">Thematic <span style="color: #FBAF17">Clubs</span></h1>
                <p class=" opacity-75">
                    {{-- Available exclusively for Alumni Card holders. --}}
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/thematic-club/a.jpeg') }}" alt="Gym & Saddle Club">

                        <div class="facility-overlay">
                            <h5 class="text-light">Entrepreneurs Club </h5>
                            <p class="text-light">
                                A community for civil services aspirants and professionals to connect, share insights,
                                and support each other through mentorship, guidance, and knowledge exchange.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/thematic-club/b.jpeg') }}" alt="Library & Resources">

                        <div class="facility-overlay">
                            <h5 class="text-light">CEO`s Club</h5>
                            <p class="text-light">
                                A network of leaders, founders, and executives focused on strategic thinking, leadership
                                growth, and meaningful collaboration across industries.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/thematic-club/c.jpeg') }}" alt="Grounds & Cafes">

                        <div class="facility-overlay">
                            <h5 class="text-light">CSS Club</h5>
                            <p class="text-light">
                                A space for innovators, founders, and aspiring entrepreneurs to connect, learn, and turn
                                ideas into impactful ventures through shared experiences and support.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->


        </div>
    </section>


    {{-- <section class="py-5" style="background:#f4f1ee;">
        <div class="container">

            <div class="text-center mb-4">
                <h4 class="fw-bold">Thematic Clubs</h4>
                <p class="text-muted">
                    Find like-minded alumni through specialized interest clubs.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-code-slash fs-2 text-primary"></i>
                            <h6 class="fw-bold mt-2">CSS Club</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-briefcase fs-2 text-success"></i>
                            <h6 class="fw-bold mt-2">CEOs Club</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-lightbulb fs-2 text-warning"></i>
                            <h6 class="fw-bold mt-2">Entrepreneurs Club</h6>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}



    @include('layouts.templates.footer')
    @include('layouts.templates.script')
