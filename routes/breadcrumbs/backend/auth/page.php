<?php

Breadcrumbs::for('Extra', function ($trail) {
    $trail->push('Extra');
});

Breadcrumbs::for('admin.auth.page.blank', function ($trail) {
	$trail->parent('Extra');
    $trail->push(__('Page Blank'), route('admin.auth.page.blank'));
});

Breadcrumbs::for('admin.auth.page.profile', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('User Profile'), route('admin.auth.page.profile'));
});

Breadcrumbs::for('admin.auth.page.profile2', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('User Profile2'), route('admin.auth.page.profile2'));
});

Breadcrumbs::for('admin.auth.page.gallery', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Gallery'), route('admin.auth.page.gallery'));
});

Breadcrumbs::for('admin.auth.page.gallery2', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Gallery'), route('admin.auth.page.gallery2'));
});

Breadcrumbs::for('admin.auth.page.timeline', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Timeline'), route('admin.auth.page.timeline'));
});

Breadcrumbs::for('admin.auth.page.timeline_h', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Horizontal Timeline'), route('admin.auth.page.timeline_h'));
});

Breadcrumbs::for('admin.auth.page.pricing', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Pricing'), route('admin.auth.page.pricing'));
});

Breadcrumbs::for('admin.auth.page.invoices', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Invoices'), route('admin.auth.page.invoices'));
});

Breadcrumbs::for('admin.auth.page.invoices2', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Invoices2'), route('admin.auth.page.invoices2'));
});

Breadcrumbs::for('admin.auth.page.results', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Search Results'), route('admin.auth.page.results'));
});

Breadcrumbs::for('admin.auth.page.helper', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Helper Class'), route('admin.auth.page.helper'));
});

Breadcrumbs::for('admin.auth.page.board', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Teams Board'), route('admin.auth.page.board'));
});

Breadcrumbs::for('admin.auth.page.list', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Projects List'), route('admin.auth.page.list'));
});

Breadcrumbs::for('admin.auth.page.maintenance', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Maintenance'), route('admin.auth.page.maintenance'));
});

Breadcrumbs::for('admin.auth.page.testimonials', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('Testimonials'), route('admin.auth.page.testimonials'));
});

Breadcrumbs::for('admin.auth.page.faq', function ($trail) {
    $trail->parent('Extra');
    $trail->push(__('FAQs'), route('admin.auth.page.faq'));
});