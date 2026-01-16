<style>
    /* Card base */
    .service-card {
        transition: all 0.35s ease;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    /* Image control */
    .service-card img {
        height: 160px;
        /* 🔥 Reduced height */
        width: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    /* Hover effect */
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.25);
    }

    .service-card:hover img {
        transform: scale(1.06);
    }

    /* Card body */
    .service-card .card-body {
        padding: 1.25rem;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    /* Title */
    .service-card h5 {
        color: #01273e;
        font-weight: 700;
        margin-bottom: 4px;
    }

    /* Subtitle */
    .service-card h6 {
        color: #6c757d;
        font-size: 0.85rem;
        margin-bottom: 10px;
        min-height: 20px;
        /* 🔥 Keeps alignment equal */
    }

    /* Paragraph */
    .service-card p {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
        flex-grow: 1;
        /* 🔥 Equal height text area */
    }
</style>
<!-- Service Start -->
<section class="position-relative vh-100 d-flex align-items-center mb-3"
    style="background: url('templates/img/shape-the-future.jpeg') center center / cover no-repeat;">

    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="
            background: linear-gradient(
                rgba(1, 39, 62, 0.85),
                rgba(1, 39, 62, 0.85)
            );
            z-index: 1;
        ">
    </div>

    <div class="container py-5 position-relative" style="z-index: 2;">

        <!-- Heading Text -->
        <div class="text-center text-white mb-5 px-3">
            <h2 class="fw-bold text-light mb-2">Shape the <span style="color: #FBAF17">Future of NUST</span></h2>
            <h5 class="fw-semibold text-light mb-3">
                Make a Difference, Connect, and Give Back
            </h5>
            {{-- <p class="lead col-md-8 mx-auto text-light">
                As a NUST alumnus, you have the opportunity to give back — through mentorship,
                industry connections, or financial support — and make a lasting impact on the next generation.
            </p> --}}
        </div>

        <!-- Cards Row -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100 border-0">
                    <img src="templates/img/Mentorship.jpeg" class="card-img-top" alt="Mentorship">
                    <div class="card-body">
                        <h5>Mentorship</h5>
                        <h6>Guide Future Leaders</h6>
                        <p>
                            Guide, inspire, and support students and young alumni by sharing your experiences,
                            insights, and career journey.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100 border-0">
                    <img src="templates/img/Industry Connect.jpeg" class="card-img-top" alt="Industry Connect">
                    <div class="card-body">
                        <h5>Industry Connect</h5>
                        <h6>Open New Doors</h6>
                        <p>
                            Open doors to opportunities by connecting NUST students and graduates
                            with your professional network.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100 border-0">
                    <img src="templates/img/Give Back.jpeg" class="card-img-top" alt="Give Back">
                    <div class="card-body">
                        <h5>Give Back</h5>
                        <h6>Support Education</h6>
                        <p>
                            Contribute to the long-term growth of NUST by supporting scholarships,
                            research, and student development initiatives.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Service End -->
