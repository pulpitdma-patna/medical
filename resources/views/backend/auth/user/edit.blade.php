@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    {{ html()->modelForm($user, 'PATCH', route('admin.auth.user.update', $user->id))->class('form-horizontal')->open() }}
        {!! Breadcrumbs::render() !!}
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>@lang('labels.backend.access.users.edit') </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    {{ html()->text('first_name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.users.first_name'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    {{ html()->text('last_name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.users.last_name'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ html()->email('email')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.users.email'))
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>@lang('labels.backend.access.users.table.roles')</strong>
                                    @if($roles->count())
                                        @foreach($roles as $role)
                                            <div class="fancy-checkbox">
                                                {{ html()->label(
                                                        html()->checkbox('roles[]', in_array($role->name, $userRoles), $role->name)
                                                                ->class('switch-input')
                                                                ->id('role-'.$role->id)
                                                        . '<span class="switch-slider" data-checked="on" data-unchecked="off"></span>')
                                                    ->class('switch switch-label switch-pill switch-primary mr-2')
                                                    ->for('role-'.$role->id) }}
                                                {{ html()->label(ucwords($role->name))->for('role-'.$role->id) }}
                                            </div>
                                            <!-- <div>
                                                @if($role->id != 1)
                                                    @if($role->permissions->count())
                                                        @foreach($role->permissions as $permission)
                                                            <i class="fas fa-dot-circle"></i> {{ ucwords($permission->name) }}
                                                        @endforeach
                                                    @else
                                                        @lang('labels.general.none')
                                                    @endif
                                                @else
                                                    @lang('labels.backend.access.users.all_permissions')
                                                @endif
                                            </div> -->
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>@lang('labels.backend.access.users.table.permissions')</strong>
                                    @if($permissions->count())
                                        @foreach($permissions as $permission)
                                            <div class="fancy-checkbox">
                                                {{ html()->label(
                                                        html()->checkbox('permissions[]', in_array($permission->name, $userPermissions), $permission->name)
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
                            <div class="col-sm-12">
                                {{ form_submit(__('buttons.general.crud.update')) }}
                                {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}   
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    {{ html()->closeModelForm() }}
@endsection
