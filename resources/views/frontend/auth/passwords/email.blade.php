@extends('frontend.layouts.login')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="{{ url('/') }}/assets/images/logo-white.svg" alt="Iconic">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Recover my password</p>
                </div>
                {{ html()->form('POST', route('frontend.auth.password.email.post'))->class('form-auth-small')->open() }}
                    <div class="body">
                        <p>Please enter your email address below to receive instructions for resetting password.</p>
                        <form class="form-auth-small" action="index.html">
                            <div class="form-group">                                    
                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.frontend.email'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div>
                             {{ form_submit(__('labels.frontend.passwords.send_password_reset_link_button'),'btn btn-primary btn-lg btn-block') }}
                             <div class="bottom">
                                <span class="helper-text">Know your password? <a href="{{url('login')}}">Login</a></span>
                            </div>
                        </form>
                    </div>
                {{ html()->form()->close() }}
            </div>
        </div>
    </div>
</div>
@endsection
