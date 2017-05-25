@extends('layouts.page')
@section('title', 'Especialidade')
@section('content')

    <!-- start: ROW -->
    <div class="row" style="margin-top: 15px">

        <!-- start: FORM -->
        {{ Form::model($speciality, ['route' => ['specialities.update', $speciality->id], 'method' => 'PUT']) }}

        @include('specialities.partials.form')

        {{Form::close()}}

    </div>

@endsection

