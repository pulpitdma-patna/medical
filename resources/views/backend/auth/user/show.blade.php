@extends('backend.layouts.app')

@section('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.view'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
{!! Breadcrumbs::render() !!}
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        @include('backend.auth.user.show.tabs.overview')
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--body-->
        </div><!--card--> 
    </div><!--col-->
</div><!--row-->
@endsection
