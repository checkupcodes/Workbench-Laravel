<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;

class HomeSlideController extends Controller
{
    

    public function HomeSlide()
    {
        $homeSlider = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeSlider'));
    }

    public function UploadSlide(Request $request)
    {
        $slide_id= $request->id;
        if($request->file('home_slide')){
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800,800)->save('upload/home_slider/'.$name_gen);

            $save_url = 'upload/home_slider/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]);
            $notification = array(
                'message' => 'Home Slide Updated Successfully with Image',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'video_url' => $request->video_url,
            ]);
            $notification = array(
                'message' => 'Home Slide Updated Successfully without Image',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
      
    }
}