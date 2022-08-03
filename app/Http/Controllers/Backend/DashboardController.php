<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.dashboard');
    }
    
    public function h_menu()
    {
        return view('backend.h_menu');
    }

    public function iot()
    {
        return view('backend.iot');
    }

    public function demographic()
    {
        return view('backend.demographic');
    }

    public function project_Board()
    {
        return view('backend.project_board');
    }

    public function crypto_Dashboard()
    {
        return view('backend.crypto_dashboard');
    }

    public function eCommerce()
    {
        return view('backend.eCommerce');
    }
}
