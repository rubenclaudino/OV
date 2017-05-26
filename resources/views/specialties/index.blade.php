@extends('layouts.page')
@section('title', 'Specialties')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Especialidades<br>
                        <small style="color: #bbbbbb">Lista de especialidades</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn" href="{{ URL::route('specialties.create') }}"
                           style="background: whitesmoke">
                            <i class="fa fa-user fa-fw"></i> Nova Especialidade
                        </a>

                        <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                            <i class="fa fa-print fa-fw"></i> Imprimir
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
            <div class="panel-body" id="mainInfo">

                <!-- start: SPECIALTY TABLE DATA -->
                <table class="table table-hover table-responsive">

                    <thead style="background: whitesmoke">
                    <tr>
                        <th class="hide">#</th>
                        <th>Especialidade</th>
                        <th>Cor</th>
                        <th></th>
                    </tr>
                    </thead>

                    @foreach($specialties as $speciality)

                        <tbody>
                        <tr>
                            <!-- ID -->
                            <td class="hide"></td>
                            <!-- SPECIALTY -->
                            <td>{{ $speciality->name }}</td>
                            <!-- COLOR -->
                            <td>
                                    <span class="label label-default"
                                          style="@if($speciality->color != '')background: {{$speciality->color}} !important @endif;opacity: 0.7">{{ $speciality->color }}</span>
                            </td>
                            <!-- INTERACTIONS -->
                            <td>
                                <div class="btn-group hidden-print">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            style="opacity: 0.9" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('specialties.edit', $speciality->id) }}">
                                                <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" class="deleteProcedure" data-id="{{$speciality->id}}">
                                                <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>

                    @endforeach

                </table>
                <!-- start: SPECIALTY TABLE DATA -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: PANEL -->

    </div>
    <!-- end: DIV -->

@endsection
