<?php

Breadcrumbs::for('Map', function ($trail) {
    $trail->push('Map');
});

Breadcrumbs::for('admin.auth.map.google', function ($trail) {
	$trail->parent('Map');
    $trail->push(__('Google Map'), route('admin.auth.map.google'));
});

Breadcrumbs::for('admin.auth.map.yandex', function ($trail) {
    $trail->parent('Map');
    $trail->push(__('Yandex Map'), route('admin.auth.map.yandex'));
});

Breadcrumbs::for('admin.auth.map.jvectormap', function ($trail) {
    $trail->parent('Map');
    $trail->push(__('JVector Map'), route('admin.auth.map.jvectormap'));
});
