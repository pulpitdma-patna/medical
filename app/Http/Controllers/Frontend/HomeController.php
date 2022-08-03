<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index($request, $guard = null)
    {
    	if (auth()->check()) {
            if (auth()->user()->can('view backend')) {
				return redirect('admin/dashboard');
            }

            return 'frontend.user.dashboard';
        }
        return redirect('/login');
    }
}
