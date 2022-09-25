<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;

class HomeSlideController extends Controller
{
    

    public function HomeSlide()
    {
        $homeSlider = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeSlider'));
    }
}
