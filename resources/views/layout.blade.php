<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - Best-Cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #2b2d42; /* warna berbeda dari home */
            color: #f8f9fa;
            min-height: 100vh;
        }

        .navbar {
            background-color: #8d99ae;
        }

        .navbar .nav-link,
        .navbar-brand {
            color: white !important;
        }

        .card, .form-control, .table {
            background-color: #3c3f58;
            color: white;
            border: 1px solid #6c757d;
        }

        .btn-primary {
            background-color: #ef233c;
            border: none;
        }

        .btn-primary:hover {
            background-color: #d90429;
        }

        .btn-secondary {
            background-color: #8d99ae;
            border: none;
        }

        .btn-warning {
            background-color: #ffbe0b;
            border: none;
            color: black;
        }

        .btn-danger {
            background-color: #d00000;
            border: none;
        }

        .btn-outline-light {
            border-color: #2d4d70;
            color: #2d4d70;
        }

        .btn-outline-light:hover {
            background-color: #58578d;
            color: white;
        }

        .alert {
            color: black;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Best-Cinema</a>
            <div>
                <a class="btn btn-outline-light me-2" href="{{ route('home') }}">Home</a>
                <a class="btn btn-outline-light" href="{{ route('bookings.index') }}">Pemesanan</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
