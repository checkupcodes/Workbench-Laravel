<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Carbon;
use Image;

class PortfolioController extends Controller
{
    public function AllPortfolio()
    {
        $portfolio = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all',compact('portfolio'));
    }

    public function AddPortfolio()
    {
        return view('admin.portfolio.portfolio_add');
    }

    public function StorePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_image' => 'required',

        ],[
            'portfolio_name.required' => 'Input Portfolio Name',
            'portfolio_title.required' => 'Input Portfolio Title',
        ]);


        $image = $request->file('portfolio_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1020,519)->save('upload/portfolio_images/'.$name_gen);

            $save_url = 'upload/portfolio_images/'.$name_gen;

            Portfolio::insert([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_title' => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Portfolio Inserted Successfully with Image',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.portfolio')->with($notification);
        
        
    }
}