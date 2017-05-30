@extends('layouts.page')
@section('title')
    Novo Cadastro
@endsection
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-12 col-md-12">

                    <div class="col-lg-12 col-md-12">

                        <h2 class="table_title">Cadastro de Usuário<br>
                            <small style="color: #dddddd">Informação do seu cadastro</small>
                        </h2>

                        <hr class="custom_sep">

                    </div>

                </div>

            </div>
            <!-- end: PANEL HEAD -->

            <!-- start: BODY INFORMATION -->
            <div class="panel-body">

                @include('errors.list')

                {{ Form::open(['route' => ['users.store'], 'method' => 'POST', 'class' => 'form', 'enctype' => 'multipart/form-data']) }}
                @include('users.partials.form')
                {{ Form::close() }}

            </div>
            <!-- end: BODY INFORMATION -->

        </div>
        <!-- end: MAIN INFORMATION PANEL -->

    </div>
    <!-- end: DIV -->

@endsection
