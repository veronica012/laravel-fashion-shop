<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class HomeController extends Controller
{
    public function index() {
        $all_clothes = Cloth::all();
        $data = [
            'clothes_list' => $all_clothes
        ];
        return view('clothes')->with($data);
    }
}
