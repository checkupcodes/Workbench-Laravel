<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use App\Models\User;

class AdminController extends Controller
{
    public function HomeMain()
    {
        return view('frontend.index');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Profile Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/')->with($notification);
    }

    public function Profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }
    
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_edit_profile', compact('editData'));
    }

    public function StoreProfile(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if($request->file('profile_image')){
            $file = $request->file('profile_image');
            @unlink(public_path('upload/admin_images/'.$data->profile_image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
        };

        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword()
    {
        return view('admin.admin_change_password');
    }
    public function UpdatePassword(Request $request)

    {
        $validateData = $request -> validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->new_password);
            $user->save();
            Auth::logout();
            session()->flash('message', 'Password Changed Successfully');
            return redirect()->route('login');  
        }else
        {
            session()->flash('message', 'Current password does not match');
            return redirect()->back();
        }
    }
}