<?php
    $setting = App\Models\Auth\Settings::where('id',1)->first();
	
	
	
?>
<button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{url('/')}}/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('admin.auth.user.show', $logged_in_user->id) }}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{ route('admin.auth.app.inbox') }}"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('frontend.auth.logout') }}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Nav tabs -->
		<!--
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
        </ul>
            -->
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
						<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
							<a href="{{ route('admin.dashboard') }}" class=""><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
						</li>
                        @if($logged_in_user->isAdmin())
                            <li class="{{Request::is('admin/auth/user*') ? 'active' : ''}}{{Request::is('admin/auth/role*') ? 'active' : ''}}">
                                <a href="#App" class="has-arrow"><i class="fa fa-lock"></i><span>Access</span></a>
                                <ul>
                                    <li class="{{Request::is('admin/auth/user*') ? 'active' : ''}}"><a href="{{ route('admin.auth.user.index') }}">@lang('labels.backend.access.users.management')</a></li>
                                    <li class="{{Request::is('admin/auth/role*') ? 'active' : ''}}"><a href="{{ route('admin.auth.role.index') }}">@lang('labels.backend.access.roles.management')</a></li>
                                </ul>
                            </li>
							
							<li class="{{Request::is('admin/auth/language-settings*') ? 'active' : ''}}">
                                <a href="#App" class="has-arrow"><i class="fa fa-cog"></i><span>Language Settings</span></a>
                                <ul>
                                    <li class="{{Request::is('admin/auth/language-settings*') ? 'active' : ''}}"><a href="{{ route('admin.auth.LanguageSetting.index') }}">Language Settings</a></li>
                                </ul>
                            </li>
							<?php /*
							<li class="{{Request::is('admin/auth/sms/tracks') ? 'active' : ''}}{{Request::is('admin/auth/sms/tracks') ? 'active' : ''}}">
                                <a href="{{ route('admin.auth.sms.tracks') }}" class=""><i class="fa fa-file"></i><span>Sms Tracks</span></a>
                            </li>*/?>
							
                        @endif
						<?php /*
                         <li class="{{ Request::is('admin/auth/inbox') ? 'active' : '' }}{{ Request::is('admin/auth/chat') ? 'active' : '' }}{{ Request::is('admin/auth/calendar') ? 'active' : '' }}{{ Request::is('admin/auth/contact') ? 'active' : '' }}{{ Request::is('admin/auth/contactGrid') ? 'active' : '' }}{{ Request::is('admin/auth/taskboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}{{ Request::is('admin/auth/blogList') ? 'active' : '' }}{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}">

                            <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>Ready App</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/inbox') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.inbox') }}">Inbox</a></li>
                                <li class="{{ Request::is('admin/auth/chat') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.chat') }}">Chat</a></li>
                                <li class="{{ Request::is('admin/auth/calendar') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.calendar') }}">Calendar</a></li>                                    
                                <li class="{{ Request::is('admin/auth/contact') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.contact') }}">Contact list</a></li>
                                <li class="{{ Request::is('admin/auth/contactGrid') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.contact_grid') }}">Contact Card <span class="badge badge-warning float-right">New</span></a></li>
                                <li class="{{ Request::is('admin/auth/taskboard') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.taskboard') }}">Taskboard</a></li>
                                <li class="{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}{{ Request::is('admin/auth/blogList') ? 'active' : '' }}{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}"><a href="javascript:void(0);"><span>Blog</span></a>
                                    <ul>
                                        <li class="{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.blog_dashboard') }}">Dashboard</a></li>
                                        <li class="{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.blog_post') }}">New Post</a></li>
                                        <li class="{{ Request::is('admin/auth/blogList') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.blog_list') }}">Blog List</a></li>
                                        <li class="{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.blog_details') }}">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}"><a href="javascript:void(0);"><span>File Manager</span></a>
                                    <ul>
                                        <li class="{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.file_dashboard') }}">Dashboard</a></li>
                                        <li class="{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.file_documents') }}">Documents</a></li>
                                        <li class="{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.file_media') }}">Media</a></li>
                                        <li class="{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}"><a href="{{ route('admin.auth.app.file_images') }}">Images</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/widgetStatistics') ? 'active' : '' }}{{ Request::is('admin/auth/widgetData') ? 'active' : '' }}{{ Request::is('admin/auth/widgetChart') ? 'active' : '' }}{{ Request::is('admin/auth/widgetWeather') ? 'active' : '' }}{{ Request::is('admin/auth/widgetSocial') ? 'active' : '' }}{{ Request::is('admin/auth/widgetBlog') ? 'active' : '' }}{{ Request::is('admin/auth/widgeteCommerce') ? 'active' : '' }}">
                            <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/widgetStatistics') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_statistics') }}">Statistics</a></li>
                                <li class="{{ Request::is('admin/auth/widgetData') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_data') }}">Data</a></li>
                                <li class="{{ Request::is('admin/auth/widgetChart') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_chart') }}">Chart</a></li>
                                <li class="{{ Request::is('admin/auth/widgetWeather') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_weather') }}">Weather</a></li>
                                <li class="{{ Request::is('admin/auth/widgetSocial') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_social') }}">Social</a></li>
                                <li class="{{ Request::is('admin/auth/widgetBlog') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_blog') }}">Blog</a></li>
                                <li class="{{ Request::is('admin/auth/widgeteCommerce') ? 'active' : '' }}"><a href="{{ route('admin.auth.widget.widget_ecommerce') }}">eCommerce</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/typoGraphy') ? 'active' : '' }}{{ Request::is('admin/auth/tabs') ? 'active' : '' }}{{ Request::is('admin/auth/buttons') ? 'active' : '' }}{{ Request::is('admin/auth/bootstrap') ? 'active' : '' }}{{ Request::is('admin/auth/icons') ? 'active' : '' }}{{ Request::is('admin/auth/notifications') ? 'active' : '' }}{{ Request::is('admin/auth/colors') ? 'active' : '' }}{{ Request::is('admin/auth/dialogs') ? 'active' : '' }}{{ Request::is('admin/auth/listGroup') ? 'active' : '' }}{{ Request::is('admin/auth/mediaObject') ? 'active' : '' }}{{ Request::is('admin/auth/modals') ? 'active' : '' }}{{ Request::is('admin/auth/nestable') ? 'active' : '' }}{{ Request::is('admin/auth/progressBars') ? 'active' : '' }}{{ Request::is('admin/auth/rangeSliders') ? 'active' : '' }}{{ Request::is('admin/auth/treeview') ? 'active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>UI Elements</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/typoGraphy') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.typography') }}">Typography</a></li>
                                <li class="{{ Request::is('admin/auth/tabs') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.tabs') }}">Tabs</a></li>
                                <li class="{{ Request::is('admin/auth/buttons') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.buttons') }}">Buttons</a></li>
                                <li class="{{ Request::is('admin/auth/bootstrap') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.bootstrap') }}">Bootstrap UI</a></li>
                                <li class="{{ Request::is('admin/auth/icons') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.icons') }}">Icons</a></li>
                                <li class="{{ Request::is('admin/auth/notifications') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.notifications') }}">Notifications</a></li>
                                <li class="{{ Request::is('admin/auth/colors') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.colors') }}">Colors</a></li>
                                <li class="{{ Request::is('admin/auth/dialogs') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.dialogs') }}">Dialogs</a></li>                                    
                                <li class="{{ Request::is('admin/auth/listGroup') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.list_group') }}">List Group</a></li>
                                <li class="{{ Request::is('admin/auth/mediaObject') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.media_object') }}">Media Object</a></li>
                                <li class="{{ Request::is('admin/auth/modals') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.modals') }}">Modals</a></li>
                                <li class="{{ Request::is('admin/auth/nestable') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.nestable') }}">Nestable</a></li>
                                <li class="{{ Request::is('admin/auth/progressBars') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.progressbars') }}">Progress Bars</a></li>
                                <li class="{{ Request::is('admin/auth/rangeSliders') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.range_sliders') }}">Range Sliders</a></li>
                                <li class="{{ Request::is('admin/auth/treeview') ? 'active' : '' }}"><a href="{{ route('admin.auth.ui.treeview') }}">Treeview</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/apex') ? 'active' : '' }}{{ Request::is('admin/auth/c3') ? 'active' : '' }}{{ Request::is('admin/auth/morris') ? 'active' : '' }}{{ Request::is('admin/auth/flot') ? 'active' : '' }}{{ Request::is('admin/auth/chartJs') ? 'active' : '' }}{{ Request::is('admin/auth/knob') ? 'active' : '' }}{{ Request::is('admin/auth/sparkline') ? 'active' : '' }}{{ Request::is('admin/auth/peity') ? 'active' : '' }}{{ Request::is('admin/auth/gauges') ? 'active' : '' }}">
                            <a href="#charts" class="has-arrow"><i class="fa fa-area-chart"></i><span>Charts</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/apex') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.apex') }}">Apex</a> </li>
                                <li class="{{ Request::is('admin/auth/c3') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.c3') }}">C3 Charts</a></li>
                                <li class="{{ Request::is('admin/auth/morris') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.morris') }}">Morris</a> </li>
                                <li class="{{ Request::is('admin/auth/flot') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.flot') }}">Flot</a> </li>
                                <li class="{{ Request::is('admin/auth/chartJs') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.chartjs') }}">ChartJS</a> </li>                                    
                                <li class="{{ Request::is('admin/auth/knob') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.knob') }}">Jquery Knob</a> </li>
                                <li class="{{ Request::is('admin/auth/sparkline') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.sparkline') }}">Sparkline Chart</a></li>
                                <li class=" {{ Request::is('admin/auth/peity') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.peity') }}">Peity</a></li>
                                <li class="{{ Request::is('admin/auth/gauges') ? 'active' : '' }}"><a href="{{ route('admin.auth.chart.gauges') }}">Gauges</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/validation') ? 'active' : '' }}{{ Request::is('admin/auth/advanced') ? 'active' : '' }}{{ Request::is('admin/auth/basic') ? 'active' : '' }}{{ Request::is('admin/auth/wizard') ? 'active' : '' }}{{ Request::is('admin/auth/dragdropupload') ? 'active' : '' }}{{ Request::is('admin/auth/cropping') ? 'active' : '' }}{{ Request::is('admin/auth/summernote') ? 'active' : '' }}{{ Request::is('admin/auth/editors') ? 'active' : '' }}{{ Request::is('admin/auth/markdown') ? 'active' : '' }}">
                            <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/validation') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.validation') }}">Form Validation</a></li>
                                <li class="{{ Request::is('admin/auth/advanced') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.advanced') }}">Advanced Elements</a></li>
                                <li class="{{ Request::is('admin/auth/basic') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.basic') }}">Basic Elements</a></li>
                                <li class="{{ Request::is('admin/auth/wizard') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.wizard') }}">Form Wizard</a></li>
                                <li class="{{ Request::is('admin/auth/dragdropupload') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.dragdropupload') }}">Drag &amp; Drop Upload</a></li>
                                <li class="{{ Request::is('admin/auth/cropping') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.cropping') }}">Image Cropping</a></li>
                                <li class="{{ Request::is('admin/auth/summernote') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.summernote') }}">Summernote</a></li>
                                <li class="{{ Request::is('admin/auth/editors') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.editors') }}">CKEditor</a></li>
                                <li class="{{ Request::is('admin/auth/markdown') ? 'active' : '' }}"><a href="{{ route('admin.auth.form.markdown') }}">Markdown</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/tableBasic') ? 'active' : '' }}{{ Request::is('admin/auth/normal') ? 'active' : '' }}{{ Request::is('admin/auth/datatable') ? 'active' : '' }}{{ Request::is('admin/auth/editable') ? 'active' : '' }}{{ Request::is('admin/auth/color') ? 'active' : '' }}{{ Request::is('admin/auth/filter') ? 'active' : '' }}{{ Request::is('admin/auth/dragger') ? 'active' : '' }}">
                            <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Tables</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/tableBasic') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.basic') }}">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                <li class="{{ Request::is('admin/auth/normal') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.normal') }}">Normal Tables</a> </li>
                                <li class="{{ Request::is('admin/auth/datatable') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.datatable') }}">Jquery Datatables</a> </li>
                                <li class="{{ Request::is('admin/auth/editable') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.editable') }}">Editable Tables</a> </li>
                                <li class="{{ Request::is('admin/auth/color') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.color') }}">Tables Color</a> </li>
                                <li class="{{ Request::is('admin/auth/filter') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.filter') }}">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                <li class="{{ Request::is('admin/auth/dragger') ? 'active' : '' }}"><a href="{{ route('admin.auth.table.dragger') }}">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/blank') ? 'active' : '' }}{{ Request::is('admin/auth/profile') ? 'active' : '' }}{{ Request::is('admin/auth/profile2') ? 'active' : '' }}{{ Request::is('admin/auth/gallery') ? 'active' : '' }}{{ Request::is('admin/auth/gallery2') ? 'active' : '' }}{{ Request::is('admin/auth/timeline') ? 'active' : '' }}{{ Request::is('admin/auth/timelineH') ? 'active' : '' }}{{ Request::is('admin/auth/pricing') ? 'active' : '' }}{{ Request::is('admin/auth/invoices') ? 'active' : '' }}{{ Request::is('admin/auth/invoices2') ? 'active' : '' }}{{ Request::is('admin/auth/results') ? 'active' : '' }}{{ Request::is('admin/auth/helperClass') ? 'active' : '' }}{{ Request::is('admin/auth/board') ? 'active' : '' }}{{ Request::is('admin/auth/list') ? 'active' : '' }}{{ Request::is('admin/auth/maintenance') ? 'active' : '' }}{{ Request::is('admin/auth/testimonials') ? 'active' : '' }}{{ Request::is('admin/auth/faq') ? 'active' : '' }}">
                            <a href="#Pages" class="has-arrow"><i class="fa fa-file"></i><span>Extra Pages</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/blank') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.blank') }}">Blank Page</a> </li>
                                <li class="{{ Request::is('admin/auth/profile') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.profile') }}">Profile <span class="badge badge-default float-right">v1</span></a></li>
                                <li class="{{ Request::is('admin/auth/profile2') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.profile2') }}">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                <li class="{{ Request::is('admin/auth/gallery') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.gallery') }}">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                <li class="{{ Request::is('admin/auth/gallery2') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.gallery2') }}">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                <li class="{{ Request::is('admin/auth/timeline') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.timeline') }}">Timeline</a></li>
                                <li class="{{ Request::is('admin/auth/timelineH') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.timeline_h') }}">Horizontal Timeline</a></li>
                                <li class="{{ Request::is('admin/auth/pricing') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.pricing') }}">Pricing</a></li>
                                <li class="{{ Request::is('admin/auth/invoices') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.invoices') }}">Invoices</a></li>
                                <li class="{{ Request::is('admin/auth/invoices2') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.invoices2') }}">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                <li class="{{ Request::is('admin/auth/results') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.results') }}">Search Results</a></li>
                                <li class="{{ Request::is('admin/auth/helperClass') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.helper') }}">Helper Classes</a></li>
                                <li class="{{ Request::is('admin/auth/board') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.board') }}">Teams Board</a></li>
                                <li class="{{ Request::is('admin/auth/list') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.list') }}">Projects List</a></li>
                                <li class="{{ Request::is('admin/auth/maintenance') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.maintenance') }}">Maintenance</a></li>
                                <li class="{{ Request::is('admin/auth/testimonials') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.testimonials') }}">Testimonials</a></li>
                                <li class="{{ Request::is('admin/auth/faq') ? 'active' : '' }}"><a href="{{ route('admin.auth.page.faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/auth/mapGoogle') ? 'active' : '' }}{{ Request::is('admin/auth/mapYandex') ? 'active' : '' }}{{ Request::is('admin/auth/mapJvectormap') ? 'active' : '' }}">
                            <a href="#Maps" class="has-arrow"><i class="fa fa-map"></i><span>Maps</span></a>
                            <ul>
                                <li class="{{ Request::is('admin/auth/mapGoogle') ? 'active' : '' }}"><a href="{{ route('admin.auth.map.google') }}">Google Map</a></li>
                                <li class="{{ Request::is('admin/auth/mapYandex') ? 'active' : '' }}"><a href="{{ route('admin.auth.map.yandex') }}">Yandex Map</a></li>
                                <li class="{{ Request::is('admin/auth/mapJvectormap') ? 'active' : '' }}"><a href="{{ route('admin.auth.map.jvectormap') }}">jVector Map</a></li>
                            </ul>
                        </li>  */ ?>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar1.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar2.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar3.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar4.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>                            
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ url('/') }}/assets/images/xs/avatar5.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Alexander <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled" id="themeColor">
                    <li value="p" data-theme="purple" class="{{ $setting->theme == 'p' ? 'active':''}}"><div class="purple"></div></li>
                    <li value="b" data-theme="blue" class="{{ $setting->theme == 'b' ? 'active':''}}"><div class="blue"></div></li>
                    <li value="c" data-theme="cyan" class="{{ $setting->theme == 'c' ? 'active':''}}"><div class="cyan"></div></li>
                    <li value="g" data-theme="green" class="{{ $setting->theme == 'g' ? 'active':''}}"><div class="green"></div></li>
                    <li value="o" data-theme="orange" class="{{ $setting->theme == 'o' ? 'active':''}}"><div class="orange"></div></li>
                    <li value="bh" data-theme="blush" class="{{ $setting->theme == 'bh' ? 'active':''}}"><div class="blush"></div></li>
                    <li value="r" data-theme="red" class="{{ $setting->theme == 'r' ? 'active':''}}"><div class="red"></div></li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-nunito" value="n" {{ $setting->font == "n" ? 'checked':''}}>
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-ubuntu" value="u" {{ $setting->font == "u" ? 'checked':''}}>
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-raleway" value="r" {{ $setting->font == "r" ? 'checked':''}}>
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" data="font-IBMplex" value="i" {{ $setting->font == "i" ? 'checked':''}}>
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox" data="dark"  name="dark_mode" value="d" {{ $setting->data_theme == "d" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox" value="Y" {{ $setting->mode_type == "Y" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox" value="hc" {{ $setting->data_theme == "hc" ? "checked" : "" }}>
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>                    

                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Allowed Notifications</span>
                        </label>                      
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>

                <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
            </div>
            <div class="tab-pane" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                    <li class="menu-button mt-3">
                        <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                    </li>
                </ul>
            </div>    
        </div>          
    </div>
@push('after-scripts')
<script>
    jQuery(document).ready(function() {
        jQuery('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', jQuery(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            jQuery('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    
        jQuery(function(){
            jQuery('ul.choose-skin li').click(function() {
                var theme = jQuery(this).attr("value");
                var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                if(is_chk.checked == true) {
                    $("body").addClass('rtl_mode');
                    var mode_type = 'Y';
                }else{
                    $("body").removeClass('rtl_mode');
                    var mode_type = 'N';
                }
                var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                if($('input[name="dark_mode"]').is(':checked')){
                    if(toggleSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'd',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }else{
                    if(toggleHcSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'hc',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }
                return false;
            });
            
            jQuery('.font_setting input:radio').click(function () {
                var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                var font = jQuery(this).attr("value");
                var bodyClass = $('body').attr('class');
                $('body').removeClass(bodyClass).addClass($(this).attr('data'));
                var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                if(is_chk.checked == true) {
                    $("body").addClass('rtl_mode');
                    var mode_type = 'Y';
                }else{
                    $("body").removeClass('rtl_mode');
                    var mode_type = 'N';
                }

                var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                if($('input[name="dark_mode"]').is(':checked')){
                    if(toggleSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'd',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }else{
                    if(toggleHcSwitch.checked == true) {
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'hc',
                            }
                        });
                    }else{
                        $.ajax({
                            url: "{{ route('admin.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                }
            });

            jQuery(".theme-rtl input").on('change',function() {
                if(this.checked) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var mode_type = jQuery(this).attr("value");
                    $("body").addClass('rtl_mode');
                    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                    if($('input[name="dark_mode"]').is(':checked')){
                        if(toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'd',
                                    "mode_type": 'Y',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'Y',
                                }
                            });
                        }
                    }else{
                        if(toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'hc',
                                    "mode_type": 'Y',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'Y',
                                }
                            });
                        }
                    }
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var mode_type = jQuery(this).attr("value");
                    $("body").removeClass('rtl_mode');
                    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                    if($('input[name="dark_mode"]').is(':checked')){
                        if(toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'd',
                                    "mode_type": 'N',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'N',
                                }
                            });
                        }
                    }else{
                        if(toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'hc',
                                    "mode_type": 'N',
                                }
                            });
                        }else{
                            $.ajax({
                                url: "{{ route('admin.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "data_theme": 'l',
                                    "mode_type": 'N',
                                }
                            });
                        }
                    }
                }
            }); 

            var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
            var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
            jQuery(toggleSwitch).on('change',function() {
                if(toggleSwitch.checked == true) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'dark');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'd',
                        }
                    });
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'light');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'l',
                        }
                    });
                }
            });
            jQuery(toggleHcSwitch).on('change',function() {
                if(toggleHcSwitch.checked == true) {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'high-contrast');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'hc',
                        }
                    });
                }else{
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if(is_chk.checked == true) {
                        var mode_type = 'Y';
                    }else{
                        var mode_type = 'N';
                    }
                    jQuery('body').attr('data-theme', 'light');
                    $.ajax({
                        url: "{{ route('admin.auth.setting.update', $setting) }}",
                        type: 'PATCH',
                        data: {
                        "_token": "{{ csrf_token() }}",
                        "theme": theme,
                        "font": font,
                        "mode_type": mode_type,
                        "data_theme": 'l',
                        }
                    });
                }
            });
        }); 
    });
</script>
@endpush