<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;
use Image;
class FooterController extends Controller
{
    public function FooterSetup()
    {
        $footer = Footer::first();
        return view('admin.footer.footer_all', compact('footer'));
    }
}
