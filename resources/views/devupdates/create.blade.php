@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN TABLE PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white" style="background: white;margin-top: 15px;">

                <!-- start: PANEL HEADING -->
                <div class="panel-heading header_t1" style="margin-bottom: 0px">
                    <h2 class="table_title">{{ $title }}<br>
                        <small style="color: #dddddd">{{ $subtitle }}</small>
                    </h2>
                    <hr class="custom_sep" style="padding: 0;margin: 0">
                </div>
                <!-- end: PANEL HEADING -->

                <!-- start: PANEL BODY -->
                <div class="panel-body">
                    {{ Form::open(array('route' => 'devupdates.store', 'class' => 'form', 'id' => 'addDevUpdate')) }}

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="title">Módulo</label>
                            <input class="form-control" id="title" name="title" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input class="form-control" id="status" name="status" type="number" required>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="message">Descrição</label>
                            <input class="form-control" id="message" name="message" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <hr class="custom_sepg">
                            <button class="btn btn-success btn-submit" data-loading-text="Salvando..." type="submit">
                                Salvar Informações
                            </button>
                        </div>
                    </div>

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: MAIN TABLE PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
