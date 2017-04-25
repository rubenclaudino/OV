@extends('layouts.page')
@section('content')

        <!-- start: MAIN CONTENT -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: MAIN INFORMATION PANEL -->
        <div class="panel panel-white" style="margin-top:8px;">

            <!-- start: PANEL HEADING -->
            <div class="panel-heading header_t1" style="margin-bottom: 0px">
                <h2 class="table_title">Clínica<br>
                    <small style="color: #dddddd">Criar cadastro da sua clínica</small>
                </h2>
                <hr class="custom_sep" style="padding: 0;margin: 0">
            </div>
            <!-- end: PANEL HEADING -->

            <!-- start: PANEL BODY -->
            <div class="panel-body" style="margin-top: 0px;padding-top: 0px">

                <!-- start: FORM -->
                <form method="POST" action="{{ url('/clinic') }}" autocomplete="off" enctype="multipart/form-data">

                    <!-- start: ERRORS -->
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.
                            <br/>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                                <!-- end: ERRORS -->

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- start: CLINIC NAME -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="name">Nome da Clínica</label>
                                <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}">
                            </div>
                        </div>
                        <!-- end: CLINIC NAME -->

                        <!-- start: ROAD -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="street_address">Rua / Avenida</label>
                                <input class="form-control" id="address" name="address" type="text"
                                       value="{{ old('address') }}">
                            </div>
                        </div>
                        <!-- end: ROAD -->

                        <!-- start: ROAD -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="number">Número</label>
                                <input class="form-control" id="street_number" name="street_number" type="text"
                                       value="{{ old('street_number') }}">
                            </div>
                        </div>
                        <!-- end: ROAD -->

                        <!-- start: BOROUGH -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="borough">Bairro</label>
                                <input class="form-control" id="borough" name="borough" type="text"
                                       value="{{ old('borough') }}">
                            </div>
                        </div>
                        <!-- end: BOROUGH -->

                        <!-- start: ZIP -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="zip">CEP</label>
                                <input class="form-control" id="zip_code" name="zip_code" type="text"
                                       value="{{ old('zip_code') }}">
                            </div>
                        </div>
                        <!-- end: ZIP -->

                        <!-- start: CITY -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="city">Cidade</label>
                                <input class="form-control" id="city" name="city" type="text" value="{{ old('city') }}">
                            </div>
                        </div>
                        <!-- end: CITY -->

                        <!-- start: STATE -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="state">Estado</label>
                                <input class="form-control" id="state" name="state" type="number"
                                       value="{{ old('state') }}">
                            </div>
                        </div>
                        <!-- end: STATE -->

                        <div class="clearfix"></div>

                        <!-- start: CLINIC EMAIL -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">Clinic Email</label>
                                <input class="form-control" id="email" name="email" type="text"
                                       value="{{ old('email') }}">
                            </div>
                        </div>
                        <!-- end: CLINIC EMAIL -->

                        <!-- start: CLINIC PHONE -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="fname">Clinic Phone</label>
                                <input class="form-control" id="clinic_phone" name="phone_1" type="text"
                                       value="{{ old('phone_1') }}">
                            </div>
                        </div>
                        <!-- end: CLINIC PHONE -->

                        <div class="clearfix"></div>

                        <!-- start: CLINIC LOGO -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="logo">Clinic Logo</label>
                                <input id="logo" name="logo" value="{{ old('logo') }}" type="file">
                            </div>
                        </div>
                        <!-- end: CLINIC LOGO -->

                        <div class="clearfix"></div>

                        <!-- start: BUTTON INTERACTIONS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                            <hr class="custom_sepg">

                            <div class="form-group">
                                <button class="btn btn-success btn-squared" type="submit">Create Clinic</button>
                            </div>

                        </div>
                        <!-- end: BUTTON INTERACTIONS -->

                </form>
                <!-- end: FORM -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: MAIN INFORMATION PANEL -->

    </div>
    <!-- end: CONTAINER -->

</div>
<!-- end: MAIN CONTENT -->

@endsection
