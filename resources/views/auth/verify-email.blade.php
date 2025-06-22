<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email - Top Learner</title>
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
        .verify-email-card {
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
        .btn-link {
            color: #507DBC; /* Glaucous */
            text-decoration: none;
            font-weight: 500;
        }
        .btn-link:hover {
            color: #4169A3;
            text-decoration: underline;
        }
        .alert-success {
            background-color: #A1C6EA; /* Baby Blue Eyes */
            color: #04080F;
            border: none;
            border-radius: 4px;
        }
        .text-muted {
            color: #6c757d;
        }
        .footer {
            background-color: #BBD1EA; /* Light Steel Blue */
            color: #04080F;
            text-align: center;
            padding: 1rem;
            font-size: 0.875rem;
        }
        @media (max-width: 576px) {
            .verify-email-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Body -->
    <div class="container-main">
        <div class="verify-email-card">
            <h2 class="mb-4 text-center">Verify Your Email Address</h2>
            <p class="text-muted text-center mb-4">
                Thanks for signing up! Before getting started, please verify your email address by clicking the link we sent to your inbox.
            </p>

             @if (session('status') === 'verification-link-sent')
                <div class="alert alert-success mb-4 text-center">
                    <strong>Success!</strong> A new verification link has been sent to your email address.
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" class="d-flex justify-content-center mb-4">
                @csrf
                <button type="submit" class="btn btn-primary w-100">Resend Verification Email</button>
            </form>

            <div class="text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link">Log Out</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        Developed by Raghavan | App Version 1.0.0
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
