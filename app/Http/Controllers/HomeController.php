<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class HomeController extends Controller
{
    public function index() {
        $all_clothes = Cloth::all();
        // dd($all_clothes);
        return view('clothes', ['all_clothes' => $all_clothes]);
    }
}
