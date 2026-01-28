<!-- Service Start -->
<section class="position-relative min-vh-75 py-3 overflow-hidden">

    <!-- Section Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background-color: rgba(255, 255, 255, 0.4); z-index: 1;"></div>

    <div class="container py-5 position-relative" style="z-index: 2;">

        <!-- Heading -->
        <div class="text-center mb-5 px-3">
            <h1 class="fw-bold text-dark mb-3">
                Built to Support You
                <span class="animate__animated animate__fadeInUp animate__delay-1s" style="color:#FBAF17;"> Beyond
                    Graduation</span>
            </h1>

            <p class="text-dark col-md-10 mx-auto">
                Your journey with NUST does not end at graduation. From access to campus spaces to continuous learning
                and exclusive alumni services, we are here to support you at every stage of your personal and
                professional life.
            </p>
        </div>

        <!-- Cards Row -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card shadow-sm h-100 animate__animated animate__fadeInUp animate__delay-1s">

                    <!-- Image with PERMANENT Overlay -->
                    <div class="position-relative">
                        <img src="{{ asset('templates/img/service-3.jpg') }}" class="card-img-top img-fluid"
                            alt="Campus Facilities">

                        <!-- Permanent Overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.35);">
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Campus Facilities</h5>
                        <p class="card-text flex-grow-1">
                            Reconnect with your campus and enjoy access to key facilities, spaces, and services.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card shadow-sm h-100 animate__animated animate__fadeInUp animate__delay-2s">

                    <div class="position-relative">
                        <img src="{{ asset('templates/img/service-1.jpg') }}" class="card-img-top img-fluid"
                            alt="Lifelong Learning">

                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.35);">
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Lifelong Learning</h5>
                        <p class="card-text flex-grow-1">
                            Continue to grow with talks, seminars, and learning opportunities.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card shadow-sm h-100 animate__animated animate__fadeInUp animate__delay-3s">

                    <div class="position-relative">
                        <img src="{{ asset('templates/img/service-2.jpg') }}" class="card-img-top img-fluid"
                            alt="Alumni Card">

                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.35);">
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alumni Card</h5>
                        <p class="card-text flex-grow-1">
                            Your official gateway to alumni privileges, offering access,
                            recognition, and benefits.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Service End -->
