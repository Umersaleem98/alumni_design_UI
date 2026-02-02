@include('layouts.templates.head')
<title>Register</title>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    .step {
        display: none;
    }

    .step.active {
        display: block;
    }

    .step-indicator {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #dee2e6;
        color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    .step-indicator.active {
        background: #800000;
        color: #fff;
    }

    .form-control-sm {
  border-color: #ffc107;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
}

.form-control-sm:focus {
  border-color: #ffca2c;
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
}
.form-control-sm {
  border-radius: 8px;
}

    
</style>

<body>
    @include('layouts.templates.header')

    <div class="container min-vh-100 d-flex align-items-center justify-content-center p-2">
        <div class="card shadow w-100 " style="max-width: 900px; background: #01273E">
            <div class="card-body p-4">

                <!-- Step Numbers -->
                <div class="d-flex justify-content-between mb-3">
                    <div class="step-indicator active">1</div>
                    <div class="step-indicator">2</div>
                    <div class="step-indicator">3</div>
                    <div class="step-indicator">4</div>
                </div>

                <!-- Progress Bar -->
                <div class="progress mb-4" style="height: 20px;">
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" id="progressBar"
                        style="width: 0%">
                        0%
                    </div>
                </div>

                <div class="row align-items-center">

                    <!-- Left Image -->
                    <div class="col-md-5 text-center mb-3 mb-md-0">
                        <img id="stepImage" src="{{ asset('templates/img/register/a.jpeg') }}"
                            class="img-fluid animate__animated" alt="Step Image">
                    </div>

                    <!-- Right Form -->
                    <div class="col-md-7">

                        <!-- START -->
                        <div class="step active animate__animated">
                            <h4 class="mb-3 text-light">Welcome</h4>
                            <p class="text-light">Click start to begin the process</p>
                            <p class="text-light">If you already registered, login</p>
                            <a href="{{ route('login.index') }}" class="btn btn-info btn-sm">Login</a>
                            <button class="btn btn-warning btn-sm" onclick="nextStep()">Start</button>
                        </div>

                        <!-- STEP 1 -->
                        <div class="step animate__animated">
                            <h4 class="mb-5 text-light">Personal Information</h4>
                            <div class="row">
                               @include('pages.auth.components.personal')
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class=" btn-sm btn btn-secondary" onclick="prevStep()">Back</button>
                                <button class=" btn-sm btn btn-warning" onclick="nextStep()">Next</button>
                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="step animate__animated">
                            <h4 class="mb-3">Step 2</h4>
                            <div class="row">
                               @include('pages.auth.components.education')
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class=" btn-sm btn btn-secondary" onclick="prevStep()">Back</button>
                                <button class=" btn-sm btn btn-warning" onclick="nextStep()">Next</button>
                            </div>
                        </div>

                        <!-- STEP 3 -->
                        <div class="step animate__animated">
                            <h4 class="mb-3">Step 3</h4>
                            <div class="row">
                               @include('pages.auth.components.professional')
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class=" btn-sm btn btn-secondary" onclick="prevStep()">Back</button>
                                <button class=" btn-sm btn btn-warning" onclick="nextStep()">Next</button>
                            </div>
                        </div>

                        <!-- STEP 4 -->
                        <div class="step animate__animated">
                            <h4 class="mb-3">Step 4</h4>
                           <div class="row">
                               @include('pages.auth.components.secuity')
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class=" btn-sm btn btn-secondary" onclick="prevStep()">Back</button>
                                <button class=" btn-sm btn btn-warning" onclick="finishForm()">Finish</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SUCCESS MODAL -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4 animate__animated animate__zoomIn">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center"
                            style="width: 80px; height: 80px; font-size: 40px;">
                            ✓
                        </div>
                    </div>
                    <h4 class="mb-2">Form Submitted Successfully!</h4>
                    <p class="text-muted">
                        Thank you for completing the form.<br>
                        We will contact you shortly.
                    </p>
                    <button class="btn btn-warning mt-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        let direction = 'next';

        const steps = document.querySelectorAll('.step');
        const indicators = document.querySelectorAll('.step-indicator');
        const progressBar = document.getElementById('progressBar');
        const stepImage = document.getElementById('stepImage');

        const images = [
            "{{ asset('templates/img/degreee.jpeg') }}",
            "{{ asset('templates/img/register/a.jpeg') }}",
            "{{ asset('templates/img/register/b.jpeg') }}",
            "{{ asset('templates/img/register/c.jpeg') }}",
            "{{ asset('templates/img/register/d.jpeg') }}"
        ];

        function showStep(step) {
            steps.forEach((el, index) => {
                el.classList.remove('animate__fadeInRight', 'animate__fadeInLeft');
                el.classList.toggle('active', index === step);

                if (index === step) {
                    el.classList.add(direction === 'next' ?
                        'animate__fadeInRight' :
                        'animate__fadeInLeft');
                }

                indicators[index]?.classList.toggle('active', index <= step);
            });

            let percentage = Math.round((step / (steps.length - 1)) * 100);
            progressBar.style.width = percentage + '%';
            progressBar.innerText = percentage + '%';

            stepImage.classList.remove('animate__fadeIn');
            void stepImage.offsetWidth; // restart animation
            stepImage.src = images[step];
            stepImage.classList.add('animate__fadeIn');
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                direction = 'next';
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                direction = 'back';
                currentStep--;
                showStep(currentStep);
            }
        }

        function finishForm() {
            setTimeout(() => {
                const modal = new bootstrap.Modal(
                    document.getElementById('successModal')
                );
                modal.show();
            }, 2500);
        }

        showStep(currentStep);
    </script>

    @include('layouts.templates.script')
