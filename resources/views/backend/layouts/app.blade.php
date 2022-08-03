<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', app_name())</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="{{ url('/')}}/favicon.ico" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- -->
    <!-- MAIN Project CSS file -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
{{--
     * CoreUI BODY options, add following classes to body to change options
     * // Header options
     * 1. '.header-fixed'                   - Fixed Header
     *
     * // Sidebar options
     * 1. '.sidebar-fixed'                  - Fixed Sidebar
     * 2. '.sidebar-hidden'                 - Hidden Sidebar
     * 3. '.sidebar-off-canvas'             - Off Canvas Sidebar
     * 4. '.sidebar-minimized'              - Minimized Sidebar (Only icons)
     * 5. '.sidebar-compact'                - Compact Sidebar
     *
     * // Aside options
     * 1. '.aside-menu-fixed'               - Fixed Aside Menu
     * 2. ''                - Hidden Aside Menu
     * 3. '.aside-menu-off-canvas'          - Off Canvas Aside Menu
     *
     * // Breadcrumb options
     * 1. '.breadcrumb-fixed'               - Fixed Breadcrumb
     *
     * // Footer options
     * 1. '.footer-fixed'                   - Fixed footer 
--}}
<?php 
$setting = App\Models\Auth\Settings::where('id',1)->first();
    if ($setting->theme == 'g') {
        $theme = "theme-green";
    } else if ($setting->theme == 'p') {
        $theme = "theme-purple";
    } else if ($setting->theme == 'c') {
        $theme = "theme-cyan";
    } else if ($setting->theme == 'o') {
        $theme = "theme-orange";
    } else if ($setting->theme == 'r') {
        $theme = "theme-red";
    } else if ($setting->theme == 'bh') {
        $theme = "theme-blush";
    } else {
         $theme = "theme-blue";
    }

    if ($setting->font == 'n') {
        $font = "font-nunito";
    } else if ($setting->font == 'u') {
        $font = "font-ubuntu";
    } else if ($setting->font == 'r') {
        $font = "font-raleway";
    } else {
        $font = "font-IBMplex";
    }

    if ($setting->data_theme == 'd') {
        $data_theme = "dark";
    } else if ($setting->data_theme == 'hc') {
        $data_theme = "high-contrast";
    } else {
        $data_theme = "light";
    }

    if ($setting->mode_type == 'Y') {
        $mode_type = "rtl_mode";
    } else {
        $mode_type = "";
    } 
?>
<body data-theme="{{ $data_theme }}" class="{{ $font }} {{ $mode_type }}">
    <div id="wrapper" class="{{ $theme }}">
        <nav class="navbar navbar-fixed-top">
             @include('backend.includes.header')
        </nav>
        <div id="left-sidebar" class="sidebar">
            @include('backend.includes.sidebar')
        </div>
       
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    @include('includes.partials.messages')
                </div>
                @yield('content')
            </div>
        </div>
    </div><!--app-body-->
    @yield('modals')
    <!-- Scripts -->
    @stack('before-scripts')  
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>      
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>      

    <!-- page js file -->
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script> 
    @stack('after-scripts')
</body>
</html>

