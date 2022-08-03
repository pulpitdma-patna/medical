<?php

Breadcrumbs::for('Widgets', function ($trail) {
    $trail->push('Widgets');
});

Breadcrumbs::for('admin.auth.widget.widget_statistics', function ($trail) {
	$trail->parent('Widgets');
    $trail->push(__('Statistics'), route('admin.auth.widget.widget_statistics'));
});

Breadcrumbs::for('admin.auth.widget.widget_data', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('Data'), route('admin.auth.widget.widget_data'));
});

Breadcrumbs::for('admin.auth.widget.widget_chart', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('Chart'), route('admin.auth.widget.widget_chart'));
});

Breadcrumbs::for('admin.auth.widget.widget_weather', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('Weather'), route('admin.auth.widget.widget_weather'));
});

Breadcrumbs::for('admin.auth.widget.widget_social', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('Social'), route('admin.auth.widget.widget_social'));
});

Breadcrumbs::for('admin.auth.widget.widget_blog', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('Blog'), route('admin.auth.widget.widget_blog'));
});

Breadcrumbs::for('admin.auth.widget.widget_ecommerce', function ($trail) {
    $trail->parent('Widgets');
    $trail->push(__('eCommerce'), route('admin.auth.widget.widget_ecommerce'));
});
