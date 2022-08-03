<?php

Breadcrumbs::for('App', function ($trail) {
    $trail->push('App');
});

Breadcrumbs::for('admin.auth.app.inbox', function ($trail) {
	$trail->parent('App');
    $trail->push(__('Inbox'), route('admin.auth.app.inbox'));
});

Breadcrumbs::for('admin.auth.app.blog_dashboard', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Blog'), route('admin.auth.app.blog_dashboard'));
});

Breadcrumbs::for('admin.auth.app.blog_details', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Blog'), route('admin.auth.app.blog_details'));
});

Breadcrumbs::for('admin.auth.app.blog_list', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Blog'), route('admin.auth.app.blog_list'));
});

Breadcrumbs::for('admin.auth.app.blog_post', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Blog'), route('admin.auth.app.blog_post'));
});

Breadcrumbs::for('admin.auth.app.calendar', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Calendar'), route('admin.auth.app.calendar'));
});

Breadcrumbs::for('admin.auth.app.chat', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Chat'), route('admin.auth.app.chat'));
});

Breadcrumbs::for('admin.auth.app.contact', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Contact List'), route('admin.auth.app.contact'));
});

Breadcrumbs::for('admin.auth.app.contact_grid', function ($trail) {
    $trail->parent('App');
    $trail->push(__('Contact Card'), route('admin.auth.app.contact_grid'));
});

Breadcrumbs::for('admin.auth.app.file_dashboard', function ($trail) {
    $trail->parent('App');
    $trail->push(__('File Manager'), route('admin.auth.app.file_dashboard'));
});

Breadcrumbs::for('admin.auth.app.file_documents', function ($trail) {
    $trail->parent('App');
    $trail->push(__('File Manager'), route('admin.auth.app.file_documents'));
});

Breadcrumbs::for('admin.auth.app.file_images', function ($trail) {
    $trail->parent('App');
    $trail->push(__('File Manager'), route('admin.auth.app.file_images'));
});

Breadcrumbs::for('admin.auth.app.file_media', function ($trail) {
    $trail->parent('App');
    $trail->push(__('File Manager'), route('admin.auth.app.file_media'));
});

Breadcrumbs::for('admin.auth.app.taskboard', function ($trail) {
    $trail->parent('App');
    $trail->push(__('TaskBoard'), route('admin.auth.app.taskboard'));
});