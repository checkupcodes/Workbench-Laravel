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
        return view('admin.blogs.blog_all', compact('blog'));
    }

    public function AddBlog()
    {
        $categories = BlogCategory::orderBy('blog_category_name', 'ASC')->get();
        return view('admin.blogs.blog_add', compact('categories'));
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
        $categories = BlogCategory::orderBy('blog_category_name', 'ASC')->get();
        return view('admin.blogs.blog_edit', compact('blog', 'categories'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;
        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blogs/' . $name_gen);

            $save_url = 'upload/blogs/' . $name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Blog Updated Successfully with Image',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.blog')->with($notification);
        } else {
            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);
            $notification = array(
                'message' => 'Blog Updated Successfully without Image',
                'alert-type' => 'success'
            );
            return Redirect()->route('all.blog')->with($notification);
        }
    }

    public function DeletePortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $image = $portfolio->portfolio_image;
        unlink($image);
        Portfolio::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Portfolio Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $image = $blog->blog_image;
        unlink($image);

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function BlogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        $all_blog = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category_name', 'ASC')->get();
        return view('frontend.blog_details', compact('blog','all_blog','categories'));
    }

    public function CategoryBlog($id)
    {
        $blog_post = Blog::where('blog_category_id', $id)->orderBy('id','DESC')->get();
        $categories = BlogCategory::orderBy('blog_category_name', 'ASC')->get();
        $all_blog = Blog::latest()->limit(5)->get();
        $category_name = BlogCategory::findOrFail($id);

        return view('frontend.category_blog', compact('blog_post','categories','all_blog','category_name'));
    }

    public function HomeBlog()
    {
        $categories = BlogCategory::orderBy('blog_category_name', 'ASC')->get();
        $all_blogs = Blog::latest()->get();
        return view('frontend.blog', compact('all_blogs','categories'));
    }
}