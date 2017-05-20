@extends('layouts.page')
@section('title', '')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="panel panel-white" style="margin-top:15px;">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1">
                    <h2 class="table_title">{{ $title }}</h2>
                </div>
                <!-- end: TABLE HEADER -->

                <div class="panel-body">

                    <!-- start: TABLE DISPLAYING TREATMENTS -->
                    <table class="table table-striped table-hover datatable">
                        <thead>
                        <tr>
                            <th class="hide">#</th>
                            <th>Descrição do Procedimento</th>
                            <th>Preço</th>
                            <th>% Dentista</th>
                            <th>Especialidade</th>
                            <th>N° Executado</th>
                            <th>Código TISS</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($types)){
                        $i = 1;
                        foreach($types as $data){
                        ?>
                        <tr>
                            <td class="hide">{{ $i }}<?php $i++;?></td>
                            <td><strong>{{ $data->title }}</strong></td>
                            <td>R$ {{ $data->price }}</td>
                            <td>{{ $data->default_percentage }}&nbsp;%</td>
                            <td>{{ $data->speciality }}</td>
                            <td></td>
                            <td>{{ $data->tuss_code }}</td>
                            <td>
                                <div class="btn-group hidden-print">
                                    <button type="button"
                                            class="btn btn-info btn-squared btn-sm dropdown-toggle hidden-print"
                                            style="border-radius: 1px" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ url('/treatmentPlan')}}/{{$data->id}}" data-id="{{$data->id}}">
                                                <small><i class="fa fa-folder-o fa-fw"></i> &nbsp;Perfil</small>
                                            </a></li>
                                        <li><a href="{{ url('/treatmentPlan')}}/{{ $data->id}}/edit"
                                               data-id="{{$data->id}}">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-id="{{ $data->id }}">
                                                <small><i class="fa fa-trash fa-fw"></i> &nbsp;Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                    <!-- end: TABLE DISPLAYING TREATMENTS -->

                </div>
            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

    <!-- start: NEW TREATMENT MODAL -->
    <div class="modal fade" id="addTreatmentTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Add Treatment Plan</h4>
                </div>
                <form method="post" id="addTreatmentType" action="{{ url('/')}}/calendar/addtreatmentType">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <label>Treatment Plan Title</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Treatment Plan" name="title">
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Treatment Price</label>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Price" name="price">
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Speciality</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Speciality" name="speciality">
                        </div>
                    </div>
                    <div class="modal-body">
                        <label>Covered By Dental Plan</label>
                        <div class="form-group">
                            {!! Form::select('dental_plan_id', $dental_plans, '',['class' => 'form-control selectpicker','placeholder' => 'Select Dental Plan']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-sm">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: NEW TREATMENT MODAL -->

@endsection
