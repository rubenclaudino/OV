@extends('layouts.page')
@section('title', 'Permissions')
@section('content')

    <!-- start: MAIN INFORMATION PANEL -->
    <div class="panel panel-white" style="margin-top:8px;">

        <!-- start: TABLE HEADER -->
        <div class="panel-heading header_t1">

            <div class="toolbar row" style="border: none;background: whitesmoke;min-height: 100px">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter">Permissions</h2>
                        <p style="font-size: large;color: silver">Criar regras de accesso para usuários</p>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right" style="opacity: 0.7">

                        </ul>
                        <!-- end: TOP NAVIGATION MENU -->
                    </div>

                </div>

            </div>

        </div>
        <!-- end: TABLE HEADER -->

        <!-- start: TABLE BODY -->
        <div class="panel-body">

            <!-- start: PERMISSION TABLE -->
            <table class="table datatable table-striped">
                <thead>
                <tr>
                    <th class="center"></th>
                    <th>Mostrar nome</th>
                    <th>Nome</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(!empty($permissions)){
                foreach($permissions as $data){
                ?>
                <tr>
                    <td class="center">{{ $data->id }}</td>
                    <td>{{ $data->display_name }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-squared btn-sm dropdown-toggle"
                                    style="background: #dddddd" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Options&nbsp;&nbsp;<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ URL::route('permissions.edit', $data->id) }}">
                                        <small><i class="fa fa-pencil fa-fw"></i>&nbsp;Edit Permission</small>
                                    </a></li>
                                <li><a href="#" class="deletePermission" data-id="{{ $data->id }}">
                                        <small><i class="fa fa-trash fa-fw"></i>&nbsp;Delete Permission</small>
                                    </a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php } } ?>
                </tbody>
            </table>
            <!-- end: PERMISSION TABLE -->

        </div>
        <!-- end: TABLE BODY -->

    </div>
    <!-- end: MAIN INFORMATION PANEL -->

@endsection
