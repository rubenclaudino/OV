@extends('layouts.page')
@section('title', 'Contatos')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Contato<br>
                        <small style="color: #bbbbbb">Lista de contatos</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn" href="{{ URL::route('contacts.create') }}"
                           style="background: whitesmoke">
                            <i class="fa fa-user"></i> Novo Contato
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
            <div class="panel-body" id="mainInfo">

                <!-- start: CONTACT TABLE DATA -->
                <table class="table table-hover table-responsive">

                    <thead style="background: whitesmoke">
                    <tr>
                        <th class="hide"></th>
                        <th>Contato</th>
                        <th>Tipo</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Informações</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($contatos as $contato)
                        <tr>
                            <td class="hide">{{ $contato->id }}</td>
                            <td>{{ $contato->name }}</td>
                            <td>
                                    <span style="opacity: 0.6">
                                          @if($contato->contact_type == 0)
                                            <label class="label" style="background: green">Dental</label>
                                        @elseif($contato->contact_type == 1)
                                            <label class="label" style="background: firebrick">Protético</label>
                                        @elseif($contato->contact_type == 2)
                                            <label class="label"
                                                   style="background: dodgerblue">Instituto de Radiologia</label>
                                        @elseif($contato->contact_type == 3)
                                            <label class="label" style="background: purple">Outro</label>
                                        @endif
                                    </span>
                            </td>
                            <td>{{ $contato->phone_landline }}</td>
                            <td>{{ $contato->phone_1 }}</td>
                            <td>{{ $contato->additional_info }}</td>
                            <td>
                                <div class="btn-group hidden-print">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                            style="opacity: 0.9" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="{{ URL::route('contacts.edit', $contato->id) }}">
                                                <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" class="deleteContact" data-id="{{$contato->id}}">
                                                <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <!-- start: CONTACT TABLE DATA -->

            </div>
            <!-- end: PANEL BODY -->

        </div>
        <!-- end: PANEL -->

    </div>
    <!-- end: DIV -->

@endsection
