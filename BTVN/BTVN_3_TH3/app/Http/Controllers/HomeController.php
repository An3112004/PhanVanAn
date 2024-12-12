<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\It_center;
use App\Models\Hardware_device;

class HomeController extends Controller
{
    public function index()
    {
        $data = DB::table('hardware_devices')
            ->leftJoin('it_centers', 'hardware_devices.center_id', '=', 'it_centers.id')
            ->select(
                'it_centers.name',
                'it_centers.location',
                'it_centers.contact_email',
                'hardware_devices.device_name',
                'hardware_devices.type',
                'hardware_devices.status'
            )
            ->get();

        return view('welcome', ['data' => $data]);
    }
}
