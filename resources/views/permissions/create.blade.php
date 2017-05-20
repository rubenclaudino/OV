@extends('layouts.page')
@section('title', 'Create Permissions')
@section('content')
    <div class="main-content">
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="panel panel-white" style="margin-top:8px;">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1">

                    <div class="toolbar row" style="border: none;background: whitesmoke;min-height: 100px">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">Create Permissions</h2>
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

                <!-- start: MAIN BODY PANEL -->
                <div class="panel-body">

                    <!-- start: FORM -->
                    <form id="registerPermission" method="POST" action="{{ url('/permissions') }}" autocomplete="off"
                          enctype="multipart/form-data">

                        <!-- start: ERROR INFORMATION -->
                        @if(count($errors))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    <!-- start: ERROR INFORMATION -->

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">

                        <div class="clearfix"></div>
                        <!-- start: NAME -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('display_name') ? 'has-error' : '' }}">
                                <label for="fname">Mostrar nome</label>
                                <input class="form-control" id="display_name" name="display_name" type="text"
                                       placeholder="Mostrar nome" value="param">
                            </div>
                        </div>
                        <!-- start: DESCRIPTION -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description">Descrição</label>
                                <input class="form-control" id="description" name="description" type="text"
                                       placeholder="Description" value="param">
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <!-- start: MODEL -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('model') ? 'has-error' : '' }}">
                                <label for="description">Modelo</label>
                                {!! Form::select('model', $models,'',['class' => 'form-control selectpicker','placeholder' => 'Select Model']) !!}
                            </div>
                        </div>
                        <!-- start: SLUG -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Name</label>
                                {!! Form::select('name', $controllers,'',['class' => 'form-control selectpicker','placeholder' => 'Select controller']) !!}
                            </div>
                        </div>

                        <div class="clearfix"></div>


                        <!-- start: BUTTON AREA -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="form-group">
                                <hr class="custom_sepg">
                                <button class="btn btn-success btn-submit btn-squared" data-loading-text="Salvando..."
                                        type="submit">Criar Permissão
                                </button>
                            </div>
                        </div>
                        <!-- end: BUTTON AREA -->

                    </form>
                    <!-- end: FORM -->

                </div>
                <!-- end: MAIN BODY PANEL -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
    </div>
@endsection
