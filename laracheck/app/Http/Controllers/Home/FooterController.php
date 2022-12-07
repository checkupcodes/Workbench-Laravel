<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;
class FooterController extends Controller
{
    public function FooterSetup()
    {
        $footer = Footer::first();
        return view('admin.footer.footer_all', compact('footer'));
    }

    public function UpdateFooter(Request $request)
    {
        $footer_id = $request->id;
        Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'copyright' => $request->copyright,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Footer Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
