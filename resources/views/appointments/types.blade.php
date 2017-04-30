@extends('layouts.page')
@section('content')

    <div class="main-content">

        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="panel panel-white" style="margin-top:8px;">
                <div class="panel-body">

                    <!-- start: TABLE STATUS TYPES -->
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="hide">#</th>
                            <th style="width: 100%"><h3>Tipos de Agendamento</h3></th>
                            <th>
                                <a href="#" class="new-event MyToolbar" data-toggle="modal"
                                   data-target="#addAppointmentTypeModal" style="vertical-align: middle">
                                    <i class="fa fa-plus fa-2x text-success"></i>
                                </a>
                            </th>
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
                            <td>{{ $data->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                            style="border-radius: 1px" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="editAppointmentType" data-id="{{$data->id}}">
                                                <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" class="editAppointmentType" data-id="{{$data->id}}">
                                                <small><i class="fa fa-trash fa-fw"></i>&nbsp; Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                    <!-- end: TABLE STATUS TYPES -->
                </div>
            </div>
            <!-- start: MAIN INFORMATION PANEL -->

        </div>

    </div>

    <!-- add modal -->
    <!-- Button trigger modal -->

    <!-- start: CREATE APPOINTMENT TYPE MODAL -->
    <div class="modal fade" id="addAppointmentTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #ededed;">
                    <h3 class="modal-title" id="myModalLabel">Cadastrar Novo Tipo de Agendamento</h3>
                </div>
                <form method="post" id="addAppointmentType" action="{{ url('/calendar/addAppointmentType')}}">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="modal-body">
                        <label>Tipo de Agendamento</label>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Descrição do tipo de agendamento"
                                   name="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info btn-sm btn-squared" style="border-radius: 1px"
                                data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-squared" style="border-radius: 1px">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end: CREATE APPOINTMENT TYPE MODAL -->

@endsection
