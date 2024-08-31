<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;
use App\Models\Mailing;
use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Foundation\Validation\ValidatesRequests;

class NavigationController extends Controller
{
    //
    use ValidatesRequests;

    public function index() {
        $articles = Blog::where('status', 'Active')->inRandomOrder()->take(3)->get();
        return view('home', [
            'active' => 'home',
            'admin' => false,
            'articles' => $articles,
        ]);
    }

    public function about() {
        return view('about', [
            'active' => 'about',
            'admin' => false,
        ]);
    }

    public function apply() {
        return view('apply', [
            'active' => 'apply',
            'admin' => false,
        ]);
    }

    public function applyPost(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:applications,email',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            // 'school' => 'required',
            // 'course' => 'required',
            // 'year' => 'required',
            // 'degree' => 'required',
            'cover_letter' => 'required',
            'ssce' => 'required|image|mimes:jpg,png,jpeg,webp|max:4000',
            'certificate' => 'required|image|mimes:jpg,png,jpeg,webp|max:4000',
        ]);

        if(!empty($request->ssce)) {
            $ssceFile = time(). '.' . $request->ssce->extension();

            $request->ssce->move(public_path('ssce'), $ssceFile);
            $sscePath = url('ssce/' . $ssceFile);
        }

        else {
            $sscePath = "";
        }

        if(!empty($request->certificate)) {
            $certFile = time(). '.' . $request->certificate->extension();

            $request->certificate->move(public_path('certifications'), $certFile);
            $certPath = url('certifications/' . $certFile);
        }

        else {
            $certPath = "";
        }

        // create application

        Application::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'school' => 'school',
            'course' => 'course',
            'year' => 'year',
            'degree' => 'degree',
            'ssce' => $sscePath,
            'certificate' => $certPath,
            'cover_letter' => $request->cover_letter,
            'email' => $request->email,
            'status' => 'Unapproved',
        ]);

        return back()->with('status', 'Application Submitted Successfully');
    }

    public function blog() {
        $articles = Blog::where('status', 'Active')->orderBy('id', 'desc')->get();
        return view('blog', [
            'active' => 'blog',
            'admin' => false,
            'articles' => $articles,
        ]);
    }

    public function blogView($id) {
        $data = Blog::where('status', 'Active')->where('id', $id)->orderBy('id', 'desc')->first();
        $article = Blog::where('status', 'Active')->inRandomOrder()->first();
        if($data) {
            return view('blog-view', [
                'active' => 'blog',
                'admin' => false,
                'data' => $data,
                'article' => $article,
            ]);
        }
        else {
            return back();
        }
    }

    public function gallery() {
        $gallery = Gallery::where('status', 'Active')->with('galleryasset')->orderBy('id', 'desc')->get();
        $article = Blog::where('status', 'Active')->inRandomOrder()->first();
        return view('gallery', [
            'active' => 'gallery',
            'admin' => false,
            'gallery' => $gallery,
            'article' => $article,
        ]);
    }

    public function galleryView($id) {
        $gallery = Gallery::where('status', 'Active')->where('id', $id)->with('galleryasset')->orderBy('id', 'desc')->first();
        $article = Blog::where('status', 'Active')->inRandomOrder()->first();
        if($gallery) {
            return view('gallery-view', [
                'active' => 'gallery',
                'admin' => false,
                'data' => $gallery,
                'article' => $article,
            ]);
        }

        else {
            return back();
        }
    }

    public function mailingPost(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        // check if user has subscribed before

        $check = Mailing::where('email', $request->email)->first();
        if($check) {
            return back()->with('mailStatus', 'Thank you for Subscribing');
        }

        else {
            Mailing::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
            ]);
    
            return back()->with('mailStatus', 'Thank you for Subscribing');
        }

    }

    public function criteria(Request $request) {
        $this->validate($request, [
            'jamb' => 'required',
            'indigene' => 'required',
        ]);

        $jamb = $request->jamb;
        $indigene = $request->indigene;

        if($jamb == 'yes' && $indigene == 'yes') {
            return redirect()->route('apply');
        }

        else {
            return back()->with('applyStatus', 'true');
        }
    }

}
