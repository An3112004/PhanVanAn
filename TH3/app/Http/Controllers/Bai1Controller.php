<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Bai1Controller extends Controller
{
    public function index()
    {
        $data = DB::table('sales')
            ->leftJoin('medicines', 'sales.medicine_id', '=', 'medicines.id')
            ->select(
                'medicines.name',
                'medicines.brand',
                'medicines.price',
                'sales.quantity',
                'sales.sale_date',
                'sales.customer_phone'
            )
            ->get();

        return view('bai1.index', compact('data'));
    }
}
