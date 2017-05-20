@extends('layouts.page')
@section('content')

        <!-- start: MAIN CONTENT -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: MAIN INFORMATION PANEL -->
        <div class="panel panel-white" style="margin-top:8px;">

            <!-- start: FORM HEADER -->
            <div class="panel-heading header_t1" style="padding-bottom: 0;margin-bottom: 0">
                <h2 class="table_title">{{ $title }} <br>
                    <small style="color: silver">{{ $subtitle }}</small>
                </h2>
                <hr class="custom_sep" style="padding-bottom: 0;margin-bottom: 0">
            </div>
            <!-- end: FORM HEADER -->

            <!-- start: PANEL BODY -->
            <div class="panel-body">

                <!-- start: FORM -->
                <form id="registerDentist" method="POST" action="{{ url('/dentists') }}" autocomplete="off"
                      enctype="multipart/form-data">

                    <!-- start: ERROR REPORT -->
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Houve algum erro com os dados.
                            <br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                                <!-- end: ERROR REPORT -->

                        <!-- start: FORM METHODS -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                        {{ Form::hidden('clinic_id', Auth::user()->clinic_id) }}
                                <!-- end: FORM METHODS -->

                        @if(!Auth::user()->isAdmin())
                                <!-- start: CLINIC SELECT -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="clearfix"></div>
                                <input type="hidden" name="clinic_id" value="<?php echo $user->clinic_id;?>">

                                <label for="fname">Selecione a Clínica</label>
                                {!! Form::select('clinic_id', $clinics, 'Select A Clinic',['class' => 'form-control']) !!}
                                <div class="clearfix"></div>

                            </div>

                        </div>
                        <!-- end: CLINIC SELECT -->
                        @endif

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="custom_header" style="font-size: 140%">Detalhes do Login</h2>
                        </div>

                        <!-- start: SELECT ROLE -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="role">Tipo Usuário</label>
                                <select class="form-control" name="role">
                                    <option name="dentist" value="dentist">Dentista Limitado</option>
                                    <option name="dentistadmin" value="dentistadmin">Dentista Administrador</option>
                                </select>
                            </div>
                        </div>
                        <!-- end: SELECT ROLE -->

                        <!-- start: EMAIL -->
                        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="text"
                                       value="{{ old('email') }}">
                            </div>
                        </div>
                        <!-- end: EMAIL -->

                        <div class="clearfix"></div>

                        <!-- start: PASSWORD -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password"
                                       value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input class="form-control" id="confirm_password" name="password_confirmation"
                                       type="password" value="{{ old('confirm_password') }}">
                            </div>
                        </div>
                        <!-- end: PASSWORD -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="custom_header" style="font-size: 140%">Dados Pessoais</h2>
                        </div>

                        <!-- start: FIRST NAME -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="first_name">Nome</label>
                                <input class="form-control" id="first_name" name="first_name" type="text"
                                       value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <!-- end: FIRST NAME -->

                        <!-- start: SURNAME -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="last_name">Sobrenome</label>
                                <input class="form-control" id="last_name" name="last_name" type="text"
                                       value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <!-- end: SURNAME -->

                        <!-- start: GENDER -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="gender">Sexo</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option name="gender" value="0">Masculino</option>
                                    <option name="gender" value="1">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <!-- end: GENDER -->

                        <!-- start: DOB -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="dob">Data de Nascimento</label>
                                <input class="form-control datepicker" id="date_of_birth" name="date_of_birth"
                                       type="text"
                                       value="{{ old('date_of_birth') }}" style="margin-bottom:0;">
                            </div>
                        </div>
                        <!-- end: DOB -->

                        <div class="clearfix"></div>

                        <!-- start: CPF -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input class="form-control" id="cpf" name="cpf" type="text" value="{{ old('cpf') }}">
                            </div>
                        </div>
                        <!-- end: CPF -->

                        <!-- start: RG -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <input class="form-control" id="rg" name="rg" type="text" value="{{ old('rg') }}">
                            </div>
                        </div>
                        <!-- end: RG -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="custom_header" style="font-size: 140%">Dados Profissionais</h2>
                        </div>

                        <!-- start: CRO -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="cro">CRO</label>
                                <input class="form-control" id="cro" name="cro" type="text" value="{{ old('cro') }}">
                            </div>
                        </div>
                        <!-- end: CRO -->

                        <!-- start: SPECIALTIES -->
                        <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="honors">Especialidades</label>
                                <input class="form-control" id="honors" name="honors" type="text"
                                       value="{{ old('honors') }}">
                            </div>
                        </div>
                        <!-- end: SPECIALTIES -->

                        <div class="clearfix"></div>

                        <!-- start: RENT -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="resident_in_clinic" value="1">&nbsp;&nbsp;
                                    Aluga Sala
                                </label>
                            </div>
                        </div>
                        <!-- end: RENT -->

                        <!-- start: WHATSAPP -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="uses_whatsapp" value="1">&nbsp;&nbsp;
                                    Uso Whatsapp
                                </label>
                            </div>
                        </div>
                        <!-- end: WHATSAPP -->

                        <!-- start: PHONECALLS -->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="accept_calls" value="1">&nbsp;&nbsp;
                                    Aceito ligações no Celular
                                </label>
                            </div>
                        </div>
                        <!-- end: PHONECALLS -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="custom_header" style="font-size: 140%">Contato</h2>
                        </div>

                        <!-- start: LANDLINE -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="phone_landline">Telefone</label>
                                <input class="form-control" id="phone_landline" name="phone_landline" type="text"
                                       value="{{ old('phone_landline') }}">
                            </div>
                        </div>
                        <!-- end: LANDLINE -->

                        <!-- start: WHATSAPP -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="whatsapp_number">Whatsapp</label>
                                <input class="form-control" id="whatsapp_number" name="whatsapp_number" type="text"
                                       value="{{ old('whatsapp_number') }}">
                            </div>
                        </div>
                        <!-- end: WHATSAPP -->

                        <!-- start: CEL 1 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="celular_1">Celular 1</label>
                                <input class="form-control" id="phone_1" name="phone_1" type="text"
                                       value="{{ old('phone_1') }}">
                            </div>
                        </div>
                        <!-- end: CEL 1 -->

                        <!-- start: CEL 2 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="celular_2">Celular 2</label>
                                <input class="form-control" id="phone_2" name="phone_2" type="text"
                                       value="{{ old('phone_2') }}">
                            </div>
                        </div>
                        <!-- end: CEL 2 -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="custom_header" style="font-size: 140%">Endereço</h2>
                        </div>

                        <!-- start: ROAD -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="street_address">Rua</label>
                                <input class="form-control" id="address" name="address" type="text"
                                       value="{{ old('address') }}">
                            </div>
                        </div>
                        <!-- end: ROAD -->

                        <!-- start: NUMBER -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="number">Número</label>
                                <input class="form-control" id="street_number" name="street_number" type="text"
                                       value="{{ old('street_number') }}">
                            </div>
                        </div>
                        <!-- end: NUMBER -->

                        <!-- start: ZIP -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="zip">CEP</label>
                                <input class="form-control" id="zip_code" name="zip_code" type="text"
                                       value="{{ old('zip_code') }}">
                            </div>
                        </div>
                        <!-- end: ZIPS -->

                        <!-- start: BOROUGH -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="borough">Bairro</label>
                                <input class="form-control" id="borough" name="borough" type="text"
                                       value="{{ old('borough') }}">
                            </div>
                        </div>
                        <!-- end: BOROUGH -->

                        <!-- start: CITY -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" name="city" type="text" value="{{ old('city') }}">
                            </div>
                        </div>
                        <!-- end: CITY -->

                        <!-- start: STATE -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" id="state" name="state" type="number"
                                       value="{{ old('state') }}">
                            </div>
                        </div>
                        <!-- end: STATE -->

                        <!-- start: OBS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="observation">Observação</label>
                                <input class="form-control" id="observation" name="observation" type="text"
                                       value="{{ old('observation') }}">
                            </div>
                        </div>
                        <!-- end: OBS -->

                        <div class="clearfix"></div>

                        <!-- start: BUTTON INTERACTIONS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                            <hr class="custom_sepg">

                            <div class="form-group">
                                <button class="btn btn-success btn-submit" data-loading-text="Salvando..."
                                        type="submit">
                                    Salvar Cadastro
                                </button>
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
