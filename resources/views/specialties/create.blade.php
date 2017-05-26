@extends('layouts.page')
@section('title', 'Especialidade')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: FORM -->
    {{ Form::open(['route' => 'specialties.store', 'class' => 'form']) }}

    @include('specialties.partials.form')

    {{Form::close()}}
    <!-- end: FORM -->

    </div>
    <!-- end: DIV -->

@endsection

@section('extra_scripts')
    @include('specialties.partials.scripts')
@endsection

