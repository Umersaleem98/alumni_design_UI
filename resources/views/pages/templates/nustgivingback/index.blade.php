@include('layouts.templates.head')
<title>Nust Giving Back</title>
<style>
    .industry-support-section {
        background: linear-gradient(rgba(10, 30, 60, 0.9),
                rgba(10, 30, 60, 0.9)),
            url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d') center/cover no-repeat;
    }

    /* Section Title Lines */
    .section-title {
        position: relative;
        display: inline-block;
        padding: 0 20px;
    }

    .section-title::before,
    .section-title::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 80px;
        height: 2px;
        background: rgba(255, 255, 255, 0.4);
    }

    .section-title::before {
        left: -90px;
    }

    .section-title::after {
        right: -90px;
    }

    /* Cards */
    .industry-card {
        background: #f8f9fa;
        padding: 30px 25px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .industry-card .icon i {
        font-size: 40px;
        color: #b08d57;
        /* gold tone */
    }

    .industry-card h5 {
        margin-bottom: 10px;
    }

    .industry-card p {
        color: #555;
        font-size: 15px;
    }


    .page-header {
        position: relative;
        /* needed for the overlay positioning */
        min-height: 300px;
        background: url('{{ asset('templates/img/banner/giving-back.jpeg') }}') center center no-repeat;
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
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="mb-3 animated text-light slideInDown">Giving Back</h1>
            <p class="mb-3 text-light">
                Empowering others, building meaningful legacies, and shaping the future of those who follow.
            </p>
            <p class="mb-3 text-light">
                {{-- By empowering the next generation. --}}
            </p>
            {{-- <button class="btn btn-danger btn-sm">View Upcoming Events</button> --}}
        </div>
    </div>


    <!-- Giving Back Intro Section -->
    <section class="py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="fw-bold mb-3">
                        About <span style="color: #FBAF17">Giving Back</span>
                    </h1>
                    <p class="text-muted">
                        Giving back allows you to make a lasting impact through mentorship, industry support, and
                        meaningful contributions. Together, we can empower future leaders and strengthen the NUST
                        legacy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mentorship Section -->
    <section class="py-5 ">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('templates/img/mentor-ship.jpeg') }}" class="img-fluid rounded" alt="Mentorship">
                    {{-- <img src="templates/img/mentor-ship.jpeg" class="img-fluid rounded" alt="Mentorship"> --}}
                </div>

                <!-- Right: Content -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-2">Mentorship</h2>

                    <!-- Boxes (Vertical) -->
                    <div class="row g-3 mb-1">

                        <div class="col-12">
                            <div class="d-flex align-items-center p-4 bg-white shadow-sm rounded">
                                <i class="fa fa-user-graduate fa-2x text-danger me-3"></i>
                                <h5 class="fw-semibold mb-0">Guide Students</h5>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex align-items-center p-4 bg-white shadow-sm rounded">
                                <i class="fa fa-chalkboard-teacher fa-2x text-danger me-3"></i>
                                <h5 class="fw-semibold mb-0">Share Experience</h5>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex align-items-center p-4 bg-white shadow-sm rounded">
                                <i class="fa fa-hand-holding-heart fa-2x text-danger me-3"></i>
                                <h5 class="fw-semibold mb-0">Create Impact</h5>
                            </div>
                        </div>

                    </div>


                    <!-- Button -->
                    <a href="#" class="btn btn-danger px-4" style="border-radius: 8px">
                        Become a Mentor
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Industry Support Section -->
    <section class="industry-support-section py-5">
        <div class="container">

            <!-- ===== Industry Logos ===== -->


            <!-- Section Heading -->
            <div class="text-center mb-5 position-relative">
                <h1 class="text-white fw-bold section-title">
                    Industry <span style="color: #FBAF17">Support</span>
                </h1>
            </div>

            <!-- Cards -->
            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card h-100 text-center">
                        <div class="icon mb-3">
                            <i class="fa fa-briefcase text-danger"></i>
                        </div>
                        <h5 class="fw-bold">Industry Collaboration</h5>
                        <p>
                            Build meaningful partnerships that drive innovation, learning, and real-world exposure for
                            students and alumni.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card h-100 text-center">
                        <div class="icon mb-3">
                            <i class="fa fa-graduation-cap text-danger"></i>
                            {{-- <i class="fa-solid fa-graduation-cap"></i> --}}
                        </div>
                        <h5 class="fw-bold">Internships & Placements</h5>
                        <p>
                            Create pathways to hands-on experience and career opportunities that help students
                            transition confidently into the professiona l world.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="industry-card h-100 text-center">
                        <div class="icon mb-3">
                            <i class="fa fa-lightbulb text-danger"></i>
                        </div>
                        <h5 class="fw-bold">Knowledge Sharing</h5>
                        <p>
                            Share industry insights, trends, and expertise to prepare future professionals for evolving
                            challenges.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Button -->
            <div class="text-center mt-5">
                <a href="#" class="btn btn-danger px-5 py-2">
                    Support Through Industry Engagement
                </a>
            </div>

        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">

            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="fw-bold">Endowment <span style="color: #FBAF17"></span> </h1>
                {{-- <small class="text-muted d-block mb-2">A lasting way to give back</small> --}}
            </div>

            <div class="row align-items-center g-4">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <p class="text-muted mb-4">
                        Support NUST’s long-term growth by contributing to initiatives that create opportunities, drive
                        innovation, and transform lives.
                    </p>

                    <div class="d-grid gap-3">
                        <div class="d-flex align-items-center p-3 bg-white border rounded shadow-sm">
                            <i class="fa fa-graduation-cap fs-4 me-3 text-danger"></i>
                            <span class="fw-medium">Invest in Scholarships</span>
                        </div>
                        {{-- <i class="fa-solid fa-graduation-cap"></i> --}}
                        <div class="d-flex align-items-center p-3 bg-white border rounded shadow-sm">
                            <i class="bi bi-bar-chart fs-4 text-secondary me-3"></i>
                            <span class="fw-medium">Fund a Project</span>
                        </div>

                        <div class="d-flex align-items-center p-3 bg-white border rounded shadow-sm">
                            <i class="bi bi-building fs-4 text-secondary me-3"></i>
                            <span class="fw-medium">Support Students</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('templates/img/endowment.jpeg') }}" class="img-fluid rounded shadow-sm"
                        alt="Endowment Support">
                </div>

            </div>

            <!-- CTA Button -->
            <div class="text-center mt-5">
                <a href="https://advancement.nust.edu.pk/#/" class="btn btn-lg px-5 text-white"
                    style="background-color:#7a1f2b; border-radius: 8px;">
                    Contribute to the Endowment Fund
                </a>
            </div>

        </div>
    </section>


    @include('layouts.templates.footer')
    @include('layouts.templates.script')
