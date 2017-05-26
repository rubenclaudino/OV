@extends('layouts.page')
@section('title', 'Especialidade')
@section('content')

    <!-- start: ROW -->
    <div class="row" style="margin-top: 15px">

        <!-- start: FORM -->
        {{ Form::model($speciality, ['route' => ['specialties.update', $speciality->id], 'method' => 'PUT']) }}

        @include('specialties.partials.form')

        {{Form::close()}}

    </div>

@endsection

