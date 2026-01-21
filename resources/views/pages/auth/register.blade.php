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

    /* Password toggle icon styles */
    .password-wrapper {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #555;
        user-select: none;
    }

    /* Hide extra inputs initially */
    .extra-input {
        display: none;
    }
</style>

<body>
    {{-- @include('layouts.templates.header') --}}

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

                                        <label for="mobileNumber" class="text-light">Mobile Number</label>
                                        <input id="mobileNumber" name="mobileNumber" type="tel"
                                            class="form-control mb-3" placeholder="Enter Mobile Number" required
                                            pattern="[0-9]{7,15}" title="Please enter valid number">

                                        <label for="currentCountry" class="text-light">Current Country</label>
                                        <select id="currentCountry" name="currentCountry" class="form-control mb-3"
                                            required>
                                            <option value="" disabled selected>Select Country</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <input id="otherCountry" name="otherCountry" type="text"
                                            class="form-control mb-3 extra-input" placeholder="Enter Country Name">

                                        <label for="currentCity" class="text-light">Current City</label>
                                        <select id="currentCity" name="currentCity" class="form-control mb-3" required>
                                            <option value="" disabled selected>Select City</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="New York">New York</option>
                                            <option value="London">London</option>
                                            <option value="Sydney">Sydney</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <input id="otherCity" name="otherCity" type="text"
                                            class="form-control mb-3 extra-input" placeholder="Enter City Name">
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
                                            <option value="School of Electrical Engineering and Computer Science">
                                                School of Electrical Engineering and Computer Science</option>
                                            <option value="School of Mechanical and Manufacturing Engineering">School
                                                of Mechanical and Manufacturing Engineering</option>
                                            <option value="School of Civil and Environmental Engineering">School of
                                                Civil and Environmental Engineering</option>
                                            <option value="School of Chemical and Materials Engineering">School of
                                                Chemical and Materials Engineering</option>
                                            <option value="School of Natural Sciences">School of Natural Sciences
                                            </option>
                                            <option value="School of Social Sciences and Humanities">School of Social
                                                Sciences and Humanities</option>
                                            <option value="School of Architecture and Planning">School of Architecture
                                                and Planning</option>
                                            <option value="School of Electrical Engineering">School of Electrical
                                                Engineering</option>
                                            <option value="School of Business and Management Sciences">School of
                                                Business and Management Sciences</option>
                                        </select>

                                        <label for="enrolmentYear" class="text-light">Enrolment Year</label>
                                        <select id="enrolmentYear" name="enrolmentYear" class="form-control mb-3"
                                            required>
                                            <option value="" disabled selected>Select Enrolment Year</option>
                                        </select>

                                        <label for="graduationYear" class="text-light">Graduation Year</label>
                                        <select id="graduationYear" name="graduationYear" class="form-control mb-3"
                                            required>
                                            <option value="" disabled selected>Select Graduation Year</option>
                                        </select>
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
                                        <div class="password-wrapper mb-3">
                                            <input id="password" name="password" type="password"
                                                class="form-control" placeholder="Password" required
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}"
                                                title="Must contain at least one uppercase, one lowercase, one special character, one number and minimum 8 characters">
                                            <span class="toggle-password" id="togglePassword"
                                                title="Show/Hide Password">&#128065;</span>
                                        </div>

                                        <label for="confirmPassword" class="text-light">Confirm Password</label>
                                        <div class="password-wrapper mb-3">
                                            <input id="confirmPassword" name="confirmPassword" type="password"
                                                class="form-control" placeholder="Confirm Password" required>
                                            <span class="toggle-password" id="toggleConfirmPassword"
                                                title="Show/Hide Password">&#128065;</span>
                                        </div>

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
                    <br>


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

        const enrolmentYearSelect = document.getElementById('enrolmentYear');
        const graduationYearSelect = document.getElementById('graduationYear');

        const currentCountry = document.getElementById('currentCountry');
        const otherCountryInput = document.getElementById('otherCountry');
        const currentCity = document.getElementById('currentCity');
        const otherCityInput = document.getElementById('otherCity');

        const togglePassword = document.getElementById('togglePassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

        let currentStep = 0;

        // Generate year options from 1995 to current year
        function generateYearOptions() {
            const currentYear = new Date().getFullYear();
            for (let year = 1995; year <= currentYear; year++) {
                const option1 = document.createElement('option');
                option1.value = year;
                option1.textContent = year;
                enrolmentYearSelect.appendChild(option1);

                const option2 = document.createElement('option');
                option2.value = year;
                option2.textContent = year;
                graduationYearSelect.appendChild(option2);
            }
        }

        // Prevent same year selection for enrolment and graduation
        function preventSameYear() {
            const enrolYear = enrolmentYearSelect.value;
            const gradYear = graduationYearSelect.value;

            if (enrolYear && gradYear && enrolYear === gradYear) {
                alert('Enrolment Year and Graduation Year cannot be the same.');
                graduationYearSelect.value = "";
            }
        }

        // Show/hide "Other Country" input
        currentCountry.addEventListener('change', () => {
            if (currentCountry.value === 'Other') {
                otherCountryInput.style.display = 'block';
                otherCountryInput.required = true;
            } else {
                otherCountryInput.style.display = 'none';
                otherCountryInput.required = false;
                otherCountryInput.value = '';
            }
        });

        // Show/hide "Other City" input
        currentCity.addEventListener('change', () => {
            if (currentCity.value === 'Other') {
                otherCityInput.style.display = 'block';
                otherCityInput.required = true;
            } else {
                otherCityInput.style.display = 'none';
                otherCityInput.required = false;
                otherCityInput.value = '';
            }
        });

        // Update steps and indicators
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
            // Basic form validation before moving forward
            // Only validate visible fields
            const currentStepElement = steps[currentStep];
            const inputs = currentStepElement.querySelectorAll('input, select');

            for (let input of inputs) {
                // If input is hidden, skip validation
                if (input.offsetParent === null) continue;

                if (!input.checkValidity()) {
                    input.reportValidity();
                    return;
                }
            }

            if (currentStep < steps.length - 1) {
                currentStep++;
                updateSteps();
            } else {
                // Final step: extra validations

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

                // Enrolment and Graduation year check
                if (enrolmentYearSelect.value === graduationYearSelect.value) {
                    alert('Enrolment Year and Graduation Year cannot be the same.');
                    return;
                }

                // For Country & City: if "Other" selected but text input empty, alert
                if (currentCountry.value === 'Other' && otherCountryInput.value.trim() === '') {
                    alert('Please enter your country.');
                    otherCountryInput.focus();
                    return;
                }

                if (currentCity.value === 'Other' && otherCityInput.value.trim() === '') {
                    alert('Please enter your city.');
                    otherCityInput.focus();
                    return;
                }

                // Form validation
                if (!document.getElementById('multiStepForm').checkValidity()) {
                    document.getElementById('multiStepForm').reportValidity();
                    return;
                }

                // Submit form logic here
                // For now just show modal popup
                var modal = new bootstrap.Modal(document.getElementById('registrationSuccessModal'));
                modal.show();

                // Optionally reset form or disable navigation after submission
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

        // Toggle password visibility for Password
        togglePassword.addEventListener('click', () => {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            togglePassword.textContent = type === 'password' ? '\u{1F441}' : '\u{1F576}'; // 👁 or 🕶
        });

        // Toggle password visibility for Confirm Password
        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            toggleConfirmPassword.textContent = type === 'password' ? '\u{1F441}' : '\u{1F576}'; // 👁 or 🕶
        });

        // On year change prevent same year selection immediately
        enrolmentYearSelect.addEventListener('change', preventSameYear);
        graduationYearSelect.addEventListener('change', preventSameYear);

        generateYearOptions();
        updateSteps();
    </script>

    {{-- @include('layouts.templates.footer') --}}
    @include('layouts.templates.script')
