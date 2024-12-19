<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Issue;
use Illuminate\Support\Facades\DB;

class Bai3Controller extends Controller
{
    public function index()
    {
        $data = DB::table('issues')
            ->leftJoin('computers', 'issues.computer_id', '=', 'computers.id')
            ->select(
                'issues.reported_by',
                'issues.reported_date',
                'issues.description',
                'issues.urgency',
                'computers.computer_name',
            )
            ->get();
        return view('bai3.index', compact('data'));
    }
}
