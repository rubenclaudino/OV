@extends('layouts.page', ['title' => $user->first_name . ' ' . $user->last_name])
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
                    @include('errors.list')

                    {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) }}
                    @include('users.partials.form')
                    {{ Form::close() }}

                </div>
                <!-- end: BODY INFORMATION -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: MAIN CONTAINER -->

    </div>

@endsection
