@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                 style="font-size: 1.1em;margin-left: -10px;margin-top: 20px;">

                @include('patients.partials.tabs')

                {!! Form::open(['route' => 'patients.store', 'class' => 'form', 'enctype' => 'multipart/form-data']) !!}
                @include('patients.partials.form')
                {!! Form::close() !!}

            </div>
            <!-- end: MAIN PANEL -->

        </div>

    </div>

@endsection
