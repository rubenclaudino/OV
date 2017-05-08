@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN INFORMATION PANEL -->
            <div class="row" style="margin-top: 25px">

                <!-- start: FORM -->
            {{ Form::open(array('route' => 'dentalplans.store', 'class' => 'form', 'id' => 'createDentalPlan')) }}

                <!-- start: ERROR SECTION -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
                    </div>
                </div>
                <!-- end: ERROR SECTION -->

                <!-- start: INFORMATION PANEL -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- start: PANEL -->
                    <div class="panel">

                        <!-- start: TABLE HEADER -->
                        <div class="panel-heading header_t1">
                            <h2 class="table_title">{{ $title }}</h2>
                            <hr class="custom_sep">
                        </div>
                        <!-- end: TABLE HEADER -->

                        <!-- start: PANEL BODY -->
                        <div class="panel-body">

                            <!-- start: DIV -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <!-- start: ROW -->
                                <div class="row">

                                    <!-- start: DENTAL PLAN -->
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="title">Convênio</label>
                                            <input class="form-control" id="title" name="title" type="text">
                                        </div>
                                    </div>
                                    <!-- end: DENTAL PLAN -->

                                    <!-- start: ANS CODE -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="ans">Código ANS</label>
                                            <input class="form-control" id="ans" name="ans" type="text">
                                        </div>
                                    </div>
                                    <!-- end: ANS CODE -->

                                    <!-- start: SITE -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="url">Site</label>
                                            <input class="form-control" id="url" name="url" type="text"
                                                   placeholder="Website URL">
                                        </div>
                                    </div>
                                    <!-- end: SITE -->

                                    <!-- start: PHONE 1 -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="phone">Telefone 1</label>
                                            <input class="form-control" id="phone" name="phone" type="text">
                                        </div>
                                    </div>
                                    <!-- end: PHONE 1 -->

                                    <!-- start: PHONE 2 -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="phone2">Telefone 2</label>
                                            <input class="form-control" id="phone2" name="alternate_phone"
                                                   type="text">
                                        </div>
                                    </div>
                                    <!-- end: PHONE 2 -->

                                    <!-- start: ROAD -->
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="address">Rua/Avenida</label>
                                            <input class="form-control" id="address" name="address"
                                                   type="text">
                                        </div>
                                    </div>
                                    <!-- end: ROAD -->

                                    <!-- start: NUMBER -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="number">Número</label>
                                            <input class="form-control" id="number" name="number"
                                                   type="text">
                                        </div>
                                    </div>
                                    <!-- end: NUMBER -->

                                    <!-- start: BOROUGH -->
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="borough_id">Bairro</label>
                                            {!! Form::select('borough_id',array(''),'',['class' => 'select2picker select_borough']) !!}
                                        </div>
                                    </div>
                                    <!-- end: BOROUGH -->

                                    <!-- start: CEP -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="cep">CEP</label>
                                            <input class="form-control" id="cep" name="cep" type="text">
                                        </div>
                                    </div>
                                    <!-- end: CEP -->

                                    <!-- start: CITY -->
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="city_id">Cidade</label>
                                            {!! Form::select('city_id',array(''),'',['class' => 'select2picker select_city']) !!}
                                        </div>
                                    </div>
                                    <!-- end: CITY -->

                                    <!-- start: STATE -->
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="state_id">
                                                Estado
                                            </label>
                                            {!! Form::select('state_id',array(''),'',['class' => 'select2picker select_state']) !!}
                                        </div>
                                    </div>
                                    <!-- end: STATE -->

                                    <!-- start: BUTTON INTERACTIONS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <hr class="custom_sepg">
                                        <div class="form-group">
                                            <a href="{{ url('/dentalplans')}}" class="btn btn-danger">
                                                Voltar
                                            </a>
                                            <button type="submit" class="btn btn-success">
                                                Salvar
                                            </button>
                                        </div>
                                    </div>
                                    <!-- end: BUTTON INTERACTIONS -->

                                </div>
                                <!-- end: ROW -->

                            </div>
                            <!-- end: DIV -->

                        </div>
                        <!-- end: PANEL BODY -->

                    </div>
                    <!-- end: PANEL -->

                </div>
                <!-- end: INFORMATION PANEL -->

                </form>
                <!-- end: FORM -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
