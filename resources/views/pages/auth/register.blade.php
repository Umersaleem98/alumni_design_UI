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

        {
        font-size: 13px;
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

                        <form id="multiStepForm">

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

                            {{-- STEP 2 --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Personal Information</h6>
                                        <input class="form-control  mb-4" placeholder="Full Name">
                                        <input class="form-control  mb-4" placeholder="Email">
                                        <input class="form-control  mb-4" placeholder="Phone">
                                        <input type="date" class="form-control ">
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 3 --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Education</h6>
                                        <input class="form-control  mb-4" placeholder="Qualification">
                                        <input class="form-control  mb-4" placeholder="Institute">
                                        <input class="form-control  mb-4" placeholder="Passing Year">
                                        <input class="form-control " placeholder="CGPA / Grade">
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}">
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 4 --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-image img-left">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}">
                                    </div>
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Professional</h6>
                                        <input class="form-control  mb-4" placeholder="Profession">
                                        <input class="form-control  mb-4" placeholder="Experience">
                                        <input class="form-control  mb-4" placeholder="Company">
                                        <input class="form-control " placeholder="Location">
                                    </div>
                                </div>
                            </div>

                            {{-- STEP 5 --}}
                            <div class="form-step">
                                <div class="row align-items-center g-4">
                                    <div class="col-md-6 step-form">
                                        <h6 class="mb-3 text-light">Security</h6>
                                        <input type="password" class="form-control  mb-4" placeholder="Password">
                                        <input type="password" class="form-control " placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-6 step-image img-right">
                                        <img src="{{ asset('templates/img/register/a.jpeg') }}">
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

    <script>
        const steps = document.querySelectorAll('.form-step');
        const indicators = document.querySelectorAll('.step-indicator span');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const startBtn = document.getElementById('startBtn');

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
                document.getElementById('multiStepForm').submit();
            }
        };

        prevBtn.onclick = () => {
            currentStep--;
            updateSteps();
        };

        updateSteps();
    </script>

    @include('layouts.templates.footer')
    @include('layouts.templates.script')
