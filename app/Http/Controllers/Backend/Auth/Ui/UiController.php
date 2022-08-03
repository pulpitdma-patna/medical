<?php

namespace App\Http\Controllers\Backend\Auth\Ui;

use App\Http\Controllers\Controller;

class UiController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function typoGraphy()
    {
        return view('backend.auth.ui.typography');
    }

    public function tabs()
    {
        return view('backend.auth.ui.tabs');
    }

    public function buttons()
    {
        return view('backend.auth.ui.buttons');
    }

    public function bootstrap()
    {
        return view('backend.auth.ui.bootstrap');
    }

    public function icons()
    {
        return view('backend.auth.ui.icons');
    }
		
    public function notifications()
    {
        return view('backend.auth.ui.notifications');
    }

    public function colors()
    {
        return view('backend.auth.ui.colors');
    }

    public function dialogs()
    {
        return view('backend.auth.ui.dialogs');
    }

    public function listGroup()
    {
        return view('backend.auth.ui.list_group');
    }

    public function mediaObject()
    {
        return view('backend.auth.ui.media_object');
    }

    public function modals()
    {
        return view('backend.auth.ui.modals');
    }

    public function nestable()
    {
        return view('backend.auth.ui.nestable');
    }

    public function progressBars()
    {
        return view('backend.auth.ui.progressbars');
    }

    public function rangeSliders()
    {
        return view('backend.auth.ui.range_sliders');
    }

    public function treeview()
    {
        return view('backend.auth.ui.treeview');
    }
}
