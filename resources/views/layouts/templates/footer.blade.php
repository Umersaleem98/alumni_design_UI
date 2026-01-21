<!-- Footer Start -->
<div class="container-fluid text-light footer my-6 mb-0 py-5 position-relative overflow-hidden" data-wow-delay="0.1s"
    style="z-index: 1; background-color: #01273E;">


    <div class="position-absolute w-100 h-100"
        style="
    background-image: url('{{ asset('templates/img/footerbg.png') }}');
    background-size: cover;
    background-position: center;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0.15;">
    </div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row">
            <!-- Your existing footer columns -->
            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light">Get In Touch</h4>

                <p class="mb-2">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    Alumni Office, Room 109, 1st Floor
                    RIC Building, National University of Sciences & Technology (NUST),
                    Sector H-12, Islamabad, Pakistan
                </p>
                <p class="mb-2">
                    <i class="fas fa-phone-alt me-2"></i>
                    051-90856838
                </p>
                <p class="mb-2">
                    <i class="fas fa-envelope me-2"></i>
                    info@alumni.nust.edu.pk
                </p>
            </div>


            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light">Quick Links</h4>
                <a class="btn btn-link" href="#">Home</a>
                <a class="btn btn-link" href="#">Event</a>
                <a class="btn btn-link" href="#">Alumni Community</a>
                <a class="btn btn-link" href="#">Alumni Privileges</a>
                <a class="btn btn-link" href="#">Giving Back</a>
                <a class="btn btn-link" href="#">About</a>
                {{-- <a class="btn btn-link" href="#">Get Involved</a> --}}
            </div>
            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light"> Popular Links</h4>
                <a class="btn btn-link" href="#">Alumni Card</a>
                <a class="btn btn-link" href="#">Degree/Transcript Verification</a>
                <a class="btn btn-link" href="#">Issuance of Certificates</a>
                <a class="btn btn-link" href="#"> Mentorship Program</a>
                <a class="btn btn-link" href="#">Endowment</a>
            </div>

            <!-- Column 4 -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light">Follow Us</h4>
                {{-- <h6 class="text-white mt-4 mb-3">Follow Us</h6> --}}
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light me-1" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light me-0" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <img src="{{ asset('templates/img/Footer.png') }}" alt="Footer Image" class="w-100"
                style="height: 150px; object-fit: cover;">

        </div>
    </div>
</div>
