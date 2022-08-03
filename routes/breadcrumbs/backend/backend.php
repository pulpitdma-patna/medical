<?php

Breadcrumbs::for('Dashboard', function ($trail) {
    $trail->push('Dashboard');
});

Breadcrumbs::for('admin.dashboard', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('Analytical'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.h_menu', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('Analytical'), route('admin.h_menu'));
});

Breadcrumbs::for('admin.iot', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('IOT'), route('admin.iot'));
});

Breadcrumbs::for('admin.demographic', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('Demographic'), route('admin.demographic'));
});

Breadcrumbs::for('admin.project_board', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('Project Board'), route('admin.project_board'));
});

Breadcrumbs::for('admin.crypto_dashboard', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('Cryptocurrency'), route('admin.crypto_dashboard'));
});

Breadcrumbs::for('admin.eCommerce', function ($trail) {
	$trail->parent('Dashboard');
    $trail->push(__('eCommerce'), route('admin.eCommerce'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
