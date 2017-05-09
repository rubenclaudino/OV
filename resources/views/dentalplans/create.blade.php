@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: DIV -->
            <div style="margin: 15px 2px">

                <!-- start: FORM -->
            {{ Form::open(['route' => 'dentalplans.store', 'class' => 'form']) }}

            @include('dentalplans.partials.form')

            {{Form::close()}}
            <!-- end: FORM -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
