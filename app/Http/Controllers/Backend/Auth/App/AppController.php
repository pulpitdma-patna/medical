<?php

namespace App\Http\Controllers\Backend\Auth\App;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function inbox()
    {
        return view('backend.auth.app.inbox');
    }

    public function chat()
    {
        return view('backend.auth.app.chat');
    }

    public function calendar()
    {
        return view('backend.auth.app.calendar');
    }

    public function contact()
    {
        return view('backend.auth.app.contact');
    }

    public function contactGrid()
    {
        return view('backend.auth.app.contact_grid');
    }

    public function taskboard()
    {
        return view('backend.auth.app.taskboard');
    }

    public function blogDashboard()
    {
        return view('backend.auth.app.blog_dashboard');
    }

    public function blogPost()
    {
        return view('backend.auth.app.blog_post');
    }

    public function blogList()
    {
        return view('backend.auth.app.blog_list');
    }

    public function blogDetails()
    {
        return view('backend.auth.app.blog_details');
    }

    public function fileDashboard()
    {
        return view('backend.auth.app.file_dashboard');
    }

    public function fileDocuments()
    {
        return view('backend.auth.app.file_documents');
    }

    public function fileMedia()
    {
        return view('backend.auth.app.file_media');
    }

    public function fileImages()
    {
        return view('backend.auth.app.file_images');
    }
}
