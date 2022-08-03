<?php

Breadcrumbs::for('admin.auth.contacts.index', function ($trail) {
    $trail->push(__('menus.backend.contacts.management'), route('admin.auth.contacts.index'));
});

Breadcrumbs::for('admin.auth.contacts.create', function ($trail) {
    $trail->parent('admin.auth.contacts.index');
    $trail->push(__('menus.backend.contacts.create'), route('admin.auth.contacts.create'));
});

Breadcrumbs::for('admin.auth.contacts.edit', function ($trail, $id) {
    $trail->parent('admin.auth.contacts.index');
    $trail->push(__('menus.backend.contacts.edit'), route('admin.auth.contacts.edit', $id));
});
