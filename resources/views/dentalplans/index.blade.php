@extends('layouts.page')
@section('title', 'Convênios')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: DIV -->
            <div style="margin: 15px 2px">

                <!-- start: PANEL -->
                <div class="panel">

                    <!-- start: PANEL HEAD -->
                    <div class="panel-head">

                        <div class="col-lg-6 col-md-6">

                            <h2 class="table_title">Convênios<br>
                                <small style="color: #bbbbbb">Convênios credenciados</small>
                            </h2>

                        </div>

                        <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                            <div class="pull-right">

                                <a class="btn" href="{{ url('/dentalplans/create') }}" style="background: whitesmoke">
                                    <i class="fa fa-user"></i> Novo Convênio
                                </a>

                                <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                                    <i class="fa fa-print"></i> Imprimir
                                </a>

                            </div>

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        <!-- start: TABLE -->
                        <table class="table table-hover table-responsive" id="mainInfo">

                            <!-- start: COLUMN INFO -->
                            <thead style="background: whitesmoke">
                            <tr>
                                <th class="col-md-3">Convênio</th>
                                <th>Site</th>
                                <th>Telefone</th>
                                <th>ANS</th>
                                <th>Associados</th>
                                <th class="col-md-1 hidden-print"></th>
                            </tr>
                            </thead>
                            <!-- end: COLUMN INFO -->

                            <!-- start: ROW INFO -->
                            <tbody>
                            <?php
                            if(!empty($plans)){
                            $i = 1;
                            foreach($plans as $plan){
                            ?>
                            <tr>
                                <td>{{ $plan->title }}</td>
                                <td><a href="{{ $plan->url }}" target="_blank">{{ $plan->url }}</a></td>
                                <td>{{ $plan->phone_1 }}</td>
                                <td>
                                    <small>{{ $plan->ans_code }}</small>
                                </td>
                                <td>{{ count($plan->patient_dental_plans) }}</td>
                                <td class="hidden-print">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                                style="background: #dddddd;border-radius: 1px;opacity: 0.9"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opções &nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" style="opacity: 0.9">
                                            <!-- <li>
                                                <a href="{{ url('/dentalplans')}}/{{$plan->id}}"
                                                   class="edittreatmentType"
                                                   data-id="{{$plan->id}}">
                                                    <small><i class="fa fa-folder-o fa-fw"></i>&nbsp; Perfil</small>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href="{{ url('/dentalplans')}}/{{$plan->id}}">
                                                    <small><i class="fa fa-folder-o fa-fw"></i>&nbsp; Perfil</small>
                                                </a>
                                            </li>
                                            <li><a href="{{ url('/dentalplans')}}/{{ $plan->id}}/edit"
                                                   class="edittreatmentType"
                                                   data-id="{{$plan->id}}">
                                                    <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="{{ url('/dentalplans')}}/{{ $plan->id}}"
                                                   class="edittreatmentType"
                                                   data-id="{{$plan->id}}">
                                                    <small><i class="fa fa-ban fa-fw"></i>&nbsp; Excluir</small>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php } } ?>
                            </tbody>
                            <!-- end: ROW INFO -->

                        </table>
                        <!-- end: TABLE -->

                    </div>
                    <!-- start: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
