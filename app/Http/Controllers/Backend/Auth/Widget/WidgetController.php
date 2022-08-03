<?php

namespace App\Http\Controllers\Backend\Auth\Widget;

use App\Http\Controllers\Controller;

class WidgetController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function widgetStatistics()
    {
        return view('backend.auth.widget.widget_statistics');
    }

    public function widgetData()
    {
        return view('backend.auth.widget.widget_data');
    }

    public function widgetChart()
    {
        return view('backend.auth.widget.widget_chart');
    }

    public function widgetWeather()
    {
        return view('backend.auth.widget.widget_weather');
    }

    public function widgetSocial()
    {
        return view('backend.auth.widget.widget_social');
    }

    public function widgetBlog()
    {
        return view('backend.auth.widget.widget_blog');
    }

    public function widgeteCommerce()
    {
        return view('backend.auth.widget.widget_ecommerce');
    }
}
