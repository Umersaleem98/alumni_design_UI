@include('layouts.templates.head')
    <style>
        body {
            min-height: 100vh;
            /* background: #0d1b2a; */
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #01273E;
            border-radius: 16px;
            padding: 30px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .form-control-sm {
            border-radius: 8px;
        }

        .btn-login {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card text-light">

        <h4 class="text-center mb-4 text-light">Login</h4>

        <form>

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label text-light">Email Address</label>
                <input type="email" class="form-control form-control-sm" placeholder="Enter email">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label text-light">Password</label>
                <input type="password" class="form-control form-control-sm" placeholder="Enter password">
            </div>

            <!-- Remember Me -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label text-light" for="remember">
                        Remember Me
                    </label>
                </div>

                <a href="#" class="text-info text-decoration-none">Forgot Password?</a>
            </div>

            <!-- Submit -->
            <div class="d-grid">
                <button type="submit" class="btn btn-danger btn-login">
                    Login
                </button>
            </div>

        </form>

        <div class="text-center mt-3">
            <small class="text-light">
                Don’t have an account?
                <a href="{{ route('register.index') }}" class="text-info text-decoration-none">Register</a>
            </small>
        </div>

    </div>
</div>

@include('layouts.templates.script')