@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: DIV -->
            <div style="margin: 15px 2px">

<<<<<<< HEAD
=======

>>>>>>> 3a1bc063940925c94f716217417c8234ff8d8b50
                <!-- start: FORM -->
            {{ Form::open(['route' => 'dentalplans.store', 'class' => 'form']) }}

            @include('dentalplans.partials.form')

            {{Form::close()}}
            <!-- end: FORM -->
<<<<<<< HEAD
=======

                <!-- start: PANEL -->
                <div class="panel">

                    <!-- start: ERROR SECTION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="errorHandler alert alert-danger no-display">
                            <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em
                            baixo.
                        </div>
                    </div>
                    <!-- end: ERROR SECTION -->

                    <!-- start: PANEL HEAD -->
                    <div class="panel-head">

                        <div class="col-lg-12 col-md-12">

                            <div class="col-lg-12 col-md-12">

                                <h2 class="table_title">Convênio<br>
                                    <small style="color: #dddddd">Cadastrar um novo convênio</small>
                                </h2>

                                <hr class="custom_sep">

                            </div>

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        <!-- start: FORM -->
                    {{ Form::open(array('route' => 'dentalplans.store', 'class' => 'form', 'id' => 'createDentalPlan')) }}

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
                                <label for="ans_code">Código ANS</label>
                                <input class="form-control" id="ans_code" name="ans_code" type="text">
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
                                <label for="phone_1">Telefone 1</label>
                                <input class="form-control" id="phone_1" name="phone_1" type="text">
                            </div>
                        </div>
                        <!-- end: PHONE 1 -->

                        <!-- start: PHONE 2 -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="phone_2">Telefone 2</label>
                                <input class="form-control" id="phone_2" name="phone_2"
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
                                <label for="street_number">Número</label>
                                <input class="form-control" id="street_number" name="street_number"
                                       type="text">
                            </div>
                        </div>
                        <!-- end: NUMBER -->

                        <!-- start: BOROUGH -->
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="borough">Bairro</label>
                                <input class="form-control" id="borough" name="borough" type="text">
                            </div>
                        </div>
                        <!-- end: BOROUGH -->

                        <!-- start: CEP -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="zip_code">CEP</label>
                                <input class="form-control" id="zip_code" name="zip_code" type="text">
                            </div>
                        </div>
                        <!-- end: CEP -->

                        <!-- start: CITY -->
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="city">Cidade</label>
                                <input class="form-control" id="city" name="city" type="text">
                            </div>
                        </div>
                        <!-- end: CITY -->

                        <!-- start: STATE -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="state">Estado</label>
                                <select class="form-control" id="state" name="state">
                                    <option value="0">Não Informado</option>
                                    <option value="1">AC</option>
                                    <option value="2">AL</option>
                                    <option value="3">AP</option>
                                    <option value="4">AM</option>
                                    <option value="5">BA</option>
                                    <option value="6">CE</option>
                                    <option value="7">DF</option>
                                    <option value="8">ES</option>
                                    <option value="9">GO</option>
                                    <option value="10">MA</option>
                                    <option value="11">MT</option>
                                    <option value="12">MS</option>
                                    <option value="13">MG</option>
                                    <option value="14">PA</option>
                                    <option value="15">PB</option>
                                    <option value="16">PR</option>
                                    <option value="17">PE</option>
                                    <option value="18">PI</option>
                                    <option value="19">RJ</option>
                                    <option value="20">RN</option>
                                    <option value="21">RS</option>
                                    <option value="22">RO</option>
                                    <option value="23">RR</option>
                                    <option value="24">SC</option>
                                    <option value="25">SP</option>
                                    <option value="26">SE</option>
                                    <option value="27">TO</option>
                                </select>
                            </div>
                        </div>
                        <!-- end: STATE -->

                        <!-- start: BUTTON INTERACTIONS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <hr class="custom_sepg">

                            <div class="form-group">

                                <button type="submit" class="btn btn-success">
                                    Salvar
                                </button>

                                <a href="{{ url('/dentalplans')}}" class="btn btn-grey">
                                    Voltar
                                </a>

                            </div>

                        </div>
                        <!-- end: BUTTON INTERACTIONS -->

                        </form>
                        <!-- end: FORM -->

                    </div>
                    <!-- end: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

>>>>>>> 3a1bc063940925c94f716217417c8234ff8d8b50

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
