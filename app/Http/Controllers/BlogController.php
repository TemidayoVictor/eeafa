<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BlogController extends Controller
{
    //
    use ValidatesRequests;

    public function blog() {
        return view('admin.blog', [
            'active' => 'admblog',
            'admin' => true,
            'type' => 'create',
        ]);
    }

    public function blogPost(Request $request) {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
            'title' => 'required',
            'body' =>  'required',
        ]);

        if(!empty($request->image)) {
            $imageFile = time(). '.' . $request->image->extension();

            $request->image->move(public_path('blogimages'), $imageFile);
            $imagePath = url('blogimages/' . $imageFile);
        }

        else {
            $imagePath = '';
        }

        Blog::create([
            'image' => $imagePath,
            'title' => $request->title,
            'body' => $request->body,
            'status' => 'Active',
        ]);

        return back()->with('status', 'Blog Created Successfully');
    }

    public function blogAll() {
        $blogs = Blog::where('status', 'Active')->orderBy('id', 'desc')->get();
        return view('admin.blog-all', [
            'active' => 'admblog',
            'admin' => true,
            'blogs' => $blogs,
        ]);
    }

    public function blogEdit($id) {
        $blog = Blog::where('id', $id)->first();
        return view('admin.blog', [
            'active' => 'admblog',
            'admin' => true,
            'blog' => $blog,
            'type' => 'edit',
        ]);
    }

    public function blogEditPost(Request $request, $id) {
        $blog = Blog::where('id', $id)->first();
        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,webp',
            'title' => 'required',
            'body' =>  'required',
        ]);

        if(!empty($request->image)) {
            $imageFile = time(). '.' . $request->image->extension();

            $request->image->move(public_path('blogimages'), $imageFile);
            $imagePath = url('blogimages/' . $imageFile);
        }

        else {
            $imagePath = $blog->image;
        }

        $updateBlog = Blog::where('id', $id)
        ->update([
            'image' => $imagePath,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('admblog')->with('status', "Article Edited Successfully");
    }

    public function blogDeletePost($id) {
        $deleteBlog = Blog::where('id', $id)
        ->update([
            'status' => 'Inactive',
        ]);

        return redirect()->route('admblogAll')->with('status', "Article Deleted Successfully");
    }
}
