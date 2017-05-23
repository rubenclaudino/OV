@extends('layouts.page')
@section('title', 'Convênio')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: FORM -->
    {{ Form::model($plan, ['route' => ['dentalplans.update', $plan->id], 'method' => 'PUT']) }}

    @include('dentalplans.partials.form')

    {{Form::close()}}
    <!-- end: FORM -->

    </div>
    <!-- end: DIV -->

@endsection

@section('extra_scripts')
    @include('patients.partials.scripts')
@endsection
