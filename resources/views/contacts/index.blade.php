@extends('layouts.page')
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

                            <h2 class="table_title">Contato<br>
                                <small style="color: #dddddd">Lista de contatos</small>
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
                                <th>Observação</th>
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
                                <td>{{ $data->name }}</td>
                                <td>
                                    <span style="opacity: 0.7">
                                          @if($data->contact_type == 0)
                                            <label class="label" style="background: green">Dental</label>
                                        @elseif($data->contact_type == 1)
                                            <label class="label" style="background: firebrick">Protético</label>
                                        @elseif($data->contact_type == 2)
                                            <label class="label"
                                                   style="background: dodgerblue">Instituto de Radiologia</label>
                                        @elseif($data->contact_type == 3)
                                            <label class="label" style="background: purple">Outro</label>
                                        @endif
                                    </span>
                                </td>
                                <td>{{ $data->phone_landline }}</td>
                                <td>{{ $data->phone_1 }}</td>
                                <td>{{ $data->obs }}</td>
                                <td>
                                    <div class="btn-group hidden-print">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                                style="opacity: 0.9" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Opções &nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                            <li><a href="{{ URL::route('contacts.edit', $data->id) }}">
                                                    <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" class="deleteContact" data-id="{{$data->id}}">
                                                    <small><i class="fa fa-ban fa-fw"></i>&nbsp Excluir</small>
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
                    <!-- end: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
