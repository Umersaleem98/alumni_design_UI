@include('layouts.templates.head')
<title>About Us</title>
<style>
    .page-header {
        position: relative;
        /* needed for the overlay positioning */
        min-height: 300px;
        background: url('{{ asset('templates/img/banner/about-us.jpeg') }}') center center no-repeat;
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
    <div class="container-fluid page-header mb-3 py-3">
        <div class="container">
            <h1 class="mb-3 animated text-light slideInDown">About Us</h1>
            <p class="mb-3">
                Strengthening connections, building community, and supporting alumni for life.
            </p>
            {{-- <button class="btn btn-light btn-sm">View Upcoming Events</button> --}}
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- Rector Image -->
                <div class="col-md-4">
                    <div class="border p-3 text-center">
                        <img src="{{ asset('templates\img\team\21.png') }}" class="img-fluid mb-2" alt="Rector Image">
                        <p class="fw-semibold mb-0">Director</p>
                        <p class="fw-semibold mb-0">University Advancement Office</p>
                    </div>
                </div>

                <!-- Rector Message -->
                <div class="col-md-8">
                    <h3 class="fw-bold">Director Message</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum at erat euismod, tincidunt metus at, faucibus lorem.
                    </p>
                    <p class="fw-semibold">Director, Arooba Gillani</p>
                </div>

            </div>
        </div>
    </section>

    {{-- <section class="py-5 bg-light">
        <div class="container text-center">
            <h3 class="fw-bold mb-3">About the Alumni Affairs Office</h3>
            <p class="text-muted col-md-8 mx-auto">
                Alumni engagement, support services, and alumni engagement thrives,
                leaderships and community donations.
            </p>
        </div>
    </section> --}}

    <section class="py-5 text-white" style="background:#1e2a44;">
        <div class="container text-center">
            <h1 class="fw-bold text-light">New to NUST Alumni?</h1>
            <p class="mb-4">
                It's never too late to reconnect. Once you register, you'll be able
                to access alumni services and connect with fellow graduates.
            </p>
            <a href="#" class="btn btn-danger px-4">Register</a>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h1 class="fw-bold text-center mb-4">Our Team</h1>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card team-card h-100 text-center">
                        <img src="{{ asset('templates/img/team/20.png') }}" class="card-img-top team-img"
                            alt="Ameer Hamza">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Ameer Hamza</h6>
                            <p class="text-muted mb-0">Lead Alumni Relations</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card team-card h-100 text-center">
                        <img src="{{ asset('templates/img/team/22.png') }}" class="card-img-top team-img"
                            alt="Ayesha Khan">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Ayesha Khan</h6>
                            <p class="text-muted mb-0">MTO</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-4">
                    <div class="card team-card h-100 text-center">
                        <img src="team3.jpg" class="card-img-top team-img" alt="Team Member">

                        <div class="card-body">
                            <h6 class="fw-semibold mb-1">Designation</h6>
                            <p class="text-muted mb-0">Department</p>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <style>
        .team-card {
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            overflow: hidden;
            transition: 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .team-img {
            height: 280px;
            /* SAME HEIGHT */
            width: 100%;
            object-fit: cover;
            /* Crop properly */
        }
    </style>

    <section class="py-5 text-white" style="background:#1e2a44;">
        <div class="container">
            <h1 class="fw-bold text-light text-center mb-4">Office Details</h1>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="bg-light text-dark p-4 rounded h-100">
                        <h6 class="fw-bold">Our Team</h6>
                        <ul class="mb-0">
                            <li>Director UAO</li>
                            <li>Lead Alumni Relations</li>
                            <li>Management Trainee Officer</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bg-light text-dark p-4 rounded h-100">
                        <h6 class="fw-bold">Office Details</h6>
                        <p class="mb-1">Room # 109-RIC Building</p>
                        <p class="mb-0">NUST, H12 Islamabad</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bg-light text-dark p-4 rounded h-100">
                        <h6 class="fw-bold">Office Hours/ Contact</h6>
                        <p class="mb-0">Mon – Fri</p>
                        <p class="mb-0">9:00 AM – 5:00 PM</p>
                        <p class="mb-0">051-90856838</p>
                        <p class="mb-0">info@alumni.nust.edu.pk</p>
                    </div>
                </div>

            </div>

            <p class="text-center mt-4 mb-0">
                Committed to serving and strengthening our alumni community.
            </p>
        </div>
    </section>



    @include('layouts.templates.footer')
    @include('layouts.templates.script')
