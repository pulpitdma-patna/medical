@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.create'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    {!! Breadcrumbs::render() !!}
    {{ html()->form('POST', route('admin.auth.user.store'))->class('form-horizontal')->open() }}
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>  @lang('labels.backend.access.users.management')
                            <small class="text-muted">@lang('labels.backend.access.users.create')</small></h2>
                </div>
                <div class="body">
                    <div class="input-group mb-3">
                        {{ html()->text('first_name')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.backend.access.users.first_name'))
                            ->attribute('maxlength', 191)
                            ->required()
                            ->autofocus() }}
                    </div>
                    <div class="input-group mb-3">
                         {{ html()->text('last_name')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.backend.access.users.last_name'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                    </div>
                    <div class="input-group mb-3">
                        {{ html()->email('email')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.backend.access.users.email'))
                            ->attribute('maxlength', 191)
                            ->required() }}
                    </div>
                    <div class="input-group mb-3">
                        {{ html()->password('password')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.backend.access.users.password'))
                            ->required() }}
                    </div>
                     <div class="input-group mb-3">
                        {{ html()->password('password_confirmation')
                            ->class('form-control')
                            ->placeholder(__('validation.attributes.backend.access.users.password_confirmation'))
                            ->required() }}
                    </div>
                    <div class="input-group mb-3">
                        <select name="timezone" id="timezone" class="form-control" required="required">
                            @foreach (timezone_identifiers_list() as $timezone)
                                <option value="{{ $timezone }}" {{ $timezone == config('app.timezone') ? 'selected' : '' }} {{ $timezone == old('timezone') ? ' selected' : '' }}>{{ $timezone }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="fancy-checkbox">
                            {{ html()->checkbox('active', true)->class('switch-input') }}
                            <span class="switch-slider" data-checked="on" data-unchecked="off"></span>
                            {{ html()->label(__('validation.attributes.backend.access.users.active'))->class('form-control-label')->for('active') }}
                        </label>
                    </div>
                    <div class="input-group mb-3">
                        <label class="fancy-checkbox">
                            {{ html()->checkbox('confirmed', true)->class('switch-input') }}
                            <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                            {{html()->label(__('validation.attributes.backend.access.users.confirmed'))->class('form-control-label')->for('confirmed') }}
                        </label>
                    </div>
                    @if(! config('access.users.requires_approval'))
                       <div class="input-group mb-3">
                            <label class="fancy-checkbox">
                               {{ html()->checkbox('confirmation_email')->class('switch-input') }}
                                <span class="switch-slider" data-checked="yes" data-unchecked="no"></span>
                                {{ html()->label(__('validation.attributes.backend.access.users.send_confirmation_email') . '<br/>' . '<small>' .  __('strings.backend.access.users.if_confirmed_off') . '</small>')->class('form-control-label')->for('confirmation_email') }}
                            </label>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <strong>@lang('labels.backend.access.users.table.roles')</strong>
                            @if($roles->count())
                                @foreach($roles as $role)
                                    <div class="fancy-checkbox">
                                        {{ html()->label(
                                                html()->checkbox('roles[]', old('roles') && in_array($role->name, old('roles')) ? true : false, $role->name)
                                                      ->class('switch-input')
                                                      ->id('role-'.$role->id)
                                                . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                            ->class('switch switch-label switch-pill switch-primary mr-2')
                                            ->for('role-'.$role->id) }}
                                                {{ html()->label(ucwords($role->name))->for('role-'.$role->id) }}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <strong>@lang('labels.backend.access.users.table.permissions')</strong>
                           @if($permissions->count())
                                @foreach($permissions as $permission)
                                    <div class="fancy-checkbox">
                                        {{ html()->label(
                                                html()->checkbox('permissions[]', old('permissions') && in_array($permission->name, old('permissions')) ? true : false, $permission->name)
                                                      ->class('switch-input')
                                                      ->id('permission-'.$permission->id)
                                                    . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                ->class('switch switch-label switch-pill switch-primary mr-2')
                                            ->for('permission-'.$permission->id) }}
                                        {{ html()->label(ucwords($permission->name))->for('permission-'.$permission->id) }}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {{ form_submit(__('buttons.general.crud.create')) }}
                    {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }} 
                </div>
            </div>
        </div>
    </div>
    {{ html()->form()->close() }}
@endsection
