@extends('layouts.page')
@section('title', 'Contato')
@section('content')

    <!-- start: ROW -->
    <div class="row" style="margin-top: 15px">

        <!-- start: FORM -->
        {{ Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'PUT']) }}

        @include('contacts.partials.form')

        {{Form::close()}}

    </div>

@endsection

