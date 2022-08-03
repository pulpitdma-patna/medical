@extends('backend.layouts.app')
@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))
@section('content')

<div class="block-header">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<h2>{{ trans("Language Settings") }}</h2>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
				<li class="breadcrumb-item">Dashboard</li>
				<li class="breadcrumb-item active">{{ trans("Language") }}</li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="d-flex flex-row-reverse">
				<div class="page_action">
					<a href="{{ route('admin.auth.LanguageSetting.add') }}" class="btn btn-secondary" >{{ trans("Add New ") }}{{ $sectionNameSingular }}</a>
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
                            <th>Title</th>
                            <th>String</th>
                            <th>Language Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!$result->isEmpty())
							@foreach($result as $results)
								<tr class="items-inner">
									<td data-th='{{ trans("Title") }}'>{{ $results->msgid }}</td>
									
									<td data-th='{{ trans("String") }}'>
											<div id="actual_div_<?php echo $results->id; ?>">
													{{ stripslashes($results->msgstr) }}
											</div>
											<div style="display:none;" id="edit_div_<?php echo $results->id; ?>">
															&nbsp;
											</div>
									
									</td>
										
									<td data-th='{{ trans("language_code") }}'>{{ $results->locale }}</td>
									<td>
									<a title="Edit" href="javascript:void(0);" class="edit_button btn btn-primary"
									id="edit_<?php echo $results->id?>" >Edit</span>
									
									</td>
								</tr>
							@endforeach
						@else
							<tr>
								<td class="alignCenterClass" colspan="4" >{{ trans("No record found") }}</td>
							</tr>
						@endif
                    </tbody>
                </table>
                <div class="col-7">
                    <div class="float-left">
                        {!! $result->total() !!} {{ trans_choice('labels.backend.access.users.table.total', $result->total()) }}
                    </div>
                </div><!--col-->

                <div class="col-5">
                    <div class="float-right">
                        {!! $result->render() !!}
                    </div>
                </div><!--col-->
            </div>
                
        </div>  
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(function(){
		/**
		 * Function to change status
		 *
		 * @param null
		 *
		 * @return void
		 */
		$(document).on('click', '.default_any_item', function(e){ 
			e.stopImmediatePropagation();
			url = $(this).attr('href');
			bootbox.confirm("Are you sure want to make default this language ?",
			function(result){
				if(result){
					window.location.replace(url);
				}
			});
			e.preventDefault();
		});
	});
	
	
function edit(){
	alert("yes");
}
$(function(){
	/**
	 * Function to edit string
	 *
	 * @param null
	 *
	 * @return void
	 */
	$("a.edit_button").click(function(e){
		e.preventDefault();
		var btn			=	$(this);
		btn.button('loading');
		var id			=	this.id.replace('edit_','');
		alert(id);
		var save_url	=	this.href; 
		//alert(save_url);return false;
		$("#actual_div_"+id).hide();
		$("#edit_div_"+id).show();
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url:this.href,
			success:function(r){ 
				btn.button('reset');
				$("#edit_div_"+id).empty().html(r);
				$("#edit_div_"+id).find("#cancel").click(function(e){
					$("#actual_div_"+id).show();
					$("#edit_div_"+id).hide();
					return false;
				});
				$("#edit_div_"+id).find("#editgroup").click(function(e){ 
					$("#editgroup").button('loading');
					if($("#edit_msgstr").val()==''){
						$("#edit_msgstr").css( {'color':'#EE5F5B','border-color':'#EE5F5B'});
						$("#editgroup").button('reset');
						return false;
					}else{  
						var msg =  $("#edit_msgstr").val(); 
						$.ajax({ 
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
							url:"{{{ URL::to('admin/auth/language-settings/edit-setting/') }}}",
							type: "POST",
							data: {'id':id,'msgstr':msg},
							success: function(r){ 
								window.location.href	=	window.location.href;
								return false;
							}
						});	
					}
				});
			}
		});
		return false;
	});
});
</script>
@endsection
