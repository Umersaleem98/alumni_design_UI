@include('layouts.templates.head')
<title>Alumni Privileges</title>


<style>
    .campus-facilities {
        background:
            linear-gradient(rgba(23, 34, 77, 0.92), rgba(23, 34, 77, 0.92)),
            url('{{ asset('templates/img/texture-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    }

    .section-line {
        height: 1px;
        width: 120px;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.4);
    }

    .facility-card {
        background-color: transparent;
        border: 2px solid rgba(255, 255, 255, 0.35);
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .facility-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .facility-title {
        padding: 14px;
        color: #fff;
        font-weight: 600;
        font-size: 1.05rem;
        background-color: rgba(0, 0, 0, 0.35);
    }

    .facility-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
    }

    .logo-slider {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .logo-track {
        display: flex;
        width: max-content;
        animation: scroll-left-right 25s linear infinite;
    }

    .logo-item {
        flex: 0 0 auto;
        padding: 0 30px;
    }

    .logo-item img {
        height: 60px;
        width: auto;
        filter: grayscale(100%);
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .logo-item img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* Animation */
    @keyframes scroll-left-right {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0%);
        }
    }

    .page-header {
        position: relative;
        /* needed for the overlay positioning */
        min-height: 300px;
        background: url('{{ asset('templates/img/banner/alumni-privileges.jpg') }}') center center no-repeat;
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

    .benefits-list li {
        font-size: 1.05rem;
        margin-bottom: 14px;
        position: relative;
        padding-left: 28px;
    }

    .benefits-list li::before {
        content: "✔";
        color: #dc3545;
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    .apply-card {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 14px;
    }

    .bg-alumni-discount {
        background-color: #17224D;
        /* your brand dark blue */
    }

    .bg-alumni-discount h2,
    .bg-alumni-discount p {
        color: #ffffff;
    }

    .bg-alumni-discount p {
        opacity: 0.8;
    }
</style>

<body>

    @include('layouts.templates.header')

    <!-- Page Header -->
    <div class="container-fluid page-header py-5">
        <div class="container">
            <h2 class="mb-3 animated text-light slideInDown">Alumni Privileges</h2>
            <p class="mb-3 text-light">
                Access Lifelong benifites, Facilities, and Exclusive opportunities
            </p>
            <p class="mb-3 text-light">
                All Privileges unlocked Through your Alumni Card
            </p>
            {{-- <button class="btn btn-danger btn-sm">View Upcoming Events</button> --}}
        </div>
    </div>


    <style>
        .alumni-card {
            max-width: 350px;
            /* Adjust as needed */
            margin: 0 auto;
            /* Center the card horizontally */
        }

        .alumni-card img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    <section class="py-5 bg-light">
        <div class="container">
            {{-- <h1 class="text-center mb-3">Join the NUST Alumni Network</h1> --}}
            <div class="row  g-5">

                <!-- Left: Alumni Visual Card -->
                <div class="col-md-5 d-flex justify-content-center">
                    <div class="alumni-card shadow-lg border border-2 border-warning rounded">
                        <img src="{{ asset('templates/img/alumni-card.jpg') }}" class="img-fluid" alt="Alumni Card">
                    </div>
                </div>

                <!-- Right: Points + Button -->
                <div class="col-md-7">
                    <h1 class="mb-3">Join the NUST <span style="color: #FBAF17">Alumni Network</span> </h1>

                    <ul class="list-unstyled alumni-points mb-4 fs-5">
                        <li class="mb-2">✔ <strong>Seamless Access –</strong> Enjoy priority access to facilities,
                            events, and alumni-only services.</li>
                        <li class="mb-2">✔ <strong>Exclusive Benefits –</strong> Avail special offers, discounts, and
                            alumni-only programs.</li>
                        <li class="mb-2">✔ <strong>Official Recognition –</strong> Stay connected to NUST with a
                            verified alumni identity.</li>
                    </ul>

                    <a href="#" class="btn btn-danger px-4" style="border-radius: 8px;">
                        Get Your Alumni Card
                    </a>
                </div>

            </div>
        </div>
    </section>


    <style>
        .campus-facilities {
            background: #0f172a;
        }



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
                <h1 class="text-white mb-2">Campus <span style="color: #FBAF17">Facilities</span> </h1>
                <p class="text-light opacity-75">
                    Reconnect with campus life through exclusive access to key facilities and spaces.
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4 justify-content-center">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/campus-facilties/Saddle-Club.jpg') }}"
                            alt="Gym & Saddle Club">

                        <div class="facility-overlay">
                            <h5 class="text-light">Gym & Saddle Club</h5>
                            <p class="text-light">
                                Maintain an active lifestyle with access to fitness and recreational facilities designed
                                to support your physical well-being.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/campus-facilties/library.jpg') }}" alt="Library & Resources">

                        <div class="facility-overlay">
                            <h5 class="text-light">Library & Resources</h5>
                            <p class="text-light">
                                Stay connected to knowledge through access to academic resources, research materials,
                                and digital learning tools.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="facility-card">
                        <img src="{{ asset('templates/img/campus-facilties/ground.jpg') }}" alt="Grounds & Cafes">

                        <div class="facility-overlay">
                            <h5 class="text-light">Grounds & Cafes</h5>
                            <p class="text-light">
                                Reconnect with your roots, spend time on campus, meet fellow alumni, and enjoy the
                                familiar spaces that shaped your journey.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="mt-5">
                <a href="{{ route('register.index') }}" class="btn btn-danger px-5 py-2" style="border-radius: 8px;">
                    Avail Now &nbsp;›
                </a>
            </div>

        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h1>Lifelong <span style="color: #FBAF17">Learning</span> </h1>
                <p class="text-muted">
                    Learning doesn’t stop at graduation. As a NUST alumnus, you continue to grow through opportunities
                    that enhance your skills, knowledge, and professional impact.
                </p>
            </div>

            <div class="row g-4">

                <!-- Column 1 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border border-warning border-2 text-center">
                        <div class="card-body">

                            <i class="fa-solid fa-microphone-lines fa-3x text-danger mb-3"></i>

                            <h5 class="card-title mb-2">
                                Talks & Seminars
                            </h5>

                            <p class="card-text text-muted">
                                Engage in thought-provoking talks and interactive seminars led by industry leaders,
                                academics, and accomplished alumni. Stay informed, inspired, and connected to emerging
                                trends.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border border-warning border-2 text-center">
                        <div class="card-body">

                            <i class="fa-solid fa-graduation-cap fa-3x text-danger mb-3"></i>

                            <h5 class="card-title mb-2">
                                Professional Development Programs
                            </h5>

                            <p class="card-text text-muted">
                                Enhance your career with specialized workshops, certifications, and skill-building
                                sessions designed to help you stay competitive in a rapidly evolving world.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="py-5 bg-alumni-discount">
        <div class="container">

            <div class="text-center mb-4">
                <h1>Alumni Card <span style="color: #FBAF17">Discount</span> </h1>
                <p>Exclusive offers for our Alumni</p>
            </div>

            <div class="logo-slider">
                <div class="logo-track">

                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>

                    <!-- duplicate -->
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>
                    <div class="logo-item"><img src="{{ asset('templates/img/logo.jpg') }}"></div>

                </div>
            </div>

        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h1 class="">Transcript & <span style="color: #FBAF17">Degree Verification</span> </h1>

            </div>

            <div class="row align-items-center g-5">

                <!-- Left: Single Image -->
                <div class="col-md-6 text-center">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('templates/img/degreee.jpeg') }}" class="img-fluid rounded"
                            alt="Transcript & Degree Verification">
                    </div>
                </div>

                <!-- Right: Apply Card -->
                <div class="col-md-6">
                    <div class="apply-card shadow-sm p-4 bg-white rounded">

                        <h4 class=" mb-3">
                            Apply for Degree <span style="color: #FBAF17">Verification</span>
                        </h4>

                        <p class="mb-4 text-muted">
                            Request official transcripts and degree verification quickly and securely through our
                            trusted alumni services , designed to support your academic and professional needs.
                        </p>

                        <a href="https://share.google/4lwzdGAKWnaRCAiIA" target="_blank" rel="noopener noreferrer"
                            class="btn btn-danger px-4" style="border-radius: 8px;">
                            Apply Now
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </section>



    @include('layouts.templates.footer')
    @include('layouts.templates.script')
