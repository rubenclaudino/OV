@extends('layouts.page')
@section('title', 'Contato')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: FORM -->
    {{ Form::open(['route' => 'contacts.store', 'class' => 'form']) }}

    @include('contacts.partials.form')

    {{Form::close()}}
    <!-- end: FORM -->

    </div>
    <!-- end: DIV -->

@endsection

@section('extra_scripts')
    @include('contacts.partials.scripts')
@endsection

