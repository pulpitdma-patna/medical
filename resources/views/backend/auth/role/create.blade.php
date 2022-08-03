@extends('backend.layouts.app')

@section('title', __('labels.backend.access.roles.management') . ' | ' . __('labels.backend.access.roles.create'))

@section('content')
{!! Breadcrumbs::render() !!}

{{ html()->form('POST', route('admin.auth.role.store'))->class('form-horizontal')->open() }}
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>@lang('labels.backend.access.roles.management')</strong><small>@lang('labels.backend.access.roles.create')</small></h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ html()->text('name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.roles.name'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                             {{html()->label(__('validation.attributes.backend.access.roles.associated_permissions'))
                                    ->class(' form-control-label')
                                    ->for('permissions') }}
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
                        <div class="col-sm-12">
                            {{ form_submit(__('buttons.general.crud.create')) }}
                            {{ form_cancel(route('admin.auth.role.index'), __('buttons.general.cancel')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{ html()->form()->close() }}
@endsection
