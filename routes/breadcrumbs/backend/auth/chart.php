<?php

Breadcrumbs::for('Charts', function ($trail) {
    $trail->push('Charts');
});

Breadcrumbs::for('admin.auth.chart.apex', function ($trail) {
	$trail->parent('Charts');
    $trail->push(__('Apex Chart'), route('admin.auth.chart.apex'));
});

Breadcrumbs::for('admin.auth.chart.c3', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('C3 Chart'), route('admin.auth.chart.c3'));
});

Breadcrumbs::for('admin.auth.chart.morris', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Morris Chart'), route('admin.auth.chart.morris'));
});

Breadcrumbs::for('admin.auth.chart.flot', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Flot Chart'), route('admin.auth.chart.flot'));
});

Breadcrumbs::for('admin.auth.chart.chartjs', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('ChartJS Chart'), route('admin.auth.chart.chartjs'));
});

Breadcrumbs::for('admin.auth.chart.knob', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Knob Chart'), route('admin.auth.chart.knob'));
});

Breadcrumbs::for('admin.auth.chart.sparkline', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Sparkline Chart'), route('admin.auth.chart.sparkline'));
});

Breadcrumbs::for('admin.auth.chart.peity', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Peity Chart'), route('admin.auth.chart.peity'));
});

Breadcrumbs::for('admin.auth.chart.gauges', function ($trail) {
    $trail->parent('Charts');
    $trail->push(__('Gauge Chart'), route('admin.auth.chart.gauges'));
});