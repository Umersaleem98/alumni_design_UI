@include('layouts.templates.head')

<style>
    .register-wrapper {
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .register-card {
        background: #01273E;
        border-radius: 16px;
        color: #fff;
    }

    .step-image {
        text-align: center;
        opacity: 0;
    }

    .step-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
    }

    .step-form {
        opacity: 0;
    }

    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
    }

    .form-step.active .step-form {
        animation: fadeUp 0.6s ease forwards;
    }

    .form-step.active .img-left {
        animation: slideLeft 0.7s ease forwards;
    }

    .form-step.active .img-right {
        animation: slideRight 0.7s ease forwards;
    }

    @keyframes slideLeft {
        from {
            opacity: 0;
            transform: translateX(-40px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(40px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .step-indicator span {
        width: 30px;
        height: 30px;
        background: #6c757d;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 4px;
        font-size: 13px;
    }

    .step-indicator span.active {
        background: #FBAF17;
        color: #000;
    }

    label {
        font-size: 13px;
    }

    .form-control,
    select {
        font-size: 13px;
        background: #fff;
        color: #000;
    }

    /* Hide conditional fields initially */
    .conditional-fields {
        display: none;
    }

    /* Terms checkbox label */
    .terms-label {
        font-size: 13px;
        color: #fff;
        user-select: none;
    }

    /* For mobile and country code side by side */
    .mobile-group {
        display: flex;
        gap: 8px;
    }

    .mobile-group select {
        flex: 0 0 100px;
    }

    .mobile-group input {
        flex: 1;
    }
</style>

<body>
    @include('layouts.templates.header')

    <div class="container mt-2 p-5">
        <div class="register-wrapper">
            <div class="row w-100 justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">

                    <div class="register-card shadow-lg p-5 p-md-5">

                        <h4 class="mb-3 text-center text-light">Create Account</h4>

                        <div class="step-indicator text-center mb-4">
                            <span class="active">1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                        </div>

                        <form id="multiStepForm" onsubmit="return false;">

                            {{-- STEP 1 --}}
                            <div class="form-step active">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 text-center">
                                        <div class="step-image img-left mb-4">
                                            <img src="{{ asset('templates/img/degreee.jpeg') }}">
                                        </div>
                                        <button type="button" class="btn btn-danger btn-lg" id="startBtn">
                                            Start
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 2: PERSONAL INFO --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Personal Information</h6>
                                        <label for="fullName" class="text-light">Full Name</label>
                                        <input id="fullName" name="fullName" type="text" class="form-control mb-3"
                                            placeholder="Full Name" required>

                                        <label for="cnic" class="text-light">CNIC / Passport No</label>
                                        <input id="cnic" name="cnic" type="text" class="form-control mb-3"
                                            placeholder="CNIC / Passport No" required>

                                        <label for="personalEmail" class="text-light">Personal Email</label>
                                        <input id="personalEmail" name="personalEmail" type="email"
                                            class="form-control mb-3" placeholder="Personal Email" required>

                                        <label class="text-light">Mobile Number</label>
                                        <div class="mobile-group mb-3">
                                            <select id="countryCode" name="countryCode" class="form-control" required>
                                                <option value="+92" selected>+92 (PK)</option>
                                                <option value="+1">+1 (US)</option>
                                                <option value="+44">+44 (UK)</option>
                                                <option value="+61">+61 (AU)</option>
                                                <!-- Add more country codes as needed -->
                                            </select>
                                            <input id="mobileNumber" name="mobileNumber" type="tel"
                                                class="form-control" placeholder="Mobile Number" required
                                                pattern="[0-9]{7,15}" title="Please enter valid number">
                                        </div>

                                        <label for="currentCountry" class="text-light">Current Country</label>
                                        <select id="currentCountry" name="currentCountry" class="form-control mb-3"
                                            required>
                                            <option value="" disabled selected>Select Country</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Australia">Australia</option>
                                            <!-- Add more countries as needed -->
                                        </select>

                                        <label for="currentCity" class="text-light">Current City</label>
                                        <select id="currentCity" name="currentCity" class="form-control mb-3" required>
                                            <option value="" disabled selected>Select City</option>
                                            <!-- Cities could dynamically load based on country selection, example static list: -->
                                            <option value="Karachi">Karachi</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="New York">New York</option>
                                            <option value="London">London</option>
                                            <option value="Sydney">Sydney</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 3: EDUCATION --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Education</h6>

                                        <label for="nustRegNo" class="text-light">NUST Registration Number</label>
                                        <input id="nustRegNo" name="nustRegNo" type="text" class="form-control mb-3"
                                            placeholder="NUST Registration Number" required>

                                        <label for="degreeName" class="text-light">Degree Name</label>
                                        <select id="degreeName" name="degreeName" class="form-control mb-3" required>
                                            <option value="" disabled selected>Select Degree</option>
                                            <option value="Bachelors">Bachelors</option>
                                            <option value="Masters">Masters</option>
                                            <option value="PhD">PhD</option>
                                        </select>

                                        <label for="school" class="text-light">School</label>
                                        <select id="school" name="school" class="form-control mb-3" required>
                                            <option value="" disabled selected>Select School</option>
                                            <option value="School of Engineering">School of Engineering</option>
                                            <option value="School of Business">School of Business</option>
                                            <option value="School of Science">School of Science</option>
                                            <!-- Add more schools as needed -->
                                        </select>

                                        <label for="discipline" class="text-light">Discipline</label>
                                        <select id="discipline" name="discipline" class="form-control mb-3" required>
                                            <option value="" disabled selected>Select Discipline</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Business Administration">Business Administration</option>
                                            <!-- Add more disciplines as needed -->
                                        </select>

                                        <label for="enrolmentYear" class="text-light">Enrolment Year</label>
                                        <input id="enrolmentYear" name="enrolmentYear" type="number" min="1900"
                                            max="2100" class="form-control mb-3" placeholder="Enrolment Year"
                                            required>

                                        <label for="graduationYear" class="text-light">Graduation Year</label>
                                        <input id="graduationYear" name="graduationYear" type="number"
                                            min="1900" max="2100" class="form-control mb-3"
                                            placeholder="Graduation Year" required>
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/b.jpeg') }}">
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 4: PROFESSIONAL --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/c.jpeg') }}">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Professional</h6>

                                        <label for="currentStatus" class="text-light">Current Status</label>
                                        <select id="currentStatus" name="currentStatus" class="form-control mb-3"
                                            required>
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self Employed">Self Employed</option>
                                            <option value="Not Currently Employed">Not Currently Employed</option>
                                        </select>

                                        <div id="conditionalFields" class="conditional-fields">
                                            <label for="currentOrganization" class="text-light">Current
                                                Organization</label>
                                            <input id="currentOrganization" name="currentOrganization" type="text"
                                                class="form-control mb-3" placeholder="Current Organization">

                                            <label for="designation" class="text-light">Designation</label>
                                            <input id="designation" name="designation" type="text"
                                                class="form-control mb-3" placeholder="Designation">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 5: SECURITY --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Security</h6>

                                        <label for="password" class="text-light">Password</label>
                                        <input id="password" name="password" type="password"
                                            class="form-control mb-3" placeholder="Password" required
                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}"
                                            title="Must contain at least one uppercase, one lowercase, one special character, one number and minimum 8 characters">

                                        <label for="confirmPassword" class="text-light">Confirm Password</label>
                                        <input id="confirmPassword" name="confirmPassword" type="password"
                                            class="form-control mb-3" placeholder="Confirm Password" required>

                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" id="termsCheck" required>
                                            <label class="form-check-label terms-label" for="termsCheck">
                                                I agree to the <a href="#" class="text-warning">Terms and
                                                    Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/d.jpeg') }}">
                                    </div>
                                </div>
                            </div>

                            {{-- NAVIGATION --}}
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
                                <button type="button" class="btn btn-danger" id="nextBtn">Next</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="registrationSuccessModal" tabindex="-1"
        aria-labelledby="registrationSuccessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationSuccessModalLabel">Registration Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for registering!</p>
                    <p>Once your account is verified, you’ll be able to log in and access your account.</p>
                    <p>If your account is not verified after 3 days, please email us your degree or transcript for
                        manual verification.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const steps = document.querySelectorAll('.form-step');
        const indicators = document.querySelectorAll('.step-indicator span');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const startBtn = document.getElementById('startBtn');
        const currentStatus = document.getElementById('currentStatus');
        const conditionalFields = document.getElementById('conditionalFields');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        let currentStep = 0;

        function updateSteps() {
            steps.forEach((step, i) => {
                step.classList.toggle('active', i === currentStep);
                indicators[i].classList.toggle('active', i === currentStep);
            });

            prevBtn.style.display = currentStep <= 1 ? 'none' : 'inline-block';
            nextBtn.style.display = currentStep === 0 ? 'none' : 'inline-block';
            nextBtn.innerText = currentStep === steps.length - 1 ? 'Submit' : 'Next';
        }

        startBtn.onclick = () => {
            currentStep = 1;
            updateSteps();
        };

        nextBtn.onclick = () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateSteps();
            } else {
                // Password match check
                if (password.value !== confirmPassword.value) {
                    alert("Passwords do not match.");
                    return;
                }

                // Terms checkbox check
                const termsCheck = document.getElementById('termsCheck');
                if (!termsCheck.checked) {
                    alert('Please agree to the Terms and Conditions before submitting.');
                    return;
                }

                // Form validation
                if (!document.getElementById('multiStepForm').checkValidity()) {
                    document.getElementById('multiStepForm').reportValidity();
                    return;
                }

                // If all good, show modal popup
                var modal = new bootstrap.Modal(document.getElementById('registrationSuccessModal'));
                modal.show();

                // Optionally: reset form or disable navigation after success
                // document.getElementById('multiStepForm').reset();
                // nextBtn.disabled = true;
                // prevBtn.disabled = true;
            }
        };

        prevBtn.onclick = () => {
            currentStep--;
            updateSteps();
        };

        // Show/hide conditional fields based on dropdown selection
        currentStatus.addEventListener('change', () => {
            const val = currentStatus.value;
            if (val === 'Employed' || val === 'Self Employed') {
                conditionalFields.style.display = 'block';
                document.getElementById('currentOrganization').required = true;
                document.getElementById('designation').required = true;
            } else {
                conditionalFields.style.display = 'none';
                document.getElementById('currentOrganization').required = false;
                document.getElementById('designation').required = false;
            }
        });

        updateSteps();
    </script>

    @include('layouts.templates.footer')
    @include('layouts.templates.script')
