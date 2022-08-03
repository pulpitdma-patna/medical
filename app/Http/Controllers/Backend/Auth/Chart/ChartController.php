<?php

namespace App\Http\Controllers\Backend\Auth\Chart;

use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function apex()
    {
        return view('backend.auth.chart.apex');
    }

    public function c3()
    {
        return view('backend.auth.chart.c3');
    }

    public function morris()
    {
        return view('backend.auth.chart.morris');
    }

    public function flot()
    {
        return view('backend.auth.chart.flot');
    }

    public function chartJs()
    {
        return view('backend.auth.chart.chartjs');
    }

    public function knob()
    {
        return view('backend.auth.chart.knob');
    }

    public function sparkline()
    {
        return view('backend.auth.chart.sparkline');
    }

    public function peity()
    {
        return view('backend.auth.chart.peity');
    }

    public function gauges()
    {
        return view('backend.auth.chart.gauges');
    }
}
