@extends('layouts.page')
@section('title', 'Procedimento')
@section('content')

    <!-- start: FORM -->
    {{ Form::open(array('route' => 'treatmenttypes.store', 'class' => 'form', 'id' => 'createTreatmentPlan')) }}

    <!-- start: VALIDATION MSGS -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
        </div>
    </div>
    <!-- end: VALIDATION MSGS -->

    <!-- start: MAIN PANEL INFORMATION -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

        <!-- start: TABLE HEADER -->
        <div class="panel-heading header_t1" style="padding: 0px !important;">

            <div class="toolbar row" style="min-height: 100px;background: #f1f1f1 ;border: none;opacity:0.8">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter">Procedimento</h2>
                        <p style="font-size: large;"></p>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right" style="opacity: 0.7">

                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>

                </div>

            </div>

        </div>
        <!-- end: TABLE HEADER -->

        <!-- start: DETAILS TAB -->
        <div id="personal_details" class="tab-pane fade active in">

            <!-- start: ROW -->
            <div class="row" style="padding: 25px">

                <!-- start : ACTIVE -->
                <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="ativo"> Ativo </label>
                        {!! Form::select('status',array('0' => 'Sim','1' => 'Não'),'',['class' => 'form-control']) !!}
                    </div>
                </div>
                <!-- end : ACTIVE -->

                <!-- start : PROCEDURE -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="title"> Procedimento </label>
                        <input class="form-control" id="title" name="title" type="text">
                    </div>
                </div>
                <!-- end : PROCEDURE -->

                <div class="clearfix"></div>

                <!-- start : TISS TREATMENT CODE -->
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="tuss_code"> Código TISS </label>
                        <input class="form-control" id="tuss_code" name="tuss_code" type="text">
                    </div>
                </div>
                <!-- end : TISS TREATMENT CODE -->

                <!-- start : SPECIALITIES -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group ">
                        <label for="pSpec"> Especialidade </label>
                        {!! Form::select('speciality',$speciality,'',['class' => 'form-control']) !!}
                    </div>
                </div>
                <!-- end : SPECIALITIES -->

            </div>
            <!-- end: ROW -->

        </div>
        <!-- end: DETAILS TAB -->

        <!-- start: BUTTON FUNCTIONS-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
             style="padding: 0px;padding-bottom: 15px;padding-left: 26px;padding-right: 26px;margin-top: 0px">

            <hr class="custom_sepg" style="padding: 0px;margin: 0px;margin-bottom: 20px">

            <button type="submit" class="btn btn-success" type="button">
                Cadastrar Procedimento
            </button>

            <button type="button" class="btn btn-danger">
                <a href="{{ url('treatments/treatmentTypes')}}" style="color: white"> Cancelar</a>
            </button>

        </div>
        <!-- end: SBUTTON FUNCTIONS-->

    </div>
    <!-- end: MAIN PANEL INFORMATION -->

    </form>
    <!-- end: FORM -->

@endsection
