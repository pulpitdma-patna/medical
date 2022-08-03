@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="block-header">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h2>{{ __('labels.backend.access.users.management') }}</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
				<li class="breadcrumb-item">Dashboard</li>
				<li class="breadcrumb-item active">Users</li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="d-flex flex-row-reverse">
				<div class="page_action">
					<a href="{{ route('admin.auth.user.create') }}" class="btn btn-secondary" >Create User</a>
				</div>
				<div class="p-2 d-flex">
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body table-responsive social_media_table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>@lang('labels.backend.access.users.table.last_name')</th>
                            <th>@lang('labels.backend.access.users.table.first_name')</th>
                            <th>@lang('labels.backend.access.users.table.email')</th>
                            <th>@lang('labels.backend.access.users.table.confirmed')</th>
                            <th>@lang('labels.backend.access.users.table.roles')</th>
                            
                            <th>@lang('labels.backend.access.users.table.last_updated')</th>
                            <th>Status</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><span class="list-name">{{ $user->last_name }}</span>
                                </td>
                                <td>{{ ucwords($user->first_name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
                                <td>{{ $user->roles_label }}</td>
                                <td>{{ $user->updated_at->diffForHumans() }}</td>
								<td>
								@if($user->active == 1)
									<span class="badge badge-success">Active</span>
								@else
									<span class="badge badge-danger">Inactive</span>
								@endif
								</td>
                                <td class="btn-td">@include('backend.auth.user.includes.actions', ['user' => $user])</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-7">
                    <div class="float-left">
                        {!! $users->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $users->total()) }}
                    </div>
                </div><!--col-->

                <div class="col-5">
                    <div class="float-right">
                        {!! $users->render() !!}
                    </div>
                </div><!--col-->
            </div>
                
        </div>  
    </div>
</div>
@endsection
