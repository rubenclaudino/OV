@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">
        <!-- start: CONTAINER -->
        <div class="container">
            <!-- start: MAIN PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;font-size: 1.1em;">
                <!-- start: TAB OPTIONS -->
                <ul class="nav nav-tabs">
                    <!-- start: GENERAL INFO -->
                    <li class="active">
                        <a data-toggle="tab" href="#personal_details">
                            <strong>Geral</strong>
                        </a>
                    </li>
                    <!-- end: GENERAL INFO -->
                    <!-- start: HEALTH -->
                    <li>
                        <a data-toggle="tab" href="#health">
                            <strong>Anamnese</strong>
                        </a>
                    </li>
                    <!-- end: HEALTH -->
                    <!-- start: DENTAL PLAN -->
                    <li id="dentalPlanTitle">
                        <a data-toggle="tab" href="#dentalPlan">
                            <strong>Convênio</strong>
                        </a>
                    </li>
                    <!-- end: DENTAL PLAN -->
                    <!-- start: SPEC - ORT -->
                    <li id="ortoTitle">
                        <a data-toggle="tab" href="#orto">
                            <strong>Ortodontia</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - ORT -->
                    <!-- start: SPEC - PROST -->
                    <li id="prosTitle">
                        <a data-toggle="tab" href="#prosthesis">
                            <strong>Prótese</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - PROST -->
                    <!-- start: SPEC - IMPLANT -->
                    <li id="impTitle">
                        <a data-toggle="tab" href="#implant">
                            <strong>Implantodontia</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - IMPLANT -->
                    <!-- end: EXAMS -->
                    <li>
                        <a data-toggle="tab" href="#exam">
                            <strong>Exames</strong>
                        </a>
                    </li>
                    <!-- end: EXAMS -->
                </ul>
                <!-- end: TAB OPTIONS -->

            {!! Form::open(['route' => 'patients.store', 'class' => 'form', 'id' => 'addPatient', 'enctype' => 'multipart/form-data']) !!}

            <!-- start: TAB CONTENT -->
                <div class="tab-content panel" style="border-radius: 1px">

                    @include('patients.partials.personal_details_tab')

                    {{--
                    @include('patients.partials.health_tab')
                    @include('patients.partials.dental_plan_tab')
                    @include('patients.partials.orto_tab')
                    @include('patients.partials.prosthetics_tab')
                    @include('patients.partials.exams_tab')
--}}
                    @include('patients.partials.button_interactions')
                </div>
                <!-- start: TAB CONTENT -->
                {!! Form::close() !!}
            </div>
            <!-- end: MAIN PANEL -->


        </div>

    </div>

@endsection
