<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        // Gabungkan data film dan jadwalnya di sini
        $films = [
            [
                'title' => 'Dilan 1990',
                'genre' => 'romance',
                'schedule' => ['13:00', '16:00', '20:00'],
                'image' => 'dilan1990.jpeg',  // letakkan gambar di public/images/
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

        return view('films.index', compact('films'));
    }
}