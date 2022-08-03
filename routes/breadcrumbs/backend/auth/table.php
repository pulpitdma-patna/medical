<?php

Breadcrumbs::for('Table', function ($trail) {
    $trail->push('Table');
});

Breadcrumbs::for('admin.auth.table.basic', function ($trail) {
	$trail->parent('Table');
    $trail->push(__('Table Basic'), route('admin.auth.table.basic'));
});

Breadcrumbs::for('admin.auth.table.normal', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Table Normal'), route('admin.auth.table.normal'));
});

Breadcrumbs::for('admin.auth.table.datatable', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Jquery Datatable'), route('admin.auth.table.datatable'));
});

Breadcrumbs::for('admin.auth.table.editable', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Editable'), route('admin.auth.table.editable'));
});

Breadcrumbs::for('admin.auth.table.color', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Table Color'), route('admin.auth.table.color'));
});

Breadcrumbs::for('admin.auth.table.filter', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Table Filter'), route('admin.auth.table.filter'));
});

Breadcrumbs::for('admin.auth.table.dragger', function ($trail) {
    $trail->parent('Table');
    $trail->push(__('Table Dragger'), route('admin.auth.table.dragger'));
});