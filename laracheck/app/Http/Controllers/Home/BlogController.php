<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Carbon;
use Image;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $blog = Blog::latest()->get();
        return view('admin.blogs.blog_all',compact('blog'));
    }

    public function AddBlog()
    {
        return view('admin.blogs.blog_add');
    }
}
