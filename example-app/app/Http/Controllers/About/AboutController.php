<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        return "Merhaba user";
    }

    public function about(){
        return view('about', ['name' => 'Cekap']);
    }
}