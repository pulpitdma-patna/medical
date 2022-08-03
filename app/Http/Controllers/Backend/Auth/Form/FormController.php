<?php

namespace App\Http\Controllers\Backend\Auth\Form;

use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function validation()
    {
        return view('backend.auth.form.validation');
    }

    public function advanced()
    {
        return view('backend.auth.form.advanced');
    }

    public function basic()
    {
        return view('backend.auth.form.basic');
    }

    public function wizard()
    {
        return view('backend.auth.form.wizard');
    }

    public function dragdropupload()
    {
        return view('backend.auth.form.dragdropupload');
    }

    public function cropping()
    {
        return view('backend.auth.form.cropping');
    }

    public function summernote()
    {
        return view('backend.auth.form.summernote');
    }

    public function editors()
    {
        return view('backend.auth.form.editors');
    }

    public function markdown()
    {
        return view('backend.auth.form.markdown');
    }
}
