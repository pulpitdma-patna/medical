@extends('backend.layouts.app')

@section('title', __('labels.backend.access.roles.management') . ' | ' . __('labels.backend.access.roles.edit'))

@section('content')
{!! Breadcrumbs::render() !!}
{{ html()->modelForm($role, 'PATCH', route('admin.auth.role.update', $role))->class('form-horizontal')->open() }}
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>@lang('labels.backend.access.roles.management')</strong><small>@lang('labels.backend.access.roles.edit')</small></h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.backend.access.roles.name'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.backend.access.roles.associated_permissions'))
                                ->class('form-control-label')
                                ->for('permissions') }}
                                @if($permissions->count())
                                    @foreach($permissions as $permission)
                                        <div class="fancy-checkbox">
                                            {{ html()->label(
                                                html()->checkbox('permissions[]', in_array($permission->name, $rolePermissions), $permission->name)
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
                </div>
                {{ form_submit(__('buttons.general.crud.update')) }}
                {{ form_cancel(route('admin.auth.role.index'), __('buttons.general.cancel')) }}
            </div>
        </div>  
    </div>
</div>
{{ html()->closeModelForm() }}
@endsection
