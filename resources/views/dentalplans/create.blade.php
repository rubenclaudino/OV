@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="row" style="margin-top: 25px">

                <!-- start: FORM -->
            {{ Form::open(['route' => 'dentalplans.store', 'class' => 'form']) }}

            @include('dentalplans.partials.form')

            {{Form::close()}}
            <!-- end: FORM -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
