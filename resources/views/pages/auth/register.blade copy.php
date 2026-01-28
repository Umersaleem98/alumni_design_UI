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
        opacity: 1;
    }

    .form-step.active .img-left {
        animation: slideLeft 0.7s ease forwards;
        opacity: 1;
    }

    .form-step.active .img-right {
        animation: slideRight 0.7s ease forwards;
        opacity: 1;
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

    /* STEP INDICATOR */
    .step-indicator span {
        width: 30px;
        height: 30px;
        background: #800000;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 4px;
        font-size: 13px;
        color: #fff;
        cursor: pointer;
        user-select: none;
    }

    .step-indicator span.active {
        background: #FBAF17;
        color: #000;
    }

    /* INPUT STYLING */
    label {
        font-size: 13px;
    }

    .form-control,
    select {
        font-size: 13px;
        background: #fff;
        color: #000;
        border-radius: 8px;
        border: 1.5px solid #FFC107;
        transition: all 0.3s ease;
    }

    .form-control:focus,
    select:focus {
        border-color: #FFC107;
        box-shadow: 0 0 0 0.19rem rgba(128, 0, 0, 0.25);
    }

    .form-check-input:checked {
        background-color: #FFC107;
        border-color: #FFC107;
    }

    .conditional-fields,
    .extra-input {
        display: none;
    }

    .terms-label {
        font-size: 13px;
        color: #fff;
        user-select: none;
    }

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
    }

    /* Small adjustments */
    .form-check-label {
        font-size: 13px;
        color: #fff;
    }
</style>

