<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classe;
use Illuminate\Support\Facades\DB;

class Bai2Controller extends Controller
{

    public function index()
    {
        $data = DB::table('students')
            ->leftJoin('classes', 'students.class_id', '=', 'classes.id')
            ->select(
                'students.first_name',
                'students.last_name',
                'students.date_of_birth',
                'classes.room_number',
                'students.parent_phone'
            )
            ->get();
        return view('bai2.index', compact('data'));
    }
}
