<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
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
        $categories = BlogCategory::orderBy('blog_category_name','ASC')->get();
        return view('admin.blogs.blog_add',compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(430, 327)->save('upload/blogs/' . $name_gen);

        $save_url = 'upload/blogs/' . $name_gen;

        Blog::insert([
            'blog_category_id' => $request->blog_category_id,
            'blog_title' => $request->blog_title,
            'blog_tags' => $request->blog_tags,
            'blog_description' => $request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Blog Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category_name','ASC')->get();
        return view('admin.blogs.blog_edit',compact('blog','categories'));
    }
}