<body>
    @include('layouts.templates.header')

    <div class="container mt-2 p-5">
        <div class="register-wrapper">
            <div class="row w-100 justify-content-center">
                <div class="col-xl-9 col-lg-10 col-md-11">
                    <div class="register-card shadow-lg p-5">
                        <h4 class="mb-3 text-center text-light">Create Account</h4>

                        <!-- STEP INDICATOR -->
                        <div class="step-indicator text-center mb-3">
                            <span class="active" data-step="0">1</span>
                            <span data-step="1">2</span>
                            <span data-step="2">3</span>
                            <span data-step="3">4</span>
                            <span data-step="4">5</span>
                        </div>

                        <!-- PROGRESS BAR -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <small class="text-light">Profile Completion</small>
                                <small class="text-warning" id="progressPercent">0%</small>
                            </div>
                            <div class="progress" style="height:8px;border-radius:20px;">
                                <div id="progressBar" class="progress-bar"
                                    style="width:0%;background:#FFC107;border-radius:20px;">
                                </div>
                            </div>
                        </div>

                        <form id="multiStepForm" onsubmit="return false;">
                            <!-- STEP 1 -->
                            <div class="form-step active">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 text-center">
                                        <div class="step-image img-left mb-4">
                                            <img src="{{ asset('templates/img/degreee.jpeg') }}" alt="Degree Image">
                                        </div>
                                        <button type="button" class="btn btn-danger btn-lg"
                                            id="startBtn">Start</button>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 2: Personal Information -->
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}"
                                            alt="Personal Info Image">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Personal Information</h6>

                                        <input class="form-control mb-3"
                                            placeholder="Full Name (As present on the degree)">

                                        <!-- CNIC/Passport Toggle -->
                                        <div class="mb-3">
                                            <label class="terms-label d-block mb-1">Student Type</label>
                                            <select class="form-control" id="studentType">
                                                <option value="" disabled selected>Select Student Type</option>
                                                <option value="local">Local Student</option>
                                                <option value="international">International Student</option>
                                            </select>
                                        </div>

                                        <input class="form-control mb-3" placeholder="CNIC (xxxxx-xxxxxxx-x)"
                                            id="cnicInput" title="Format: xxxxx-xxxxxxx-x">

                                        <input class="form-control mb-3" placeholder="Passport (xxxxx-xxxxxxxx-x)"
                                            id="passportInput" title="Format: xxxxx-xxxxxxxx-x" style="display:none;">

                                        <input type="email" class="form-control mb-3" placeholder="Personal Email">

                                        <input type="tel" class="form-control mb-3"
                                            placeholder="Mobile (Whatsapp No)">

                                        <select class="form-control mb-3" id="currentCountry">
                                            <option disabled selected>Select Country</option>
                                            <option>Pakistan</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input class="form-control mb-3 extra-input" id="otherCountry"
                                            placeholder="Other Country">
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 3: Education -->
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Education</h6>

                                        <input class="form-control mb-3" placeholder="Registration Number">

                                        <select class="form-control mb-3" id="degreeSelect">
                                            <option value="" disabled selected>Select Degree typex</option>
                                            <option>Bachelors</option>
                                            <option>Masters</option>
                                            <option>PhD</option>
                                            <option value="other">Other</option>
                                        </select>

                                        <input class="form-control mb-3 extra-input" id="otherDegree"
                                            placeholder="Specify Other Degree">

                                        <input class="form-control mb-3" placeholder="Program">

                                        <label class="text-light">School Year</label>
                                        <div class="d-flex gap-2 mb-3">
                                            <input type="number" class="form-control" id="startYear"
                                                placeholder="From (e.g. 1995)" min="1995" max="2099">
                                            <input type="number" class="form-control" id="endYear"
                                                placeholder="To (max 4 years gap)" min="1997" max="2103">
                                        </div>
                                        <small class="text-warning d-block mb-3" id="yearError"
                                            style="display:none;"></small>
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/b.jpeg') }}" alt="Education Image">
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 4: Professional -->
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/c.jpeg') }}"
                                            alt="Professional Image">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Professional</h6>

                                        <select class="form-control mb-3" id="currentStatus">
                                            <option value="" disabled selected>Status</option>
                                            <option value="employed">Employed</option>
                                            <option value="self-employed">Self Employed</option>
                                            <option value="unemployed">Unemployed</option>
                                        </select>

                                        <div class="conditional-fields" id="employmentFields">
                                            <input type="text" class="form-control mb-3" id="organization"
                                                placeholder="Organization">
                                            <input type="text" class="form-control mb-3" id="designation"
                                                placeholder="Designation">

                                            <label class="text-light">Duration</label>
                                            <div class="d-flex gap-2 mb-3">
                                                <input type="month" class="form-control" id="workFrom"
                                                    placeholder="From">
                                                <input type="month" class="form-control" id="workTo"
                                                    placeholder="To">
                                            </div>

                                            <div class="form-check mb-3 text-light">
                                                <input type="checkbox" class="form-check-input" id="currentWork">
                                                <label for="currentWork" class="form-check-label">Current Work</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 5: Security -->
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Security</h6>

                                        <input type="password" class="form-control mb-3" placeholder="Password">

                                        <input type="password" class="form-control mb-3"
                                            placeholder="Confirm Password">

                                        <label for="password" class="text-warning mb-1"
                                            style="font-size: 12px; font-weight: bold;">
                                            Password requirements:
                                        </label>
                                        <ul class="text-warning"
                                            style="font-size: 12px; margin-top: 0; margin-bottom: 1rem; padding-left: 18px;">
                                            <li>Minimum 8 characters</li>
                                            <li>At least one uppercase letter (A-Z)</li>
                                            <li>At least one lowercase letter (a-z)</li>
                                            <li>At least one number (0-9)</li>
                                            <li>At least one special character (e.g. !@#$%^&*)</li>
                                        </ul>

                                        <div class="form-check mb-3 text-light">
                                            <input type="checkbox" class="form-check-input" id="termsCheckbox">
                                            <label for="termsCheckbox" class="terms-label">I agree to the <a
                                                    href="#" class="text-warning">Terms and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/d.jpeg') }}" alt="Security Image">
                                    </div>
                                </div>
                            </div>

                            <!-- NAV -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary" id="prevBtn"
                                    disabled>Previous</button>
                                <button type="button" class="btn btn-danger" id="nextBtn">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const steps = document.querySelectorAll('.form-step');
        const indicators = document.querySelectorAll('.step-indicator span');
        const progressBar = document.getElementById('progressBar');
        const progressPercent = document.getElementById('progressPercent');

        const startBtn = document.getElementById('startBtn');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');

        let currentStep = 0;

        // Show/hide inputs based on selections
        const studentType = document.getElementById('studentType');
        const cnicInput = document.getElementById('cnicInput');
        const passportInput = document.getElementById('passportInput');

        const currentCountry = document.getElementById('currentCountry');
        const otherCountryInput = document.getElementById('otherCountry');

        const degreeSelect = document.getElementById('degreeSelect');
        const otherDegreeInput = document.getElementById('otherDegree');

        const currentStatus = document.getElementById('currentStatus');
        const employmentFields = document.getElementById('employmentFields');
        const workToInput = document.getElementById('workTo');
        const currentWorkCheckbox = document.getElementById('currentWork');

        const startYearInput = document.getElementById('startYear');
        const endYearInput = document.getElementById('endYear');
        const yearError = document.getElementById('yearError');

        function updateProgress() {
            const total = steps.length - 1;
            const percent = Math.round(Math.max(currentStep - 1, 0) / total * 100);
            progressBar.style.width = percent + '%';
            progressPercent.innerText = percent + '%';
        }

        function updateSteps() {
            steps.forEach((step, idx) => {
                step.classList.toggle('active', idx === currentStep);
            });
            indicators.forEach((ind, idx) => {
                ind.classList.toggle('active', idx === currentStep);
            });

            prevBtn.disabled = currentStep === 0;
            if (currentStep === steps.length - 1) {
                nextBtn.innerText = "Submit";
            } else {
                nextBtn.innerText = "Next";
            }

            updateProgress();
        }

        // Handle click on indicators to jump steps (optional)
        indicators.forEach(indicator => {
            indicator.addEventListener('click', () => {
                const step = parseInt(indicator.getAttribute('data-step'));
                if (step >= 0 && step < steps.length) {
                    currentStep = step;
                    updateSteps();
                }
            });
        });

        // Start button
        startBtn.onclick = () => {
            currentStep = 1;
            updateSteps();
        };

        // Next button
        nextBtn.onclick = () => {
            if (!validateStep(currentStep)) return;

            if (currentStep < steps.length - 1) {
                currentStep++;
                updateSteps();
            } else {
                // Submit form here or further validation
                alert('Form submitted!');
                // You can trigger form submission here
            }
        };

        // Previous button
        prevBtn.onclick = () => {
            if (currentStep > 0) {
                currentStep--;
                updateSteps();
            }
        };

        // Student type change
        studentType.addEventListener('change', () => {
            if (studentType.value === 'international') {
                cnicInput.style.display = 'none';
                cnicInput.required = false;

                passportInput.style.display = 'block';
                passportInput.required = true;
            } else {
                cnicInput.style.display = 'block';
                cnicInput.required = true;

                passportInput.style.display = 'none';
                passportInput.required = false;
            }
        });

        // Country select change
        currentCountry.addEventListener('change', () => {
            if (currentCountry.value === 'other') {
                otherCountryInput.style.display = 'block';
                otherCountryInput.required = true;
            } else {
                otherCountryInput.style.display = 'none';
                otherCountryInput.required = false;
            }
        });

        // Degree select change
        degreeSelect.addEventListener('change', () => {
            if (degreeSelect.value === 'other') {
                otherDegreeInput.style.display = 'block';
                otherDegreeInput.required = true;
            } else {
                otherDegreeInput.style.display = 'none';
                otherDegreeInput.required = false;
            }
        });

        // Current status change
        currentStatus.addEventListener('change', () => {
            if (currentStatus.value === 'employed' || currentStatus.value === 'self-employed') {
                employmentFields.style.display = 'block';
                // Make required
                document.getElementById('organization').required = true;
                document.getElementById('designation').required = true;
                document.getElementById('workFrom').required = true;
                if (!currentWorkCheckbox.checked) {
                    workToInput.required = true;
                }
            } else {
                employmentFields.style.display = 'none';
                // Remove required
                document.getElementById('organization').required = false;
                document.getElementById('designation').required = false;
                document.getElementById('workFrom').required = false;
                workToInput.required = false;
            }
        });

        // Current Work checkbox toggle workTo input
        currentWorkCheckbox.addEventListener('change', () => {
            if (currentWorkCheckbox.checked) {
                workToInput.value = '';
                workToInput.required = false;
                workToInput.disabled = true;
            } else {
                workToInput.disabled = false;
                workToInput.required = true;
            }
        });

        // Validate School Year inputs
        function validateSchoolYear() {
            const startYear = parseInt(startYearInput.value);
            const endYear = parseInt(endYearInput.value);

            yearError.style.display = 'none';

            if (isNaN(startYear) || isNaN(endYear)) {
                return false;
            }

            if (startYear < 1995) {
                yearError.textContent = 'Start year cannot be before 1995.';
                yearError.style.display = 'block';
                return false;
            }

            if (endYear < startYear + 2) {
                yearError.textContent = 'Duration must be at least 2 years.';
                yearError.style.display = 'block';
                return false;
            }

            if (endYear > startYear + 4) {
                yearError.textContent = 'Maximum gap between start and end year is 4 years.';
                yearError.style.display = 'block';
                return false;
            }

            return true;
        }

        startYearInput.addEventListener('input', () => {
            validateSchoolYear();
        });

        endYearInput.addEventListener('input', () => {
            validateSchoolYear();
        });

        // Validate current step inputs before moving next
        function validateStep(stepIndex) {
            const currentStepElement = steps[stepIndex];
            const inputs = currentStepElement.querySelectorAll('input, select, textarea');

            // Basic HTML5 validation
            for (let input of inputs) {
                if (!input.checkValidity()) {
                    input.reportValidity();
                    return false;
                }
            }

            // Custom validation for school year
            if (stepIndex === 2) {
                if (!validateSchoolYear()) {
                    return false;
                }
            }

            // Custom validation for employment duration
            if (stepIndex === 3 && (currentStatus.value === 'employed' || currentStatus.value === 'self-employed')) {
                if (!currentWorkCheckbox.checked) {
                    if (!workToInput.value) {
                        alert('Please enter the "To" date or check "Current Work".');
                        return false;
                    }
                }
            }

            return true;
        }

        // Initialize UI visibility on load
        window.addEventListener('DOMContentLoaded', () => {
            updateSteps();
            studentType.dispatchEvent(new Event('change'));
            currentCountry.dispatchEvent(new Event('change'));
            degreeSelect.dispatchEvent(new Event('change'));
            currentStatus.dispatchEvent(new Event('change'));
        });
    </script>

    @include('layouts.templates.footer')
    @include('layouts.templates.script')
