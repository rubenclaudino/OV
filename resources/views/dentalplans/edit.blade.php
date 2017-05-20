@extends('layouts.page')
@section('title', 'Convênio')
@section('content')

    <!-- start: ROW -->
    <div class="row" style="margin-top: 15px">

        <!-- start: FORM -->
        {{ Form::model($plan, ['route' => ['dentalplans.update', $plan->id], 'method' => 'PUT']) }}
        @include('dentalplans.partials.form')
        {{Form::close()}}

    </div>

@endsection
