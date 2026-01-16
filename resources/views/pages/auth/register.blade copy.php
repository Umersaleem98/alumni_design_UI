@include('layouts.templates.head')
<title>Index</title>
<style>
    .custom-shadow {
        box-shadow: 0 0 5px 2px rgba(0, 123, 255, 0.5);
    }

    .strength-msg {
        font-size: 0.9rem;
        margin-top: 5px;
    }

    .weak {
        color: red;
    }

    .medium {
        color: orange;
    }

    .strong {
        color: green;
    }

    .eye-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        cursor: pointer;
        z-index: 10;
    }

    input[type="password"].pe-5 {
        padding-right: 2.5rem !important;
    }

    select:disabled {
        background-color: #e9ecef;
        cursor: not-allowed;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }

    .profile-preview-container {
        background-color: #007bff1a;
        border: 2px solid #007bff;
        border-radius: 15px;
        padding: 15px;
    }

    #photoPreview {
        max-width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #007bff;
        background-color: #007bff;
        object-fit: cover;
    }

    .transcript-warning {
        color: #b30000;
        font-size: 0.9rem;
        margin-top: 6px;
    }

    .optional-field {
        display: none;
    }
</style>

<body>

    {{-- @include('layouts.templates.topbar') --}}
    @include('layouts.templates.header')



    {{-- <section class="banner-section text-center">
        <div class="container-fluid">
            <img src="{{ asset('templates/img/Alumnustregisteration.gif') }}" alt="Team Banner" class="img-fluid mb-4"
                style="height:180px;">
        </div>
    </section> --}}

    {{-- Success message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Error message (session) --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <div class="progress mb-4" style="height: 20px;">
            <div id="progressBar" class="progress-bar bg-danger" role="progressbar" style="width: 20%;"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                20%
            </div>
        </div>

        <h3 class="mb-4 text-center text-danger">AlumNUST Registration</h3>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form id="multiStepForm" action="{{ url('auth/register') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Step 1 -->
                    <div class="step" id="step1">
                        <h5 class="text-danger mb-3">Step 1: Personal Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Name *</label>
                                <input type="text" name="name" class="form-control custom-shadow"
                                    placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark">CNIC *</label>
                                <input type="number" name="cnic" class="form-control custom-shadow"
                                    placeholder="Enter your CNIC without dashes" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Email *</label>
                                <input type="email" name="email" class="form-control custom-shadow"
                                    placeholder="Enter your email address" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark">Mobile No *</label>
                                <div class="input-group custom-shadow">
                                    <select name="country_code" class="form-select" style="max-width: 120px;" required>
                                        <option value="+92" selected>+92 (PK)</option>
                                        <option value="+1">+1 (US)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+971">+971 (UAE)</option>
                                        <option value="+61">+61 (AUS)</option>
                                        <option value="+91">+91 (IN)</option>
                                    </select>
                                    <input type="tel" name="mobile_no" class="form-control" placeholder="3001234567"
                                        required pattern="[0-9]{7,15}">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger float-end" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 2 -->
                    <div class="step d-none" id="step2">
                        <h5 class="text-danger mb-3">Step 2: Account Security</h5>
                        <div class="row mb-3">
                            <div class="col-md-6 position-relative">
                                <label class="form-label text-dark">Password *</label>
                                <div class="input-group custom-shadow">
                                    <input type="password" class="form-control pe-5" name="password" id="password"
                                        placeholder="Create a strong password" required
                                        oninput="checkStrength(this.value); checkMatch();">
                                    <span class="eye-icon" onclick="togglePassword('password', 'toggleIcon')">
                                        <i id="toggleIcon" class="fas fa-eye text-secondary"></i>
                                    </span>
                                </div>
                                <div id="strengthMessage" class="strength-msg"></div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <label class="form-label text-dark">Confirm Password *</label>
                                <div class="input-group custom-shadow">
                                    <input type="password" class="form-control pe-5" name="password_confirmation"
                                        id="confirm_password" placeholder="Re-enter password" required
                                        oninput="checkMatch();">
                                    <span class="eye-icon"
                                        onclick="togglePassword('confirm_password', 'toggleIconConfirm')">
                                        <i id="toggleIconConfirm" class="fas fa-eye text-secondary"></i>
                                    </span>
                                </div>
                                <div id="matchMessage" class="strength-msg"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" id="nextStep2Btn" class="btn btn-danger float-end"
                            onclick="nextStep()" disabled>Next</button>
                    </div>

                    <!-- Step 3 -->
                    <div class="step d-none" id="step3">
                        <h5 class="text-danger mb-3">Step 3: Professional Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Current Organization *</label>
                                <input type="text" name="current_organization" class="form-control custom-shadow"
                                    placeholder="Enter your current organization" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark">Designation *</label>
                                <select name="current_designation" id="current_designation"
                                    class="form-select custom-shadow" required>
                                    <option disabled selected>--Select--</option>
                                    <option>Manager</option>
                                    <option>Engineer</option>
                                    <option>Student</option>
                                    <option>Other</option>
                                </select>
                                <input type="text" name="other_designation"
                                    class="form-control mt-2 optional-field custom-shadow"
                                    id="other_designation_input" placeholder="Enter your designation">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">Country *</label>
                                <select name="current_country" id="current_country" class="form-select custom-shadow"
                                    required>
                                    <option disabled selected value="">--Select--</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark">City *</label>
                                <select name="current_city" id="current_city" class="form-select custom-shadow"
                                    required disabled>
                                    <option disabled selected value="">--Select--</option>
                                    <option>Islamabad</option>
                                    <option>Lahore</option>
                                    <option>Karachi</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-danger float-end" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 4 -->
                    <div class="step d-none" id="step4">
                        <h5 class="text-danger mb-3">Step 4: Academic Background</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-dark">School/College *</label>
                                <select name="school_college_institution" class="form-select custom-shadow" required>
                                    <option disabled selected>--Select--</option>
                                    <option>SEECS</option>
                                    <option>SMME</option>
                                    <option>CAER</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-dark">Graduation Year *</label>
                                <div class="d-flex gap-2">
                                    <select name="graduation_start_year" id="start_year"
                                        class="form-select custom-shadow" required>
                                        <option disabled selected>Start Year</option>
                                        @for ($year = date('Y'); $year >= 1990; $year--)
                                            <option>{{ $year }}</option>
                                        @endfor
                                    </select>
                                    <select name="graduation_end_year" id="end_year"
                                        class="form-select custom-shadow" required disabled>
                                        <option disabled selected>End Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 text-center">
                                <label class="form-label text-dark">Profile Photo *</label>
                                <div class="profile-preview-container">
                                    <input type="file" name="profile_picture" id="profile_picture"
                                        class="form-control custom-shadow" accept="image/*" required
                                        onchange="previewProfilePhoto(event)">
                                    <div class="mt-3">
                                        <img id="photoPreview" src="#" alt="Profile Preview" class="d-none">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-dark">Attach Transcript/Degree *</label>
                                <input type="file" name="transcript" class="form-control custom-shadow"
                                    accept=".pdf,.jpg,.jpeg,.png" required>
                                <div class="transcript-warning">
                                    ⚠️ If you do not attach your Transcript/Degree, your account will not be
                                    verified.<br>
                                    For help, email: <a href="mailto:info@alumni.nust.edu.pk"
                                        class="text-decoration-none text-primary">info@alumni.nust.edu.pk</a>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary" onclick="prevStep()">Back</button>
                        <button type="button" class="btn btn-danger float-end" onclick="nextStep()">Next</button>
                    </div>

                    <!-- Step 5 -->
                    <div class="step d-none" id="step5">
                        <h5 class="text-danger mb-3">Step 5: Agreement & Submit</h5>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termsCheckbox" name="terms_agreed"
                                required>
                            <label class="form-check-label text-dark">
                                I agree to the <a href="#">Terms & Conditions</a> of NUST Alumni Connect
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary me-2" onclick="prevStep()">Back</button>
                            <button type="submit" class="btn btn-danger">Submit Information</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script>
        let currentStep = 1;

        function showStep(step) {
            document.querySelectorAll('.step').forEach(div => div.classList.add('d-none'));
            document.getElementById(`step${step}`).classList.remove('d-none');
        }

        function updateProgressBar(step) {
            const progressBar = document.getElementById("progressBar");
            const percentage = (step / 5) * 100;
            progressBar.style.width = percentage + "%";
            progressBar.textContent = `${Math.round(percentage)}%`;
        }

        function nextStep() {
            if (currentStep === 2) {
                const nextBtn = document.getElementById('nextStep2Btn');
                if (nextBtn.disabled) {
                    alert('Please enter a valid password before proceeding.');
                    return;
                }
            }
            if (currentStep < 5) {
                currentStep++;
                showStep(currentStep);
                updateProgressBar(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
                updateProgressBar(currentStep);
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            showStep(currentStep);
            updateProgressBar(currentStep);

            const countrySelect = document.getElementById('current_country');
            const citySelect = document.getElementById('current_city');
            countrySelect.addEventListener('change', () => {
                citySelect.disabled = (countrySelect.value !== 'Pakistan');
            });

            const designationSelect = document.getElementById('current_designation');
            const otherDesignation = document.getElementById('other_designation_input');
            designationSelect.addEventListener('change', () => {
                if (designationSelect.value === 'Other') {
                    otherDesignation.style.display = 'block';
                    otherDesignation.required = true;
                } else {
                    otherDesignation.style.display = 'none';
                    otherDesignation.required = false;
                    otherDesignation.value = '';
                }
            });

            // Hide "Other" input on page load if not selected
            if (designationSelect.value !== 'Other') {
                otherDesignation.style.display = 'none';
                otherDesignation.required = false;
                otherDesignation.value = '';
            }

            const startYear = document.getElementById('start_year');
            const endYear = document.getElementById('end_year');
            startYear.addEventListener('change', () => {
                const selectedStart = parseInt(startYear.value);
                endYear.innerHTML = '<option disabled selected>End Year</option>';
                for (let y = selectedStart; y <= new Date().getFullYear(); y++) {
                    const opt = document.createElement('option');
                    opt.textContent = y;
                    endYear.appendChild(opt);
                }
                endYear.disabled = false;
            });

            // Form submit handler to swap designation value if "Other" is selected
            document.getElementById('multiStepForm').addEventListener('submit', function(e) {
                if (designationSelect.value === 'Other') {
                    if (!otherDesignation.value.trim()) {
                        e.preventDefault();
                        alert('Please enter your designation.');
                        otherDesignation.focus();
                        return false;
                    }
                    // Disable the select so its value won't be sent
                    designationSelect.disabled = true;

                    // Add a hidden input with the other designation value to send instead
                    let hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'current_designation';
                    hiddenInput.value = otherDesignation.value.trim();
                    this.appendChild(hiddenInput);
                }
            });
        });

        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }

        function checkStrength(password) {
            const msg = document.getElementById("strengthMessage");
            const nextBtn = document.getElementById("nextStep2Btn");
            const confirmPass = document.getElementById("confirm_password").value;

            const hasUppercase = /[A-Z]/.test(password);
            const hasNumber = /\d/.test(password);
            const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
            const minLength = password.length >= 8;
            const passwordsMatch = password && confirmPass && password === confirmPass;

            if (!password) {
                msg.textContent = "";
                nextBtn.disabled = true;
                return;
            }

            if (hasUppercase && hasNumber && hasSpecial && minLength && passwordsMatch) {
                msg.textContent = "✅ Strong password format met and passwords match!";
                msg.className = "strength-msg strong";
                nextBtn.disabled = false;
            } else {
                msg.textContent =
                    "❌ Must contain at least 1 uppercase, 1 number, 1 special character, and be at least 8 characters. Also ensure both passwords match.";
                msg.className = "strength-msg weak";
                nextBtn.disabled = true;
            }
        }

        function checkMatch() {
            const password = document.getElementById("password").value;
            const confirm = document.getElementById("confirm_password").value;
            const msg = document.getElementById("matchMessage");
            const nextBtn = document.getElementById("nextStep2Btn");

            if (!confirm) {
                msg.textContent = '';
                nextBtn.disabled = true;
                return;
            }

            if (password === confirm) {
                msg.textContent = "✅ Passwords match";
                msg.className = "strength-msg strong";
                checkStrength(password);
            } else {
                msg.textContent = "❌ Passwords do not match";
                msg.className = "strength-msg weak";
                nextBtn.disabled = true;
            }
        }

        function previewProfilePhoto(event) {
            const input = event.target;
            const preview = document.getElementById("photoPreview");

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = "#";
                preview.classList.add('d-none');
            }
        }
    </script>
    @include('layouts.templates.footer')

    @include('layouts.templates.script')
