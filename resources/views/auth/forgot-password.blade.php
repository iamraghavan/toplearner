<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Top Learner</title>
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
        .forgot-password-card {
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
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: none;
            border-radius: 4px;
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
        .footer {
            background-color: #BBD1EA; /* Light Steel Blue */
            color: #04080F;
            text-align: center;
            padding: 1rem;
            font-size: 0.875rem;
        }
        @media (max-width: 576px) {
            .forgot-password-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Body -->
    <div class="container-main">
        <div class="forgot-password-card">
            <h2 class="mb-4 text-center">Forgot Password</h2>

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

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        required
                        autofocus
                    />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>

                <p class="mt-3 text-center">
                    Back to <a href="{{ route('login') }}" class="link-primary">Login</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        Developed by Raghavan | App Version 1.0.0
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
