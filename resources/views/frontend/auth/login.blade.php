@extends('frontend.layouts.login')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
   <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                   <img src="{{ url('/') }}/assets/images/logo-white.svg" alt="Iconic">
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="body">
                        {{ html()->form('POST', route('frontend.auth.login.post'))->class('form-auth-small')->open() }}
                            <div class="form-group">
                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.email'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            </div>
                            <div class="form-group">
                                {{ html()->password('password')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.password'))
                                    ->required() }}
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>{{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}</span>
                                </label>                                
                            </div>
                            {{ form_submit(__('labels.frontend.auth.login_button'),'btn btn-primary btn-round btn-lg btn-block') }}    
                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('frontend.auth.password.reset') }}">Forgot password ?</a></span>
                            </div>
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
