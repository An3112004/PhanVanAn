<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class Bai1Controller extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ bảng libraries và books (sử dụng join)
        $data = Library::join('books', 'libraries.id', '=', 'books.library_id')
            ->select(
                'libraries.name as library_name',
                'books.title',
                'books.genre',
                'libraries.address',
                'libraries.contact_number'
            )
            ->get();

        // Truyền dữ liệu cho view
        return view('bai1.index', compact('data'));
    }
}
