<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Cinema;
use Illuminate\Support\Facades\DB;

class Bai4Controller extends Controller
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

        return view('bai4.index', ['data' => $data]);
    }
}
