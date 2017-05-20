@extends('layouts.page')
@section('title', 'Procedimento')
@section('content')

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
        <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

            <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter">Procedimento</h2>
                        <p style="font-size: large">Editar os dados do procedimento</p>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right" style="opacity: 0.7">

                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>

                </div>

            </div>

        </div>
        <!-- end: TABLE HEADER -->

        <!-- start: TAB TITLE -->
        <ul class="nav nav-tabs"
            style="font-size: 1.1em;border: none;background: whitesmoke;padding:0px !important;margin:0px;margin-top: 10px">
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
                <a data-toggle="tab" href="#percentages" aria-expanded="false">
                    <strong> Porcentagens </strong>
                </a>
            </li>
        </ul>
        <!-- end: TAB TITLE -->

        <!-- start: TAB CONTENT -->
        {{ Form::model($plan, ['route' => ['specialties', $plan->id], 'method' => 'PUT','id' => 'editTreatmentPlan']) }}
        <div class="tab-content" style="font-size: 1.1em;border: none">

            <!-- start: DETAILS TAB -->
            <div id="personal_details" class="tab-pane fade active in">

                <!-- start: ROW -->
                <div class="row">

                <?php
                $user = Auth::user();
                if ($user->hasRole('dentistadmin')) {
                    $disabled = 'disabled';
                } else {
                    $disabled = '';
                }
                ?>
                <!-- start : ACTIVE -->
                    <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ativo"> Ativo </label>
                            {!! Form::select('status',array('0' => 'No','1' => 'Yes'),$plan->status,['class' => 'form-control selectpicker']) !!}
                        </div>
                    </div>
                    <!-- start : PROCEDURE -->
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="fname"> Procedimento </label>
                            <input class="form-control" id="title" type="text" value="{{ $plan ->title }}"
                                   disabled="disabled">
                        </div>
                    </div>
                    <!-- end : PROCEDURE -->
                    <!-- start : TUSS TREATMENT CODE -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="fname2"> Código TISS </label>
                            <input class="form-control" id="fname" readonly="" type="text"
                                   value="{{ $plan->tuss_code }}" disabled="disabled">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- end : TUSS TREATMENT CODE -->
                    <!-- start : COST -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="valor"> Valor </label>
                            <span class="input-icon">
											      <input id="price" name="price" class="form-control currency"
                                                         type="text" value="{{ $plan->price }}">
											      <i class="fa fa-dollar"></i> </span>
                        </div>
                    </div>
                    <!-- end : COST -->
                    <!-- start : SPECIALITIES -->
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="form-group ">
                            <label for="pSpec"> Especialidade </label>
                            <?php $spe = []; ?>
                            @foreach($plan->speciality as $d)
                                <?php array_push($spe, $d->speciality_id);?>
                            @endforeach
                            {!! Form::select('speciality',$speciality,$spe,['class' => 'form-control selectpicker','multiple' => 'true',$disabled]) !!}
                        </div>
                    </div>
                    <!-- start : OBSERVATION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="observation" style="padding-top: 10px;display: inline!important;">
                                Observação </label>
                            <input type="text" class="form-control autosize" id="observation" name="observation"
                                   style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;display: inline!important;"
                                   value="{{ $plan->observation }}">
                        </div>
                    </div>
                    <!-- start : ALERT MESSAGE WHEN SELECTED -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="alerta"> Alerta para quando procedimento for selecionado </label>
                            <input type="text" class="form-control autosize" id="alerta" name="alert_message"
                                   style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;"
                                   value="{{ $plan->alert_message }}">
                        </div>
                    </div>

                </div>
                <!-- end: ROW -->

            </div>
            <!-- end: DETAILS TAB -->

            <!-- start: PARAMETERS TAB -->
            <div id="health" class="tab-pane fade">

                <!-- start: ROW -->
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <!-- start: BLOCK USER CHANGING PRICE OF PROCEDURE -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="take_drug"> Bloquear Alteração de Valor </label>
                                    <br>
                                    {!! Form::select('block_price_alteration',array('0' => 'No','1' => 'Yes'),$plan->block_price_alteration,['class' => 'form-control selectpicker']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- end: BLOCK USER CHANGING PRICE OF PROCEDURE -->

                        <!-- start: PROCEDURE ACCEPTS ONLY PRIVATE PLAN -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="private_plan"> Não aceito por convênios </label>
                                    <br>
                                    {!! Form::select('private_plan',array('0' => 'No','1' => 'Yes'),$plan->private_plan,['class' => 'form-control selectpicker']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- end: PROCEDURE ACCEPTS ONLY PRIVATE PLAN -->

                        <!-- start: DEFAULT PERCENTAGE THAT DENTIST EARNS FOR THE TREATMENT -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">

                                    <label for="default_percentage"> Porcentagem do Dentista </label>
                                    <span class="input-icon">
			                                 <input id="default_percentage" name="default_percentage"
                                                    class="form-control currency"
                                                    value="{{ $plan->default_percentage }}"
                                                    style="width:80px;padding-left: 28px" type="number" maxlength="3"
                                                    min="0" max="100"
                                                    onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0';}">
                                              <i class="fa fa-percent" style="padding-top: 3px;padding-right: 15px"></i>
                                          </span>

                                </div>
                            </div>
                        </div>
                        <!-- end: DEFAULT PERCENTAGE THAT DENTIST EARNS FOR THE TREATMENT -->

                    </div>

                </div>
                <!-- end: ROW -->

            </div>
            <!-- end: PARAMETERS TAB -->

            <!-- start: NEGOTIATED PERCENTAGES TAB -->
            <div id="percentages" class="tab-pane fade">

                <?php if(!empty($dentists)){ ?>
                <table class="table table-hover table-striped table-response" id="sample-table-2">
                    <thead>
                    <tr>
                        <th class="hide">#</th>
                        <th>Professional</th>
                        <th class="left">Especialidade</th>
                        <th class="center">Porcentagem</th>
                        <th class="hidden-xs">Data Negociado</th>
                        <th class="center hidden-xs"></th>
                        <th class="center hidden-xs"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;foreach($dentists as $data){ ?>
                    <tr>
                        <td class="hide">{{ $i }}</td>
                        <td>@if ($data->gender == 0)
                                <small>Dr.</small> @else
                                <small>Dra.</small> @endif {{ $data->first_name }} {{ $data->last_name }}</td>
                        <td class="left">-</td>
                        <td class="center">
                            <strong>{{ $data->percentage }} %</strong>
                        </td>
                        <td class="hidden-xs">{{ date('M d, Y',strtotime($data->created_at)) }}</td>
                        <td class="center">
                            <a href="#" data-target="#updateDentistPercentageModal" data-toggle="modal"
                               data-id="{{ $data->id }}">
                                <i class="fa fa-percent"></i>
                            </a>
                        </td>
                        <td class="center">
                            <a href="#" data-target="#viewDentistInfoModal" data-toggle="modal"
                               data-id="{{ $data->id }}">
                                <i class="fa fa-info"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="alert alert-info">
                    Não existe nenhum usuário cadastrado!
                </div>
                <?php }  ?>

            </div>
            <!-- end: NEGOTIATED PERCENTAGES TAB -->

        </div>
        </form>
        <!-- end: TAB CONTENT -->

        <!-- start: BUTTON FUNCTIONS-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;padding-bottom: 15px">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <hr class="custom_sepg" style="padding: 0px;margin: 0px;margin-bottom: 20px">

                <button id="saveTreatmentPlan" type="button" class="btn btn-success">
                    Salvar Mudanças
                </button>

                <button type="button" class="btn btn-danger">
                    <a href="{{ url('procedures')}}" style="color: white"> Cancelar</a>
                </button>

            </div>

        </div>
        <!-- end: BUTTON FUNCTIONS-->

    </div>
    <!-- end: MAIN PANEL INFORMATION -->

    @include('modals.treatment_types_update_percentage')
    @include('modals.treatment_types_professional_info')

@endsection
