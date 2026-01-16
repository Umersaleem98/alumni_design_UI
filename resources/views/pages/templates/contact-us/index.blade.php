@include('layouts.templates.head')
<title>Contact us</title>
<style>
    .custom-shadow {
        box-shadow: 0 0 5px 2px rgba(0, 123, 255, 0.5);
    }
</style>

<body>

    @include('layouts.templates.header')

    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h2 class="mb-3 animated text-light slideInDown">Contact Us</h2>
            <p class="mb-3">
                {{-- Bring NUST Alumni together through professional, social, and community events across chapters. --}}
            </p>
            {{-- <button class="btn btn-danger">View Upcoming Events</button> --}}
        </div>
    </div>


    <!-- Contact Info and Form Section -->
    <section class="container my-5">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center m-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">


            <!-- Left Side: Contact Info with Background & Border -->
            <div class="col-md-6 p-2 d-flex align-items-center justify-content-center text-white position-relative border border-danger rounded shadow"
                style="background: url('{{ asset('templates/img/Contactusbg.gif') }}') center center / cover no-repeat;">


                <!-- Overlay -->
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

                <!-- Content -->
                <div class="position-relative text-center px-4" style="z-index: 2;">
                    <h2 class="mb-4 fw-bold text-light" style="font-size: 2rem;">Contact Information</h2>
                    <ul class="list-unstyled fs-5">
                        <li class="mb-4">
                            <i class="fas fa-map-marker-alt me-2 text-warning"></i>
                            <strong>Address:</strong><br>
                            Alumni Office, 1st Floor, Room 109, RIC building, NUST,
                            H-12 Islamabad
                        </li>
                        <li class="mb-4">
                            <i class="fas fa-phone me-2 text-warning"></i>
                            <strong>Phone:</strong><br> 051-90856838
                        </li>
                        <li class="mb-4">
                            <i class="fas fa-envelope me-2 text-warning"></i>
                            <strong>Email:</strong><br> info@alumni.nust.edu.pk
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <!-- Right Side: Contact Form -->
            <div class="col-md-6 p-5 bg-light border border-danger rounded shadow">
                <h3 class="mb-4 text-center text-danger">Send Us a Message</h3>
                <form action="{{ url('Alumni.query.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label text-dark">Name *</label>
                        <input type="text" name="name" class="form-control form-control-sm custom-shadow"
                            placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="reg_no" class="form-label">Registration No</label>
                        <input type="text" name="reg_no" id="reg_no"
                            class="form-control form-control-sm custom-shadow" placeholder="e.g., 20K-1234" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control form-control-sm custom-shadow" placeholder="example@example.com"
                            required>
                    </div>

                    <!-- Phone with country code dropdown -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <div class="input-group">
                            <select class="form-select form-select-sm custom-shadow" name="country_code"
                                style="max-width: 100px;" required>
                                <option value="">Code</option>
                                <option value="+92" selected>🇵🇰 Pakistan +92</option>

                                <!-- Rest of the countries -->
                                <option value="+1">🇺🇸 United States +1</option>
                                <option value="+44">🇬🇧 United Kingdom +44</option>
                                <option value="+61">🇦🇺 Australia +61</option>
                                <option value="+49">🇩🇪 Germany +49</option>
                                <option value="+33">🇫🇷 France +33</option>
                                <option value="+971">🇦🇪 UAE +971</option>
                                <option value="+81">🇯🇵 Japan +81</option>
                                <option value="+86">🇨🇳 China +86</option>
                                <option value="+880">🇧🇩 Bangladesh +880</option>
                                <option value="+966">🇸🇦 Saudi Arabia +966</option>
                                <option value="+974">🇶🇦 Qatar +974</option>
                                <option value="+965">🇰🇼 Kuwait +965</option>
                                <option value="+20">🇪🇬 Egypt +20</option>
                                <option value="+27">🇿🇦 South Africa +27</option>
                                <option value="+60">🇲🇾 Malaysia +60</option>
                                <option value="+62">🇮🇩 Indonesia +62</option>
                                <option value="+7">🇷🇺 Russia +7</option>
                                <option value="+34">🇪🇸 Spain +34</option>
                                <option value="+39">🇮🇹 Italy +39</option>
                                <option value="+55">🇧🇷 Brazil +55</option>
                                <option value="+63">🇵🇭 Philippines +63</option>
                                <option value="+234">🇳🇬 Nigeria +234</option>
                                <option value="+90">🇹🇷 Turkey +90</option>
                                <!-- Add more as needed -->
                            </select>

                            <input type="tel" name="phone" id="phone"
                                class="form-control form-control-sm custom-shadow" placeholder="Enter phone number"
                                pattern="[0-9]{6,15}" title="Enter a valid phone number" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cnic" class="form-label">CNIC</label>
                        <input type="text" name="cnic" id="cnic"
                            class="form-control form-control-sm custom-shadow"
                            placeholder="Enter 13-digit CNIC without dashes" pattern="\d{13}"
                            title="Enter 13 digits without dashes" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea name="message" id="message" rows="4" class="form-control form-control-sm custom-shadow"
                            placeholder="Type your message here..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Send Message</button>
                </form>
            </div>

            <!-- Optional CSS to style the dropdown better -->
            <style>
                select[name="country_code"] {
                    padding-left: 0.5rem;
                    font-size: 0.85rem;
                    background-color: #f8f9fa;
                    border-right: 1px solid #dee2e6;
                }

                select[name="country_code"] option {
                    padding: 4px 8px;
                }
            </style>

        </div>
    </section>



    <section class="container px-0 mt-4 border border-danger rounded overflow-hidden" style="height: 450px;">
        <iframe style="border:0; width: 100%; height: 100%;" loading="lazy" allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=33.642228033166774,72.98327258398795&hl=en&z=19&output=embed">
        </iframe>
    </section>




    @include('layouts.templates.footer')
    @include('layouts.templates.script')
