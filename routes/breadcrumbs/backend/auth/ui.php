<?php

Breadcrumbs::for('UI Elements', function ($trail) {
    $trail->push('UI Elements');
});

Breadcrumbs::for('admin.auth.ui.typography', function ($trail) {
	$trail->parent('UI Elements');
    $trail->push(__('Typography'), route('admin.auth.ui.typography'));
});

Breadcrumbs::for('admin.auth.ui.tabs', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Tabs'), route('admin.auth.ui.tabs'));
});

Breadcrumbs::for('admin.auth.ui.buttons', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push('Buttons', route('admin.auth.ui.buttons'));
});

Breadcrumbs::for('admin.auth.ui.bootstrap', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Bootstrap UI'), route('admin.auth.ui.bootstrap'));
});

Breadcrumbs::for('admin.auth.ui.icons', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Icons'), route('admin.auth.ui.icons'));
});

Breadcrumbs::for('admin.auth.ui.notifications', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Notifications'), route('admin.auth.ui.notifications'));
});

Breadcrumbs::for('admin.auth.ui.colors', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Colors'), route('admin.auth.ui.colors'));
});

Breadcrumbs::for('admin.auth.ui.contact', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Dialogs'), route('admin.auth.ui.contact'));
});

Breadcrumbs::for('admin.auth.ui.dialogs', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Dialogs'), route('admin.auth.ui.dialogs'));
});

Breadcrumbs::for('admin.auth.ui.list_group', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('List Group'), route('admin.auth.ui.list_group'));
});

Breadcrumbs::for('admin.auth.ui.media_object', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Media Object'), route('admin.auth.ui.media_object'));
});

Breadcrumbs::for('admin.auth.ui.modals', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Modals'), route('admin.auth.ui.modals'));
});

Breadcrumbs::for('admin.auth.ui.nestable', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Sortable Nestable'), route('admin.auth.ui.nestable'));
});

Breadcrumbs::for('admin.auth.ui.progressbars', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Progress Bars'), route('admin.auth.ui.progressbars'));
});

Breadcrumbs::for('admin.auth.ui.range_sliders', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Range Sliders'), route('admin.auth.ui.range_sliders'));
});

Breadcrumbs::for('admin.auth.ui.treeview', function ($trail) {
    $trail->parent('UI Elements');
    $trail->push(__('Treeview'), route('admin.auth.ui.treeview'));
});