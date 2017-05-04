@extends('layouts.page')
@section('content')

    <div class="main-content">

        <!-- start: MAIN CONTAINER -->
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="panel panel-white" style="margin-top: 10px">

                <!-- start: PAGE HEADER TITLE -->
                <div class="panel-heading" style="padding: 5px 25px">
                    <h1 style="font-weight: lighter"> Meu Cadastro <br>
                        <small style="font-weight: lighter;color: #d1c4e9">Todas informações do seu cadastro</small>
                    </h1>
                    <hr style="border-top: 1px #dddddd solid">
                </div>
                <!-- end: PAGE HEADER TITLE -->

                <!-- start: BODY INFORMATION -->
                <div class="panel-body">

                    {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'id' => 'updateDentist']) }}

                    @if(count($errors))
                        <div class="alert alert-danger">
                            Houve algum erro com o processo.
                            <br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="fname">Nome</label>
                            {{ Form::text('first_name',$user->first_name,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="fname">Sobrenome</label>
                            {{ Form::text('last_name',$user->last_name,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="fname">E-mail</label>
                            {{ Form::text('email',$user->email,array('placeholder' => 'Email usado para seu login','class' => 'form-control','disabled' => 'true')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <label for="fname">Sexo</label>

                            <div class="clearfix">
                                <label>{{ Form::radio('gender', '0') }} Masculino </label> &nbsp;
                                <label>{{ Form::radio('gender', '1') }} Feminino </label>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">
                            <label for="fname">Data de Nascimento</label>
                            {{ Form::text('dob',$user->date_of_birth,array('class' => 'form-control datepicker')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
                            <label for="fname">CPF</label>
                            {{ Form::text('cpf',$user->cpf,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('rg') ? 'has-error' : '' }}">
                            <label for="fname">RG</label>
                            {{ Form::text('rg',$user->rg,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('observation') ? 'has-error' : '' }}">
                            <label for="fname">Observações</label>
                            {{ Form::text('observation',$user->observation,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('cro') ? 'has-error' : '' }}">
                            <label for="fname">CRO</label>
                            {{ Form::text('cro',$user->cro,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group {{ $errors->has('honors') ? 'has-error' : '' }}">
                            <label for="fname">Honors</label>
                            {{ Form::text('honors',$user->honors,array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-md-12 hide">
                        <h3 class="panel_inner_title" style="font-weight: lighter">Preferences e Outras Informações</h3>
                        <hr style="border-top: 1px #dddddd solid;margin-top: -10px">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hide">

                        <div class="form-group {{ $errors->has('resident_in_clinic') ? 'has-error' : '' }}">
                            <label style="font-size: 1.1em">Resident in Clinic
                                &nbsp;&nbsp; {{ Form::checkbox('resident_in_clinic',1) }} </label>
                        </div>

                        <div class="form-group {{ $errors->has('uses_whatapp') ? 'has-error' : '' }}">
                            <label style="font-size: 1.1em">Use Whats App
                                &nbsp;&nbsp; {{ Form::checkbox('uses_whatsapp',1) }} </label>
                        </div>

                        <div class="form-group {{ $errors->has('accept_calls') ? 'has-error' : '' }}">
                            <label style="font-size: 1.1em">Accept Calls
                                &nbsp;&nbsp; {{ Form::checkbox('accept_calls',1) }} </label>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-success btn-submit" data-loading-text="Saving..." type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- end: BODY INFORMATION -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: MAIN CONTAINER -->

    </div>

@endsection
