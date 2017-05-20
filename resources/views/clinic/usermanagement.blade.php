@extends('layouts.page')
@section('title', '')
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

                        <h2 class="table_title">{{ $title }}<br>
                            <small style="color: #dddddd">...</small>
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
                <div class="panel-body">

                    <!-- start: CLINICS REGISTERED -->
                    <table class="table table-striped table-hover datatable">

                        <!-- start: COLUMN INFORMATION -->
                        <thead>
                        <tr>
                            <!-- COL 1: CLINIC ID -->
                            <th class="center"></th>
                            <!-- COL 2: CLINIC NAME -->
                            <th>Clinic Name</th>
                            <!-- COL 3: CLINIC ADMIN EMAIL -->
                            <th>Email</th>
                            <!-- COL 4: CLINIC PHONE NUMBER -->
                            <th>Phone</th>
                            <!-- COL 5: CLINIC ADDRESS -->
                            <th>Clinic Address</th>
                            <!-- COL 6: OPTIONS  -->
                            <th></th>
                        </tr>
                        </thead>
                        <!-- end: COLUMN INFORMATION -->

                        <!-- start: ROW INFORMATION -->
                        <tbody>
                        <?php
                        if(!empty($clinics)){
                        $i = 0;
                        foreach($clinics as $data){
                        ?>
                        <tr>
                            <!-- COL 1: CLINIC ID -->
                            <td class="center">{{ $i }}<?php $i++;?></td>
                            <!-- COL 2: CLINIC NAME -->
                            <td>{{ $data->name }}</td>
                            <!-- COL 3: CLINIC ADMIN EMAIL -->
                            <td>{{ $data->email }}</td>
                            <!-- COL 4: CLINIC PHONE NUMBER -->
                            <td>
                                @if(isset($data->contact->phone_landline))
                                    {{ $data->contact->phone_landline }}
                                @else
                                    -
                                @endif
                            </td>
                            <!-- COL 5: CLINIC ADDRESS -->
                            <td>
                                @if(isset($data->address->street_address))
                                    {{ $data->address->street_address }} {{ $data->address->number }}
                                @else
                                    -
                                @endif
                            </td>
                            <!-- COL 6: OPTIONS  -->
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções&nbsp; <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="deleteClinic" data-id="{{$data->id}}"><i
                                                        class="fa fa-trash fa-fw"></i> Excluir</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                        <!-- end: ROW INFORMATION -->

                    </table>
                    <!-- end: CLINICS REGISTERED -->

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTAINER -->

@endsection
