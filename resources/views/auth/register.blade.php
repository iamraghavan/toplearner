<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Top Learner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #DAE3E5; /* Gainsboro */
            color: #04080F; /* Rich Black FOGRA 29 */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .container-main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        .register-card {
            background-color: #FFFFFF;
            border-radius: 8px;
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            border: 1px solid #BBD1EA; /* Light Steel Blue */
        }
        .btn-primary {
            background-color: #507DBC; /* Glaucous */
            border-color: #507DBC;
            border-radius: 4px;
            padding: 0.75rem;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #4169A3;
            border-color: #4169A3;
        }
        .btn-google {
            background-color: #FFFFFF;
            border: 1px solid #DADCE0; /* Google border color */
            border-radius: 4px;
            padding: 0.75rem;
            font-weight: 500;
            color: #3C4043; /* Google text color */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-google:hover {
            background-color: #F8F9FA;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        }
        .btn-google img {
            width: 18px;
            height: 18px;
        }
        .form-control {
            border: 1px solid #BBD1EA; /* Light Steel Blue */
            border-radius: 4px;
            padding: 0.75rem;
            transition: border-color 0.2s ease;
        }
        .form-control:focus {
            border-color: #507DBC; /* Glaucous */
            box-shadow: none;
        }
        .alert-success {
            background-color: #A1C6EA; /* Baby Blue Eyes */
            color: #04080F;
            border: none;
            border-radius: 4px;
            padding: 1rem;
            opacity: 0;
            animation: fadeIn 0.5s ease-in-out forwards;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: none;
            border-radius: 4px;
            padding: 1rem;
            opacity: 0;
            animation: fadeIn 0.5s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .form-label {
            font-weight: 500;
            color: #04080F;
        }
        .link-primary {
            color: #507DBC; /* Glaucous */
            text-decoration: none;
            font-weight: 500;
        }
        .link-primary:hover {
            color: #4169A3;
            text-decoration: underline;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
            color: #6c757d;
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #BBD1EA;
        }
        .divider span {
            padding: 0 10px;
            font-size: 0.875rem;
        }
        .footer {
            background-color: #BBD1EA; /* Light Steel Blue */
            color: #04080F;
            text-align: center;
            padding: 1rem;
            font-size: 0.875rem;
        }
        @media (max-width: 576px) {
            .register-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Body -->
    <div class="container-main">
        <div class="register-card">
            <h2 class="mb-4 text-center">Register</h2>

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        required
                        autofocus
                    />
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        required
                    />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                        autocomplete="new-password"
                    />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control"
                        required
                        autocomplete="new-password"
                    />
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>

                <p class="mt-3 text-center">
                    Already have an account?
                    <a href="{{ route('login') }}" class="link-primary">Login here</a>
                </p>
            </form>

            <div class="divider"><span>or</span></div>

            <!-- Google Login Button -->
            <a href="{{ route('google.login') }}" class="btn btn-google w-100 mb-3">
                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo">
                Sign up with Google
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        Developed by Raghavan | App Version 1.0.0
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
