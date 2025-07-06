<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aluna Theater</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d1b2a;
            color: white;
        }

        .navbar {
            background-color: #1b263b;
        }

        .navbar .nav-link,
        .navbar-brand {
            color: white !important;
        }

        .card {
            background-color: #1b263b;
            border: 1px solid #415a77;
        }

        .card-title,
        .card-text {
            color: white;
        }

        .btn-outline-light {
            border-color: #00b4d8;
            color: #00b4d8;
        }

        .btn-outline-light:hover {
            background-color: #00b4d8;
            color: #1b263b;
        }

        .movie-poster {
            height: 350px;
            object-fit: cover;
        }

        .schedule-btn {
            margin: 2px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Aluna Theater</a>
        <div>
            <a class="btn btn-outline-light me-2" href="{{ route('home') }}">Home</a>
            <a class="btn btn-outline-light" href="{{ route('bookings.index') }}">Lihat Daftar Pemesanan</a>
        </div>
    </div>
</nav>

<!-- Banner -->
<div class="container text-center my-4">
    <img src="https://via.placeholder.com/600x300" alt="Banner Theater" class="img-fluid rounded">
    <h2 class="mt-4">Film yang Sedang Tayang</h2>
</div>

<!-- Movie Cards -->
<div class="container">
    <div class="row g-4">
        @php
            $films = [
                [
                    'title' => 'Dilan 1990',
                    'genre' => 'romance',
                    'schedule' => ['13:00', '16:00', '20:00'],
                    'image' => 'dilan1990.jpeg',
                ],
                [
                    'title' => 'Ada Apa Dengan Cinta',
                    'genre' => 'romance',
                    'schedule' => ['12:00', '15:00', '18:00'],
                    'image' => 'aadc.jpeg',
                ],
                [
                    'title' => 'Magic Hour',
                    'genre' => 'romance',
                    'schedule' => ['13:30', '17:00'],
                    'image' => 'magichour.jpeg',
                ],
                [
                    'title' => 'Laskar Pelangi',
                    'genre' => 'drama',
                    'schedule' => ['14:00', '19:00'],
                    'image' => 'laskarpelangi.jpeg',
                ],
                [
                    'title' => 'Nanti Kita Cerita Tentang Hari Ini',
                    'genre' => 'drama',
                    'schedule' => ['15:00', '20:00'],
                    'image' => 'nkcthi.jpeg',
                ],
                [
                    'title' => 'Pengabdi Setan',
                    'genre' => 'horror',
                    'schedule' => ['21:00', '23:00'],
                    'image' => 'pengabdisetan.jpeg',
                ],
                [
                    'title' => 'Agak Laen',
                    'genre' => 'komedi',
                    'schedule' => ['14:30', '18:30'],
                    'image' => 'agaklaen.jpeg',
                ],
                [
                    'title' => 'Miracle in Cell',
                    'genre' => 'drama, komedi',
                    'schedule' => ['16:00', '19:30'],
                    'image' => 'miracleincell.jpeg',
                ],
            ];
        @endphp

        @foreach($films as $film)
            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <img src="{{ asset('images/' . $film['image']) }}" class="card-img-top movie-poster" alt="{{ $film['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film['title'] }}</h5>
                        <p class="card-text">{{ ucfirst($film['genre']) }}</p>
                        <p>Jadwal:</p>
                        @foreach($film['schedule'] as $jam)
                            <a href="{{ route('bookings.create', ['film' => $film['title'], 'jadwal' => $jam]) }}" class="btn btn-outline-light btn-sm schedule-btn">
                                {{ $jam }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
