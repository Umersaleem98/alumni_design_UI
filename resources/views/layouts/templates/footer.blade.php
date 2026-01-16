 {{-- <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light mb-4">Address</h4>
                 <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                 <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                 <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                 <div class="d-flex pt-2">
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light mb-4">Opening Hours</h4>
                 <h6 class="text-light">Monday - Friday:</h6>
                 <p class="mb-4">09.00 AM - 09.00 PM</p>
                 <h6 class="text-light">Saturday - Sunday:</h6>
                 <p class="mb-0">09.00 AM - 12.00 PM</p>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light mb-4">Services</h4>
                 <a class="btn btn-link" href="">Drain Cleaning</a>
                 <a class="btn btn-link" href="">Sewer Line</a>
                 <a class="btn btn-link" href="">Water Heating</a>
                 <a class="btn btn-link" href="">Toilet Cleaning</a>
                 <a class="btn btn-link" href="">Broken Pipe</a>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light mb-4">Newsletter</h4>
                 <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                 <div class="position-relative mx-auto" style="max-width: 400px;">
                     <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                     <button type="button"
                         class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="copyright">
             <div class="row">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                 </div>
                 <div class="col-md-6 text-center text-md-end">
                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed
                     By <a href="https://themewagon.com">ThemeWagon</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End --> --}}


 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 position-relative overflow-hidden"
     data-wow-delay="0.1s" style="z-index: 1;">


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
                 {{-- <img src="{{ asset('templates/img/logo.png') }}" alt="Logo"
        style="max-width: 100px; margin-bottom: 15px;" class="text-center"> --}}
                 <p class="mb-2">
                     <i class="fas fa-map-marker-alt me-2"></i>
                     Alumni Office, 1st Floor, Room 109, RIC building, NUST,
                     H-12 Islamabad
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
                 <a class="btn btn-link" href="#">About</a>
                 <a class="btn btn-link" href="#">Resources</a>
                 {{-- <a class="btn btn-link" href="#">Publications</a> --}}
                 <a class="btn btn-link" href="#">Event</a>
                 <a class="btn btn-link" href="#">AlumNUST</a>
                 <a class="btn btn-link" href="#">Campus</a>
                 <a class="btn btn-link" href="#">Get Involved</a>
             </div>

             <!-- Column 3 -->
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light">Popular Links</h4>
                 <a class="btn btn-link" href="#">AlumCard</a>
                 <a class="btn btn-link" href="#">Association</a>
                 <a class="btn btn-link" href="#">Ambassador Program</a>
                 <a class="btn btn-link" href="#">Volunteer Program</a>
                 <a class="btn btn-link" href="#">AlumNust Giving</a>
             </div>

             <!-- Column 4 -->
             <div class="col-lg-3 col-md-6">
                 <h4 class="text-light">Follow Us</h4>
                 {{-- <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>
                </form> --}}
                 {{-- <h6 class="text-white mt-4 mb-3">Follow Us</h6> --}}
                 <div class="d-flex pt-2">
                     <a class="btn btn-square btn-outline-light me-1" href="#"><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-outline-light me-1" href="#"><i
                             class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-outline-light me-1" href="#"><i class="fab fa-youtube"></i></a>
                     <a class="btn btn-square btn-outline-light me-0" href="#"><i
                             class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
             <img src="{{ asset('templates/img/Footer.png') }}" alt="Footer Image" class="w-100"
                 style="height: 150px; object-fit: cover;">

         </div>
     </div>
 </div>
