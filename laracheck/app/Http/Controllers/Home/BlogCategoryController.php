<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Carbon;


class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {
        $blog_category = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all',compact('blog_category'));
    }

    public function AddBlogCategory()
    {
        return view('admin.blog_category.blog_category_add');
    }

    public function StoreBlogCategory(Request $request)
    {
        $request->validate([
            'blog_category_name' => 'required',
        ],[
            'blog_category_name.required' => 'Input Blog Category Name',
        ]);

        BlogCategory::insert([
            'blog_category_name' => $request->blog_category_name,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.blog.category')->with($notification);
    }

    public function EditBlogCategory($id)
    {
        $blog_category = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit',compact('blog_category'));
    }

    public function UpdateBlogCategory(Request $request,$id)
    {
        BlogCategory::findOrFail($id)->update([
            'blog_category_name' => $request->blog_category_name,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('all.blog.category')->with($notification);
    }

    public function DeleteBlogCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
