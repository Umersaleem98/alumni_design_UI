@include('layouts.templates.head')
<title>Register</title>

<style>
    body {
        background: #00253D;
    }

    /* ===== Step Indicator ===== */
    .stepper {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    .stepper-item {
        text-align: center;
        flex: 1;
        position: relative;
    }

    .stepper-item::after {
        content: '';
        position: absolute;
        top: 20px;
        left: 50%;
        width: 100%;
        height: 2px;
        background: #e0e0e0;
        z-index: 0;
    }

    .stepper-item:last-child::after {
        display: none;
    }

    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e0e0e0;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        z-index: 1;
        position: relative;
    }

    .stepper-item.active .step-circle {
        background: #800000;
        color: #fff;
    }

    .step-label {
        margin-top: 8px;
        font-size: 14px;
        font-weight: 500;
    }

    /* ===== Steps ===== */
    .step {
        display: none;
    }

    .step.active {
        display: block;
    }
</style>

<body>

    @include('layouts.templates.header')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <!-- ===== STEPPER ===== -->
                <div class="stepper">
                    <div class="stepper-item active">
                        <div class="step-circle">1</div>
                        <div class="step-label">Personal</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-circle">2</div>
                        <div class="step-label">Education</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-circle">3</div>
                        <div class="step-label">Professional</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-circle">4</div>
                        <div class="step-label">Security</div>
                    </div>
                </div>

                <!-- ===== FORM CARD ===== -->
                <div class="card shadow-sm border-0">
                    <div class="card-body">

                        <form method="POST" action="#">
                            @csrf

                            <!-- ================= STEP 1 ================= -->
                            <div class="step active">
                                <h5 class="mb-3">Personal Information</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Full Name"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="CNIC / Passport No"></div>
                                    <div class="col-md-6 mb-3"><input type="email" class="form-control"
                                            placeholder="Personal Email"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Mobile Number"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Current Country"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Current City"></div>
                                </div>

                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>

                            <!-- ================= STEP 2 ================= -->
                            <div class="step">
                                <h5 class="mb-3">Education</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="NUST Registration Number"></div>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-select">
                                            <option>Degree Level</option>
                                            <option>Bachelors</option>
                                            <option>Masters</option>
                                            <option>PhD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="School"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Discipline"></div>
                                    <div class="col-md-6 mb-3"><input type="number" class="form-control"
                                            placeholder="Enrolment Year"></div>
                                    <div class="col-md-6 mb-3"><input type="number" class="form-control"
                                            placeholder="Graduation Year"></div>
                                </div>

                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>

                            <!-- ================= STEP 3 ================= -->
                            <div class="step">
                                <h5 class="mb-3">Professional</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <select id="currentStatus" class="form-select">
                                            <option value="">Current Status</option>
                                            <option value="employed">Employed</option>
                                            <option value="self">Self Employed</option>
                                            <option value="unemployed">Not Currently Employed</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Conditional Fields -->
                                <div class="row d-none" id="employmentFields">
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Organization"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Industry"></div>
                                    <div class="col-md-6 mb-3"><input type="text" class="form-control"
                                            placeholder="Designation"></div>
                                </div>

                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>

                            <!-- ================= STEP 4 ================= -->
                            <div class="step">
                                <h5 class="mb-3">Security</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3"><input type="password" class="form-control"
                                            placeholder="Password"></div>
                                    <div class="col-md-6 mb-3"><input type="password" class="form-control"
                                            placeholder="Confirm Password"></div>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label class="form-check-label">
                                        I agree to the Terms & Conditions
                                    </label>
                                </div>

                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="submit" class="btn btn-warning">Register</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.templates.footer')
    @include('layouts.templates.script')

    <script>
        const steps = document.querySelectorAll('.step');
        const stepperItems = document.querySelectorAll('.stepper-item');
        let currentStep = 0;

        function showStep(index) {
            steps.forEach(step => step.classList.remove('active'));
            stepperItems.forEach(item => item.classList.remove('active'));
            steps[index].classList.add('active');
            stepperItems[index].classList.add('active');
        }

        document.querySelectorAll('.next-step').forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        document.querySelectorAll('.prev-step').forEach(btn => {
            btn.addEventListener('click', () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        // ===== Conditional Professional Fields =====
        const statusSelect = document.getElementById('currentStatus');
        const employmentFields = document.getElementById('employmentFields');

        statusSelect.addEventListener('change', function() {
            if (this.value === 'employed' || this.value === 'self') {
                employmentFields.classList.remove('d-none');
            } else {
                employmentFields.classList.add('d-none');
            }
        });
    </script>

</body>
