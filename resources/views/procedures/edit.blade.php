@extends('layouts.page')
@section('title', 'Treatments')
@section('content')

    <!-- start: VALIDATION MSGS -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="errorHandler alert alert-danger no-display">
            <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
        </div>
    </div>
    <!-- end: VALIDATION MSGS -->

    <!-- start: MAIN WINDOW -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: white;margin-top: 10px">

        <!-- start: PANEL HEADING -->
        <div class="panel-heading header_t1" style="padding-right: 0px;padding-left: 0px">
            <h2 class="table_title">Treatments</h2>
            <hr class="custom_sep" style="margin-bottom: 0px">
        </div>
        <!-- end: PANEL HEADING -->

        <!-- MAIN TABS -->
        <ul class="nav nav-tabs nav-profile" style="margin-top: 0px;">
            <li class="active">
                <a data-toggle="tab" href="#personal_details" aria-expanded="true">
                    <strong> General </strong>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#health" aria-expanded="false">
                    <strong> Parameters </strong>
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#percentages" aria-expanded="false">
                    <strong> Dentist Percentages </strong>
                </a>
            </li>
        </ul>
        <!-- TAB FORMS -->

        <!-- start: TAB CONTENT -->
        {{ Form::model($plan, ['route' => ['treatmentPlan.update', $plan->id], 'method' => 'PUT','id' => 'editTreatmentPlan']) }}
        <div class="tab-content" style="border: none">

            <!-- start: DETAILS TAB -->
            <div id="personal_details" class="tab-pane fade active in">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <!-- start : ACTIVE -->
                        <div class=" col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="ativo"> Active </label>
                                {!! Form::select('status',array('0' => 'No','1' => 'Yes'),$plan->status,['class' => 'form-control selectpicker']) !!}
                            </div>
                        </div>
                        <!-- start : PROCEDURE -->
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="fname"> Procedure Name </label>
                                <input class="form-control" id="title" type="text" value="{{ $plan ->title }}"
                                       disabled="disabled">
                            </div>
                        </div>
                        <!-- end : PROCEDURE -->
                        <!-- start : TUSS TREATMENT CODE -->
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="fname2"> TUSS Code </label>
                                <input class="form-control" id="fname" readonly="" type="text"
                                       value="{{ $plan->tuss_code }}" disabled="disabled">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- end : TUSS TREATMENT CODE -->
                        <!-- start : COST -->
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="valor"> Price </label>
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
                                <label for="pSpec"> Speciality </label>
                                <input class="form-control" id="speciality" type="text"
                                       value="{{ $plan->speciality }}" disabled="disabled">
                            </div>
                        </div>
                        <!-- start : OBSERVATION -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="profession"> Observation </label>
                                <textarea type="text" class="form-control autosize" id="observation"
                                          name="observation"
                                          style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;">{{ $plan->observation }}</textarea>
                            </div>
                        </div>
                        <!-- start : ALERT MESSAGE WHEN SELECTED -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="alerta"> Alert Message When Procedure is Selected </label>
                                <textarea type="text" class="form-control autosize" id="alerta"
                                          name="alert_message"
                                          style="overflow: hidden; resize: none; overflow-wrap: break-word; height: 35px;">{{ $plan->alert_message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: DETAILS TAB -->

            <!-- start: PARAMETERS TAB -->
            <div id="health" class="tab-pane fade">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="take_drug"> Block Price alteration </label>
                                    <br>
                                    {!! Form::select('block_price_alteration',array('0' => 'No','1' => 'Yes'),$plan->block_price_alteration,['class' => 'form-control selectpicker']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="private_plan"> Only Private plan </label>
                                    <br>
                                    {!! Form::select('private_plan',array('0' => 'No','1' => 'Yes'),$plan->private_plan,['class' => 'form-control selectpicker']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="default_percentage"> Default Percentage </label>
                                    <span class="input-icon">
			                                 <input id="default_percentage" name="default_percentage"
                                                    class="form-control currency"
                                                    value="{{ $plan->default_percentage }}" style="width:80px"
                                                    type="text"><i class="fa fa-percent"></i> </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end: PARAMETERS TAB -->

            <!-- start: NEGOTIATED PERCENTAGES TAB -->
            <div id="percentages" class="tab-pane fade">
                <div class="col-md-12 col-lg-12">
                    <?php if(!empty($dentists)){ ?>
                    <table class="table table-hover" id="sample-table-2">
                        <thead>
                        <tr>
                            <th class="hide">#</th>
                            <th>Dentist</th>
                            <th class="left">Email</th>
                            <th class="center">Percentage</th>
                            <th class="hidden-xs">Data Added</th>
                            <th class="center hidden-xs"></th>
                            <th class="center hidden-xs"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;foreach($dentists as $data){ ?>
                        <tr>
                            <td class="hide">{{ $i }}</td>
                            <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                            <td class="left">{{ $data->email }}</td>
                            <td class="center">{{ $data->percentage }} %</td>
                            <td class="hidden-xs">{{ date('M d, Y',strtotime($data->created_at)) }}</td>
                            <td class="center">
                                <a href="#" data-target="#updateDentistPercentageModal" data-toggle="modal"
                                   data-id="{{ $data->id }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td class="center">
                                <a href="#" data-target="#updateDentistPercentageModal" data-toggle="modal"
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
                        No Dentist Added Yet!
                    </div>
                    <?php }  ?>
                </div>
            </div>
            <!-- end: NEGOTIATED PERCENTAGES TAB -->

        </div>
        </form>
        <!-- end: TAB CONTENT -->

        <!-- start: BUTTON FUNCTIONS-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px 0px;padding-bottom: 10px">

            <hr class="custom_sepg" style="padding-top: 0px;margin-top: 0px;">

            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <button id="saveTreatmentPlan" type="button" class="btn btn-success">
                    Save Treatment Plan
                </button>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <button type="button" class="btn btn-danger">
                    <a href="{{ url('procedures')}}" style="color: white"> Cancel Changes</a>
                </button>
            </div>

        </div>
        <!-- end: BUTTON FUNCTIONS-->

    </div>
    <!-- end: MAIN WINDOW -->

    @include('modals.update_percentage')
    @include('modals.professional_info')
@endsection
