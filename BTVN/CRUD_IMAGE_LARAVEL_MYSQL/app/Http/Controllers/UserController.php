<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('user.index', compact('products'));
    }
}
