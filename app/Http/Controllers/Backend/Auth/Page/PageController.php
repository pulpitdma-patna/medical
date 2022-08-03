<?php

namespace App\Http\Controllers\Backend\Auth\Page;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function blank()
    {
        return view('backend.auth.page.blank');
    }

    public function profile()
    {
        return view('backend.auth.page.profile');
    }

    public function profile2()
    {
        return view('backend.auth.page.profile2');
    }

    public function gallery()
    {
        return view('backend.auth.page.gallery');
    }

    public function gallery2()
    {
        return view('backend.auth.page.gallery2');
    }

    public function timeline()
    {
        return view('backend.auth.page.timeline');
    }

    public function timelineH()
    {
        return view('backend.auth.page.timeline_h');
    }

    public function pricing()
    {
        return view('backend.auth.page.pricing');
    }

    public function invoices()
    {
        return view('backend.auth.page.invoices');
    }

    public function invoices2()
    {
        return view('backend.auth.page.invoices2');
    }

    public function results()
    {
        return view('backend.auth.page.results');
    }

    public function helperClass()
    {
        return view('backend.auth.page.helper');
    }

    public function board()
    {
        return view('backend.auth.page.board');
    }

    public function list()
    {
        return view('backend.auth.page.list');
    }

    public function maintenance()
    {
        return view('backend.auth.page.maintenance');
    }

     public function testimonials()
    {
        return view('backend.auth.page.testimonials');
    }

     public function faq()
    {
        return view('backend.auth.page.faq');
    }

}
