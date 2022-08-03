 <div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            @foreach($breadcrumbs as $breadcrumb)
                @if($breadcrumb->url && $loop->last)
                    <h2>{{ $breadcrumb->title }}</h2>
                 @endif
            @endforeach
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard') }}"><i class="fa fa-dashboard"></i></a></li>    
                @foreach($breadcrumbs as $breadcrumb)
                    @if($breadcrumb->url && !$loop->last)
                        <li class="breadcrumb-item">{{ $breadcrumb->title }}</li>
                    @else
                        <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                    @endif
                @endforeach
                 @yield('')          
            </ul>
        </div>
    </div>
</div>