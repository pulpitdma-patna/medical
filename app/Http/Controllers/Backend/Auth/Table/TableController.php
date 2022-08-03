<?php

namespace App\Http\Controllers\Backend\Auth\Table;

use App\Http\Controllers\Controller;

class TableController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function tableBasic()
    {
        return view('backend.auth.table.basic');
    }

    public function normal()
    {
        return view('backend.auth.table.normal');
    }

    public function datatable()
    {
        return view('backend.auth.table.datatable');
    }

    public function editable()
    {
        return view('backend.auth.table.editable');
    }

    public function color()
    {
        return view('backend.auth.table.color');
    }

    public function filter()
    {
        return view('backend.auth.table.filter');
    }

    public function dragger()
    {
        return view('backend.auth.table.dragger');
    }
}
