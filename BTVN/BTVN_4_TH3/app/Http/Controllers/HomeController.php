<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Cinema;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ 2 bảng cinemas và movies
        $data = DB::table('movies')
            ->leftJoin('cinemas', 'movies.cinema_id', '=', 'cinemas.id')
            ->select(
                'cinemas.name',
                'cinemas.location',
                'cinemas.total_seats',
                'movies.title',
                'movies.director',
                'movies.release_date',
                'movies.duration'
            )
            ->get();

        return view('welcome', ['data' => $data]);
    }
}
