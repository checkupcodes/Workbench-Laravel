<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Image;
use Illuminate\Http\Request;


class AboutContoller extends Controller
{
    public function AboutPage()
    {
        $aboutPage = About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutPage'));
    }

    public function UploadAbout(Request $request)
    {
        $slide_id= $request->id;
        if($request->file('about_image')){
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(520,600)->save('upload/home_about/'.$name_gen);

            $save_url = 'upload/home_about/'.$name_gen;

            About::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'short_description' => $request->short_description,
                'about_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'About Page Updated Successfully with Image',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            About::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'description' => $request->description,
                'short_description' => $request->short_description,
            ]);
            $notification = array(
                'message' => 'About Page Updated Successfully without Image',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
      
    }
}