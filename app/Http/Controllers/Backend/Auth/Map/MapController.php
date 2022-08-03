<?php

namespace App\Http\Controllers\Backend\Auth\Map;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function mapGoogle()
    {
        return view('backend.auth.map.google');
    }

    public function mapYandex()
    {
        return view('backend.auth.map.yandex');
    }

    public function mapJvectormap()
    {
        return view('backend.auth.map.jvectormap');
    }
}
