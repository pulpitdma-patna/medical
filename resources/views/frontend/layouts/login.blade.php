<!DOCTYPE html>
@if(App::getLocale() == 'en')
    <html lang="{{ app()->getLocale() }}">
@else
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@endif
    <head>
        <title>@yield('title', app_name())</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
        <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

        <link rel="icon" href="{{ url('/')}}/favicon.ico" type="image/x-icon">
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('/') }}/assets/vendor/font-awesome/css/font-awesome.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/main.css">   
        @stack('after-styles')    
    </head>
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
    ?>
    <body data-theme="{{ $data_theme }}" class="{{ $font }}">
        <div id="wrapper" class="{{ $theme }}">
                @include('includes.partials.messages')
                @yield('content')
         </div><!-- wrapper -->
    </body>
</html>
