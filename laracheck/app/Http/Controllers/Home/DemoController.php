<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class DemoController extends Controller
{
    public function Home()
    {
        return view('frontend.index');
    }

    public function NotFound()
    {
        return view('frontend.404');
    }
}
