<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNavigationController extends Controller
{
    //
    public function index() {
        return view('admin.applications', [
            'active' => 'applications',
            'admin' => true,
        ]);
    }

    public function applicationView() {
        return view('admin.application-view', [
            'active' => 'applications',
            'admin' => true,
        ]);
    }

    public function mailingList() {
        return view('admin.mailing-list', [
            'active' => 'mailingList',
            'admin' => true,
        ]);
    }

    public function blog() {
        return view('admin.blog', [
            'active' => 'admblog',
            'admin' => true,
        ]);
    }

    public function blogAll() {
        return view('admin.blog-all', [
            'active' => 'admblog',
            'admin' => true,
        ]);
    }

    public function gallery() {
        return view('admin.gallery', [
            'active' => 'admGallery',
            'admin' => true,
        ]);
    }


    public function galleryAll() {
        return view('admin.gallery-all', [
            'active' => 'admGallery',
            'admin' => true,
        ]);
    }

}
