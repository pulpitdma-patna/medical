<?php

use App\Http\Controllers\Backend\Auth\Role\RoleController;
use App\Http\Controllers\Backend\Auth\Contacts\PhoneContactController;
use App\Http\Controllers\Backend\Auth\Group\PhoneGroupController;
use App\Http\Controllers\Backend\Auth\Entity\EntityController;
use App\Http\Controllers\Backend\Auth\Sender\SenderController;
use App\Http\Controllers\Backend\Auth\Template\TemplateController;
use App\Http\Controllers\Backend\Auth\Sms\SmsController;
/*use App\Http\Controllers\Backend\Auth\User\UserConfirmationController;
use App\Http\Controllers\Backend\Auth\User\UserController;
use App\Http\Controllers\Backend\Auth\User\UserPasswordController;
use App\Http\Controllers\Backend\Auth\User\UserSessionController;
use App\Http\Controllers\Backend\Auth\User\UserSocialController;
use App\Http\Controllers\Backend\Auth\User\UserStatusController;*/

// All route names are prefixed with 'admin.auth'.
Route::group([
    'prefix'     => 'auth',
    'as'         => 'auth.',
    'namespace'  => 'Auth',
    'middleware' => 'role:administrator',
], function () {

    /*
     * User Management
     */
    Route::group([
        'namespace' => 'User',
        'middleware' => 'role:administrator'
    ], function () {

        /*
         * User Status'
         */
        Route::get('user/deactivated', 'UserStatusController@getDeactivated')->name('user.deactivated');
        Route::get('user/deleted', 'UserStatusController@getDeleted')->name('user.deleted');

        /*
         * User CRUD
         */
        Route::resource('user', 'UserController');

        /*
         * Specific User
         */
        Route::group(['prefix' => 'user/{user}'], function () {
            // Account
            Route::get('account/confirm/resend', 'UserConfirmationController@sendConfirmationEmail')->name('user.account.confirm.resend');

            // Status
            Route::get('mark/{status}', 'UserStatusController@mark')->name('user.mark')->where(['status' => '[0,1]']);

            // Social
            Route::delete('social/{social}/unlink', 'UserSocialController@unlink')->name('user.social.unlink');

            // Confirmation
            Route::get('confirm', 'UserConfirmationController@confirm')->name('user.confirm');
            Route::get('unconfirm', 'UserConfirmationController@unconfirm')->name('user.unconfirm');

            // Password
            Route::get('password/change', 'UserPasswordController@edit')->name('user.change-password');
            Route::patch('password/change', 'UserPasswordController@update')->name('user.change-password.post');

            // Access
            Route::get('login-as', 'UserAccessController@loginAs')->name('user.login-as');

            // Session
            Route::get('clear-session', 'UserSessionController@clearSession')->name('user.clear-session');

            // Deleted
            Route::get('delete', 'UserStatusController@delete')->name('user.delete-permanently');
            Route::get('restore', 'UserStatusController@restore')->name('user.restore');
        });
    });
    
     /*
     * Role Management
     */
    Route::group(
        [
            'namespace' => 'Role',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('role/remove/{id}', 'RoleController@destroy')->name('role.remove');
        Route::resource('role', 'RoleController', ['except' => ['show']]);
    });
	// phone book contact
	Route::group(
	[
		'namespace' => 'Group',
		'middleware' => 'role:administrator'
	], function () {
		Route::get('/group', [PhoneGroupController::class, 'index'])->name('group.index');
		Route::get('/group/create/', [PhoneGroupController::class, 'create'])->name('group.create');
		Route::post('/group/store', [PhoneGroupController::class, 'store'])->name('group.store');
		Route::get('/group/{id}/edit', [PhoneGroupController::class, 'edit'])->name('group.edit');
		Route::post('/group/{id}/update', [PhoneGroupController::class, 'update'])->name('group.update');
		Route::get('/group/destroy/{id}',
			[PhoneGroupController::class, 'destroy'])->name('group.remove');
	});
	// End phone book contact
	
	
	// language routing
	Route::group(
	[
		'namespace' => 'Language',
		'middleware' => 'role:administrator'
	], function () {
		
		### Language setting start //
		Route::get('/language-settings',array('as'=>'LanguageSetting.index','uses'=>'LanguageSettingsController@listLanguageSetting'));
		Route::get('/language-settings/add-setting',array('as'=>'LanguageSetting.add','uses'=>'LanguageSettingsController@addLanguageSetting'));
		
		Route::post('/language-settings/add-setting',array('as'=>'LanguageSetting.save','uses'=>'LanguageSettingsController@saveLanguageSetting'));
		Route::get('/language-settings/edit-setting/{id}',array('as'=>'LanguageSetting.edit','uses'=>'LanguageSettingsController@editLanguageSetting'));
		Route::post('/language-settings/edit-setting',array('as'=>'LanguageSetting.update','uses'=>'LanguageSettingsController@updateLanguageSetting'));
	});
	
	
	

    /*
     * Setting Management
     */
    Route::group([
        'namespace' => 'Setting',
        'middleware' => 'role:administrator'
    ], function () {
        Route::resource('setting', 'SettingController', ['except' => ['show']]);
    });

    /*
     * App Management
     */
    Route::group(
        [
            'namespace' => 'App',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('inbox', 'AppController@inbox')->name('app.inbox');
        Route::get('chat', 'AppController@chat')->name('app.chat');
        Route::get('calendar', 'AppController@calendar')->name('app.calendar');
        Route::get('contact', 'AppController@contact')->name('app.contact');
        Route::get('contactGrid', 'AppController@contactGrid')->name('app.contact_grid');
        Route::get('taskboard', 'AppController@taskboard')->name('app.taskboard');
        Route::get('blogDashboard', 'AppController@blogDashboard')->name('app.blog_dashboard');
        Route::get('blogPost', 'AppController@blogPost')->name('app.blog_post');
        Route::get('blogList', 'AppController@blogList')->name('app.blog_list');
        Route::get('blogDetails', 'AppController@blogDetails')->name('app.blog_details');
        Route::get('fileDashboard', 'AppController@fileDashboard')->name('app.file_dashboard');
        Route::get('fileDocuments', 'AppController@fileDocuments')->name('app.file_documents');
        Route::get('fileMedia', 'AppController@fileMedia')->name('app.file_media');
        Route::get('fileImages', 'AppController@fileImages')->name('app.file_images');
    });

    /*
     * Widget Management
     */
    Route::group(
        [
            'namespace' => 'Widget',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('widgetStatistics', 'WidgetController@widgetStatistics')->name('widget.widget_statistics');
        Route::get('widgetData', 'WidgetController@widgetData')->name('widget.widget_data');
        Route::get('widgetChart', 'WidgetController@widgetChart')->name('widget.widget_chart');
        Route::get('widgetWeather', 'WidgetController@widgetWeather')->name('widget.widget_weather');
        Route::get('widgetSocial', 'WidgetController@widgetSocial')->name('widget.widget_social');
        Route::get('widgetBlog', 'WidgetController@widgetBlog')->name('widget.widget_blog');
        Route::get('widgeteCommerce', 'WidgetController@widgeteCommerce')->name('widget.widget_ecommerce');
    });

    /*
     * Ui Management
     */
    Route::group(
        [
            'namespace' => 'Ui',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('typoGraphy', 'UiController@typoGraphy')->name('ui.typography');
        Route::get('tabs', 'UiController@tabs')->name('ui.tabs');
        Route::get('buttons', 'UiController@buttons')->name('ui.buttons');
        Route::get('bootstrap', 'UiController@bootstrap')->name('ui.bootstrap');
        Route::get('icons', 'UiController@icons')->name('ui.icons');
        Route::get('notifications', 'UiController@notifications')->name('ui.notifications');
        Route::get('colors', 'UiController@colors')->name('ui.colors');
        Route::get('dialogs', 'UiController@dialogs')->name('ui.dialogs');
        Route::get('listGroup', 'UiController@listGroup')->name('ui.list_group');
        Route::get('mediaObject', 'UiController@mediaObject')->name('ui.media_object');
        Route::get('modals', 'UiController@modals')->name('ui.modals');
        Route::get('nestable', 'UiController@nestable')->name('ui.nestable');
        Route::get('progressBars', 'UiController@progressBars')->name('ui.progressbars');
        Route::get('rangeSliders', 'UiController@rangeSliders')->name('ui.range_sliders');
        Route::get('treeview', 'UiController@treeview')->name('ui.treeview');
    });

    /*
     * Chart Management
     */
    Route::group(
        [
            'namespace' => 'Chart',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('apex', 'ChartController@apex')->name('chart.apex');
        Route::get('c3', 'ChartController@c3')->name('chart.c3');
        Route::get('morris', 'ChartController@morris')->name('chart.morris');
        Route::get('flot', 'ChartController@flot')->name('chart.flot');
        Route::get('chartJs', 'ChartController@chartJs')->name('chart.chartjs');
        Route::get('knob', 'ChartController@knob')->name('chart.knob');
        Route::get('sparkline', 'ChartController@sparkline')->name('chart.sparkline');
        Route::get('peity', 'ChartController@peity')->name('chart.peity');
        Route::get('gauges', 'ChartController@gauges')->name('chart.gauges');
    });

     /*
     * Form Management
     */
    Route::group(
        [
            'namespace' => 'Form',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('validation', 'FormController@validation')->name('form.validation');
        Route::get('advanced', 'FormController@advanced')->name('form.advanced');
        Route::get('basic', 'FormController@basic')->name('form.basic');
        Route::get('wizard', 'FormController@wizard')->name('form.wizard');
        Route::get('dragdropupload', 'FormController@dragdropupload')->name('form.dragdropupload');
        Route::get('cropping', 'FormController@cropping')->name('form.cropping');
        Route::get('summernote', 'FormController@summernote')->name('form.summernote');
        Route::get('editors', 'FormController@editors')->name('form.editors');
        Route::get('markdown', 'FormController@markdown')->name('form.markdown');
    });

    /*
     * Table Management
     */
    Route::group(
        [
            'namespace' => 'Table',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('tableBasic', 'TableController@tableBasic')->name('table.basic');
        Route::get('normal', 'TableController@normal')->name('table.normal');
        Route::get('datatable', 'TableController@datatable')->name('table.datatable');
        Route::get('editable', 'TableController@editable')->name('table.editable');
        Route::get('color', 'TableController@color')->name('table.color');
        Route::get('filter', 'TableController@filter')->name('table.filter');
        Route::get('dragger', 'TableController@dragger')->name('table.dragger');
    });

    /*
     * Page Management
     */
    Route::group(
        [
            'namespace' => 'Page',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('blank', 'PageController@blank')->name('page.blank');
        Route::get('profile', 'PageController@profile')->name('page.profile');
        Route::get('profile2', 'PageController@profile2')->name('page.profile2');
        Route::get('gallery', 'PageController@gallery')->name('page.gallery');
        Route::get('gallery2', 'PageController@gallery2')->name('page.gallery2');
        Route::get('timeline', 'PageController@timeline')->name('page.timeline');
        Route::get('timelineH', 'PageController@timelineH')->name('page.timeline_h');
        Route::get('pricing', 'PageController@pricing')->name('page.pricing');
        Route::get('invoices', 'PageController@invoices')->name('page.invoices');
        Route::get('invoices2', 'PageController@invoices2')->name('page.invoices2');
        Route::get('results', 'PageController@results')->name('page.results');
        Route::get('helperClass', 'PageController@helperClass')->name('page.helper');
        Route::get('board', 'PageController@board')->name('page.board');
        Route::get('list', 'PageController@list')->name('page.list');
        Route::get('maintenance', 'PageController@maintenance')->name('page.maintenance');
        Route::get('testimonials', 'PageController@testimonials')->name('page.testimonials');
        Route::get('faq', 'PageController@faq')->name('page.faq');
    });

    /*
     * Map Management
     */
    Route::group(
        [
            'namespace' => 'Map',
            'middleware' => 'role:administrator'
        ], function () {
        Route::get('mapGoogle', 'MapController@mapGoogle')->name('map.google');
        Route::get('mapYandex', 'MapController@mapYandex')->name('map.yandex');
        Route::get('mapJvectormap', 'MapController@mapJvectormap')->name('map.jvectormap');
    });
});

