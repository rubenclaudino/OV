@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN TABLE PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: #f1f1f1;border: none;opacity:0.8;">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">{{ $title }}</h2>
                                <p style="font-size: large;">{{ $subtitle }}</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">

                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="opacity: 1">
                                    <li>
                                        <a href="{{ URL::route('contacts.create') }}">
                                            <i class="fa fa-user"></i> Novo Contato
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="print" data-id="mainInfo">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->

                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: TABLE BODY -->
                <div class="panel-body">

                    <!-- start: TABLE TYPE -->
                    <div class="table-responsive">

                        <!-- start: CONTACT TABLE DATA -->
                        <table class="table datatable table-striped table-hover" id="mainInfo">

                            <thead>
                            <tr>
                                <th class="hide"></th>
                                <th>Contato</th>
                                <th>Tipo</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            if(!empty($contatos)){
                            foreach($contatos as $data){
                            ?>
                            <tr>
                                <td class="hide">{{ $data->id }}</td>
                                <td>{{ $data->title }}</td>
                                <td>
                                    <span style="opacity: 0.7">
                                          @if($data->contact_type == 0)
                                            <label class="label" style="background: green">Dental</label>
                                        @elseif($data->contact_type == 1)
                                            <label class="label" style="background: firebrick">Protético</label>
                                        @elseif($data->contact_type == 2)
                                            <label class="label" style="background: dodgerblue">Instituto de Radiologia</label>
                                        @elseif($data->contact_type == 3)
                                            <label class="label" style="background: purple">Outro</label>
                                        @endif
                                    </span>
                                </td>
                                <td>{{ $data->contact->phone_landline }}</td>
                                <td>{{ $data->contact->celular_1 }}</td>
                                <td>
                                    <div class="btn-group hidden-print">
                                        <button type="button" class="btn btn-sm dropdown-toggle"
                                                style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Opções &nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                            <li><a href="{{ URL::route('contacts.edit', $data->id) }}">
                                                    <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" class="deleteContact" data-id="{{$data->id}}">
                                                    <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluír</small>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php }} ?>
                            </tbody>

                        </table>
                        <!-- start: CONTACT TABLE DATA -->

                    </div>
                    <!-- end: TABLE TYPE -->

                </div>
                <!-- end: TABLE BODY -->

            </div>
            <!-- end: MAIN TABLE PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
