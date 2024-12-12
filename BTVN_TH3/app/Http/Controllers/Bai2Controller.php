<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Renter;
use Illuminate\Support\Facades\DB;

class Bai2Controller extends Controller
{
    public function index()
    {
        // Lấy dữ liệu từ 2 bảng renters và laptops (sử dụng join)
        $data = DB::table('laptops')
            ->leftJoin('renters', 'laptops.renter_id', '=', 'renters.id')
            ->select(
                'renters.name',
                'renters.phone_number as phone',
                'renters.email',
                'laptops.brand',
                'laptops.model',
                'laptops.rental_status'
            )
            ->get();

        // Truyền dữ liệu tới view
        return view('bai2.index', ['data' => $data]);
    }
}
