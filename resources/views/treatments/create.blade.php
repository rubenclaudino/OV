@extends('layouts.page')
@section('title', '')
@section('content')

    <!-- start: TOOLBAR -->
    <div class="toolbar row">
        <div class="col-sm-6 hidden-xs">
            <div class="page-header">
                <h1>Treatments
                    <small></small>
                </h1>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="toolbar-tools pull-right">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <li>
                        <a href="{{ url('/treatmentTypes')}}" class="new-event MyToolbar" data-toggle="modal"
                           data-target="#addTreatmentTypeModal">
                            <i class="fa fa-folder-o"></i> Procedimentos
                        </a>
                    </li>
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <hr class="custom_sep">
    </div>
    <!-- end>: TOOLBAR -->

    <div class="row" style="margin-top: 15px">
        {{ Form::open(array('route' => 'treatmenttypes.store', 'class' => 'form', 'id' => 'createTreatmentPlan')) }}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
            </div>
        </div>

        <!-- start: MAIN PANEL INFORMATION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- start: MAIN TABS -->
            <ul class="nav nav-tabs nav-profile">
                <li class="active">
                    <a data-toggle="tab" href="#personal_details" aria-expanded="true">
                        <strong> Geral </strong>
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#health" aria-expanded="false">
                        <strong> Parâmetros </strong>
                    </a>
                </li>

                <li class="">
                    <a data-toggle="tab" href="#health" aria-expanded="false">
                        <strong> Negotiated Percentages </strong>
                    </a>
                </li>
            </ul>
            <!-- end: MAIN TABS -->

            <!-- start: TAB FORMS -->
            <div class="tab-content">

                <!-- start: DETAILS TAB -->
                <div id="personal_details" class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- start : ACTIVE -->
                            <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="ativo"> Ativo </label>
                                    {!! Form::select('status',array('0' => 'No','1' => 'Yes'),'',['class' => 'form-control selectpicker']) !!}
                                </div>
                            </div>
                            <!-- end : ACTIVE -->
                            <!-- start : PROCEDURE -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="fname"> Procedure Name </label>
                                    <input class="form-control" id="title" name="title" type="text" value="">
                                </div>
                            </div>
                            <!-- end : PROCEDURE -->
                            <!-- start : TISS TREATMENT CODE -->
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="fname2"> Código TISS </label>
                                    <input class="form-control" id="fname" name="tuss_code" type="text"
                                           value="">
                                </div>
                            </div>
                            <!-- end : TISS TREATMENT CODE -->
                            <div class="clearfix"></div>
                            <!-- start : COST -->
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="valor"> Valor </label>
                                    <span class="input-icon">
											      <input id="price" name="price" class="form-control currency"
                                                         type="text">
											      <i class="fa fa-dollar"></i> </span>
                                </div>
                            </div>
                            <!-- end : COST -->
                            <!-- start : SPECIALITIES -->
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <div class="form-group ">
                                    <label for="pSpec"> Especialidade </label>
                                    <input class="form-control" id="speciality" type="text" value=""
                                           name="speciality">
                                </div>
                            </div>
                            <!-- end : SPECIALITIES -->
                            <!-- start : OBSERVATION -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="profession"> Observações </label>
                                    <textarea type="text" class="form-control autosize" id="observation"
                                              name="observation"
                                              style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;"></textarea>
                                </div>
                            </div>
                            <!-- end : OBSERVATION -->
                            <!-- start : ALERT MESSAGE WHEN SELECTED -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="alerta"> Mensagem de Aviso quando esse procedimento for
                                        Selecionado </label>
                                    <textarea type="text" class="form-control autosize" id="alerta"
                                              name="alert_message"
                                              style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;"></textarea>
                                </div>
                            </div>
                            <!-- end : ALERT MESSAGE WHEN SELECTED -->
                        </div>
                    </div>
                </div>
                <!-- end: DETAILS TAB -->

                <!-- start: PARAMETERS TAB -->
                <div id="health" class="tab-pane fade">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- start: BLOCK USER CHANGING PRICE OF PROCEDURE -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="take_drug"> Bloquear alteração de Preço </label>
                                        <br>
                                        {!! Form::select('block_price_alteration',array('0' => 'No','1' => 'Yes'),'',['class' => 'form-control selectpicker']) !!}
                                    </div>
                                </div>
                            </div>
                            <!-- end: BLOCK USER CHANGING PRICE OF PROCEDURE -->
                            <!-- start: PROCEDURE ACCEPTS ONLY PRIVATE PLAN -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="private_plan"> Aceitar somente Particular </label>
                                        <br>
                                        {!! Form::select('private_plan',array('0' => 'No','1' => 'Yes'),'',['class' => 'form-control selectpicker']) !!}
                                    </div>
                                </div>
                            </div>
                            <!-- end: PROCEDURE ACCEPTS ONLY PRIVATE PLAN -->
                            <!-- start: DEFAULT PERCENTAGE THAT DENTIST EARNS FOR THE TREATMENT -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="default_percentage"> Porcentagem do Dentista Padrão </label>
                                        <span class="input-icon">
			                                 <input id="default_percentage" name="default_percentage"
                                                    class="form-control currency" value="" style="width:80px"
                                                    type="text"><i class="fa fa-percent"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: DEFAULT PERCENTAGE THAT DENTIST EARNS FOR THE TREATMENT -->
                        </div>
                    </div>
                </div>
                <!-- end: PARAMETERS TAB -->

                <!-- start: NEGOTIATED PERCENTAGES TAB -->
                <!-- end: NEGOTIATED PERCENTAGES TAB -->

            </div>
            <!-- end: TAB FORMS -->
        </div>
        <!-- end: MAIN PANEL INFORMATION -->

        <!-- start: SAVE CANCEL FUNCTIONS-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <br>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-success">
                        Salvar Alterações
                    </button>
                </div>
                <!--div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <button id="delete" class="btn btn-block btn-danger ">Excluir</button>
                </div-->
            </div>
            <br>
        </div>
        <!-- end: SAVE CANCEL FUNCTIONS-->

        </form>
    </div>

@endsection
