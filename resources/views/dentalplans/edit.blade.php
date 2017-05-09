@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTAINER -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: ROW -->
            <div class="row" style="margin-top: 15px">

                <!-- start: FORM -->
                {{ Form::model($plan, ['route' => ['dentalplans.update', $plan->id], 'method' => 'PUT']) }}

                @include('dentalplans.partials.form')

                {{Form::close()}}

            </div>

        </div>

    </div>

@endsection
