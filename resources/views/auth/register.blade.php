@extends('layouts.auth')
@section('content')

    <style>
        h2{font-size: 34px;padding: 0;margin: 0}
        h3{font-size: 18px;}
        label.error{color:#E62117 !important;width:100%;float:left;text-align: right;padding-right:15px;font-size: 10px !important;}
    </style>

    <!-- start: MAIN BODY -->
	<body class="login">

    <!-- start: ROW -->
		<div class="row">

            <!-- start: DIV -->
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">

                <div class="logo">
					<img src="{{ url('/')}}/images/logox.png" alt="Odontovision" style="width:50px;">
				</div>

				<?php
				$bodyTypes = App\BodyTypes::pluck('title','id');
		      $states    = App\State::pluck('title','id');
		      $borough   = App\Borough::pluck('title','id');
				?>

				<!-- start: MAIN DIV -->
				<div class="box-login" style="padding: 25px !important;border-radius: 1px">

               <h2>Clínica<br> <small style="color: grey">Criar cadastro da sua clínica</small></h2>
                    <hr class="custom_sep">

               <form id="registerClinic" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}

                   <!-- start: CLINIC DETAILS -->
                  <h3 class="custom_header">&nbsp;&nbsp;&nbsp;&nbsp;Clinic Details</h3>

                      <!-- start: CLINIC OR POINT NAME -->
                      <div class="col-md-6 col-lg-6">
                       <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                           <label for="name" class="col-md-5 control-label">Establishment Name</label>
                           <div class="col-md-7">
                               <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                               @if ($errors->has('name'))
                                   <span class="help-block">
   										  <strong>{{ $errors->first('name') }}</strong>
   									 </span>
                               @endif
                           </div>
                       </div>
                   </div>
                      <!-- end: CLINIC OR POINT NAME -->

                      <!-- start: LOGO -->
                      <div class="col-md-6">
                          <div class="form-group">
                              <input id="clinic_image" type="file" class="" name="clinic_image">
                          </div>
                      </div>
                      <!-- end: LOGO -->

                      <div class="clearfix"></div>

                      <!-- start: CNPJ OR CPF -->
                      <div class="col-md-6">
                       <div class="form-group {{ $errors->has('cpf') ? ' has-error' : '' }}">
                           <label for="name" class="col-md-5 control-label">CNPJ or CPF</label>
                           <div class="col-md-7">
                               <input id="cpf" type="text" class="form-control" name="cpf" placeholder="CPF"  value="{{ old('cpf') }}">
                               @if ($errors->has('cpf'))
                                   <span class="help-block">
   										  <strong>{{ $errors->first('cpf') }}</strong>
   									 </span>
                               @endif
                           </div>
                       </div>
                       </div>
                      <!-- end: CNPJ OR CPF -->

                      <!-- end: CLINIC DETAILS -->

                  <div class="clearfix"></div>

                      <!-- start: ADMIN DETAILS -->
                  <h3 class="custom_header">&nbsp;&nbsp;&nbsp;&nbsp;Admin Details</h3>

                      <!-- start: EMAIL -->
                  <div class="col-md-6">
                     <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                           <input id="email" type="text" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}">
                           @if ($errors->has('email'))
   									 <span class="help-block">
   										  <strong>{{ $errors->first('email') }}</strong>
   									 </span>
   								@endif
                        </div>
                     </div>
                  </div>
                      <!-- end: EMAIL -->

                      <div class="clearfix"></div>

                      <!-- start: PASSWORD -->
                  <div class="col-md-6">
                     <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                           <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                           @if ($errors->has('password'))
   									 <span class="help-block">
   										  <strong>{{ $errors->first('password') }}</strong>
   									 </span>
   								@endif
                        </div>
                     </div>
                  </div>
                      <!-- start: PASSWORD -->

                      <!-- start: CONFIRM PASSWORD -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="password_confirmation" class="col-md-3 control-label">Confirm</label>
                        <div class="col-md-9">
                           <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                        </div>
                     </div>
                  </div>
                      <!-- start: CONFIRM PASSWORD -->

                      <!-- end: ADMIN DETAILS -->

                  <div class="clearfix"></div>

                      <!-- start: ADDRESS DETAILS -->
                  <h3 class="custom_header">&nbsp;&nbsp;&nbsp;&nbsp;Address Details</h3>

                      <!-- start: ROAD -->
                         <div class="col-md-6">
                           <div class="form-group {{ $errors->has('street_address') ? ' has-error' : '' }}">
                              <label for="street_address" class="col-md-3 control-label">Road/Avenue</label>
                              <div class="col-md-9">
                                 <input id="street_address" type="text" class="form-control" placeholder="Street Address" name="street_address"  value="{{ old('street_address') }}">
                                 @if ($errors->has('street_address'))
         									 <span class="help-block">
         										  <strong>{{ $errors->first('street_address') }}</strong>
         									 </span>
         								@endif
                              </div>
                           </div>
                        </div>
                      <!-- end: ROAD -->

                      <!-- start: NUMBER -->
                         <div class="col-md-6">
                           <div class="form-group  {{ $errors->has('number') ? ' has-error' : '' }}">
                              <label for="number" class="col-md-3 control-label">Number</label>
                              <div class="col-md-9">
                                 <input id="number" type="text" class="form-control" placeholder="Number" name="number"  value="{{ old('number') }}">
                                 @if ($errors->has('number'))
         									 <span class="help-block">
         										  <strong>{{ $errors->first('number') }}</strong>
         									 </span>
         								@endif
                              </div>
                           </div>
                            </div>
                      <!-- end: NUMBER -->

                      <!-- start: STATE -->
                         <div class="col-md-6">
                                  <div class="form-group  {{ $errors->has('state_id') ? ' has-error' : '' }}">
                              <label for="state" class="col-md-3 control-label">State</label>
                              <div class="col-md-9">
                                 {!! Form::select('state_id',$states,old('state_id'),['class' => 'selectpicker select2picker select_state form-control','placeholder' => 'Select a State']) !!}
                                 @if ($errors->has('state_id'))
         									 <span class="help-block">
         										  <strong>{{ $errors->first('state_id') }}</strong>
         									 </span>
         								@endif
                              </div>
                           </div>
                            </div>
                      <!-- end: STATE -->

                      <!-- start: CITY -->
                         <div class="col-md-6">
                                   <div class="form-group {{ $errors->has('city_id') ? ' has-error' : '' }}">
                              <label for="city" class="col-md-3 control-label">City</label>
                              <div class="col-md-9">
                                 {!! Form::select('city_id',$states,old('city_id'),['class' => 'selectpicker select2picker select_city form-control','placeholder' => 'Select a City']) !!}
                                 @if ($errors->has('city_id'))
         									 <span class="help-block">
         										  <strong>{{ $errors->first('city_id') }}</strong>
         									 </span>
         								@endif
                              </div>
                           </div>
                                </div>
                      <!-- end: CITY -->

                      <!-- start: BOROUGH -->
                         <div class="col-md-6">
									<div class="form-group {{ $errors->has('borough_id') ? ' has-error' : '' }}">
                              <label for="borough" class="col-md-3 control-label">Borough</label>
                              <div class="col-md-9">
                                 {!! Form::select('borough_id',$borough,old('borough_id'),['class' => 'selectpicker select2picker select_borough form-control','placeholder' => 'Select a Borough']) !!}
                                 @if ($errors->has('borough_id'))
         									 <span class="help-block">
         										  <strong>{{ $errors->first('borough_id') }}</strong>
         									 </span>
         								@endif
                              </div>
                           </div>
                                    </div>
                      <!-- end: BOROUGH -->

                      <!-- end: ADDRESS DETAILS -->

                  <div class="clearfix"></div>

                      <!-- start: CONTACT DETAILS -->
                      <h3 class="custom_header">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h3>

                      <!-- start: LANDLINE -->
                  <div class="col-md-6">
                     <div class="form-group {{ $errors->has('phone_landline') ? ' has-error' : '' }}">
                        <label for="landline" class="col-md-3 control-label">Landline</label>
                        <div class="col-md-9">
                           <input id="landline" type="text" class="form-control"  placeholder="Landline" name="phone_landline"  value="{{ old('phone_landline') }}">
                           @if ($errors->has('phone_landline'))
   									 <span class="help-block">
   										  <strong>{{ $errors->first('phone_landline') }}</strong>
   									 </span>
   								@endif
                        </div>
                     </div>
                  </div>
                      <!-- end: LANDLINE -->

                      <div class="clearfix"></div>

                      <!-- start: CEL 1 -->
                  <div class="col-md-6">
                     <div class="form-group {{ $errors->has('celular_1') ? ' has-error' : '' }}">
                        <label for="landline" class="col-md-3 control-label">Cel</label>
                        <div class="col-md-9">
                           <input id="cel" type="text" class="form-control"  placeholder="Cel Number" name="celular_1"  value="{{ old('celular_1') }}">
                           @if ($errors->has('celular_1'))
   									 <span class="help-block">
   										  <strong>{{ $errors->first('celular_2') }}</strong>
   									 </span>
   								@endif
                        </div>
                     </div>
                  </div>
                      <!-- end: CEL 1 -->

                      <!-- start: WHATSAPP -->
                  <div class="col-md-6">
                     <div class="form-group {{ $errors->has('whatsapp_number') ? ' has-error' : '' }}">
                        <label for="landline" class="col-md-3 control-label">WhatsApp</label>
                        <div class="col-md-9">
                           <input id="whats_app" type="text" class="form-control"  placeholder="Whatsapp" name="whatsapp_number"  value="{{ old('whatsapp_number') }}">
                           @if ($errors->has('whatsapp_number'))
   									 <span class="help-block">
   										  <strong>{{ $errors->first('whatsapp_number') }}</strong>
   									 </span>
   								@endif
                        </div>
                     </div>
                  </div>
                      <!-- end: WHATSAPP -->

                  <div class="clearfix"></div>

                  <hr>

                  <div class="form-group">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-left btn-submit">
                              Register
                          </button>
                      </div>
                  </div>

               </form>

				</div>
				<!-- end: MAIN DIV -->

			</div>
            <!-- end: DIV -->

		</div>
    <!-- end: ROW -->

	</body>
    <!-- end: MAIN BODY -->

@endsection
