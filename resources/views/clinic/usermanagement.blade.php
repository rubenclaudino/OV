@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTAINER -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="panel panel-white" style="margin-top:8px;">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading table_tab_color">
                    <h2 class="table_title">{{ $title }}</h2>
                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: BODY -->
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
                                                        class="fa fa-trash fa-fw"></i> Excluír</a></li>
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
                <!-- end: BODY -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTAINER -->

@endsection
