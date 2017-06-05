@extends('layouts.page')
@section('title', 'Pacientes')
@section('content')

    <!-- start: MAIN DIV -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
         style="margin-top: 20px;font-size: 1.1em;margin-left: -10px">

        @include('patients.partials.tabs')

        {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        @include('patients.partials.form')
        {!! Form::close()!!}

    </div>
    <!-- end: MAIN DIV -->

@endsection

@section('extra_scripts')
    @include('patients.partials.scripts')
@endsection