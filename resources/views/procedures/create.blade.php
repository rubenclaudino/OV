@extends('layouts.page')
@section('title', '')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: FORM -->
    {{ Form::open(['route' => 'procedures.store', 'class' => 'form']) }}

    @include('procedures.partials.form')

    {{Form::close()}}
    <!-- end: FORM -->

    </div>
    <!-- end: DIV -->

@endsection

@section('extra_scripts')
    @include('procedures.partials.scripts')
@endsection


