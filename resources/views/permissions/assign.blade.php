@extends('layouts.page')
@section('content')
	<div class="main-content">
		<div class="container">

			<!-- start: MAIN PANEL -->
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top:15px;">
				@foreach($role as $r)
					@if($r->id != '1')

						    <!-- start: OBJECT PANEL -->
					             <div class="panel panel-default">

						<!-- start: PANEL TITLE -->
									 <div class="panel-heading" role="tab" id="heading{{$r->id}}" style="background: white;padding: 0">
										 <h3 class="custom_header" style="opacity: 1 !important;">
											 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$r->id}}" aria-expanded="true" aria-controls="collapse{{$r->id}}">{{$r->name}}</a>
										  </h3>
									 </div>
						<!-- end: PANEL TITLE -->

									 <!-- start: PANEL BODY -->
						<div id="collapse{{$r->id}}" class=" collapse @if($r->id == '2')in @endif">
							<div class="panel-body" style="background: white">
								@foreach($models as $key => $value)
									<div class="col-sm-4">
										<!-- start: PANEL CHILD -->
										<div class="panel panel-default"  style="margin-bottom:15px !important">

											<!-- start: BOX TITLE -->
											<div class="panel-heading" style="background: #ededed"><p style="font-size: large;padding-top: 0px;margin: 0px;color: #4d4d4d">{{ $key }}</p></div>
											<!-- end: BOX TITLE -->

											<!-- start: BOX BODY -->
											<div class="panel-body" style="min-height:150px;max-height:150px;overflow:auto;background: white">
												@if(count($value) == 0)

													   <!-- start: NO MESSAGE BOX -->
														<div class="panel" style="@if(isset($myReminders[0])) display:none; @endif;opacity: 0.5;border-radius: 1px;background-color: #07ACC2">
															<span style="display: inline"><p style="padding: 8px;font-size: medium;color: white"><i class="fa fa-info-circle fa-lg" style="color: white!important;"></i>&nbsp;&nbsp;No permissions set</p></span>
														</div>
														<!-- end: NO MESSAGE BOX -->
												@endif
												@if(count($value) > 1)
													<table class="table table-hover " >
														@foreach($value as $d)
														<?php
															$find = DB::table('permission_role')
																	->where('role_id','=',$r->id)
																	->where('permission_id','=',$d->id)
																	->first();
														?>
															<tr>
																<td class="col-md-10">{{ $d->name }}</td>
																<td class="col-md-2"><input class="clickPermissions pull-right" data-permissionid="{{ $d->id }}" data-roleid="{{ $r->id }}" <?php if(!empty($find)){?> data-id="{{ $find->id }}" <?php } ?> <?php if(!empty($find)){echo "checked";}?>  type="checkbox"></td>
															</tr>
														@endforeach
													</table>
													@else
														@foreach($value as $d)
														<table class="table table-hover " >
														<tr>
															<td class="col-md-10">{{ $d->name }}</td>
															<td class="col-md-2"><input class="clickPermissions pull-right" data-permissionid="{{ $d->id }}" data-roleid="{{ $r->id }}" <?php if(!empty($find)){?> data-id="{{ $find->id }}" <?php } ?> <?php if(!empty($find)){echo "checked";}?>  type="checkbox"></td>
														</tr>
													</table>
														@endforeach
												@endif
											</div>
											<!-- end: BOX BODY -->

										</div>
										<!-- end: PANEL CHILD -->
									</div>
								@endforeach
							</div>
						</div>
									 <!-- end: PANEL BODY -->

					               </div>
							<!-- end: OBJECT PANEL -->

					@endif
				@endforeach
			</div>
			<!-- end: MAIN PANEL -->

		</div>
	</div>
@endsection
