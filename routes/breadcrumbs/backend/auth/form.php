<?php

Breadcrumbs::for('Forms', function ($trail) {
    $trail->push('Forms');
});

Breadcrumbs::for('admin.auth.form.validation', function ($trail) {
	$trail->parent('Forms');
    $trail->push(__('Form Validation'), route('admin.auth.form.validation'));
});

Breadcrumbs::for('admin.auth.form.advanced', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Form Advanced'), route('admin.auth.form.advanced'));
});

Breadcrumbs::for('admin.auth.form.basic', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Form Basic'), route('admin.auth.form.basic'));
});

Breadcrumbs::for('admin.auth.form.wizard', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Form Wizard'), route('admin.auth.form.wizard'));
});

Breadcrumbs::for('admin.auth.form.dragdropupload', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Drag & Drop'), route('admin.auth.form.dragdropupload'));
});

Breadcrumbs::for('admin.auth.form.cropping', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Image Cropping'), route('admin.auth.form.cropping'));
});

Breadcrumbs::for('admin.auth.form.summernote', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Summernote'), route('admin.auth.form.summernote'));
});

Breadcrumbs::for('admin.auth.form.editors', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Form Editors'), route('admin.auth.form.editors'));
});

Breadcrumbs::for('admin.auth.form.markdown', function ($trail) {
    $trail->parent('Forms');
    $trail->push(__('Markdown'), route('admin.auth.form.markdown'));
});