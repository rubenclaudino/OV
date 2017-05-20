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
            <h2 class="table_title">Convênio</h2>
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
                            {{ Form::text('title', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: DENTAL PLAN -->

                    <!-- start: ANS CODE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="ans_code">Código ANS</label>
                            {{ Form::text('ans_code', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: ANS CODE -->

                    <!-- start: SITE -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="url">Site</label>
                            {{ Form::text('url', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: SITE -->

                    <!-- start: PHONE 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_1">Telefone 1</label>
                            {{ Form::text('phone_1', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: PHONE 1 -->

                    <!-- start: PHONE 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_2">Telefone 2</label>
                            {{ Form::text('phone_2', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: PHONE 2 -->

                    <!-- start: ROAD -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="address">Rua/Avenida</label>
                            {{ Form::text('address', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: ROAD -->

                    <!-- start: NUMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="street_number">Número</label>
                            {{ Form::text('street_number', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: NUMBER -->

                    <!-- start: BOROUGH -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="borough">Bairro</label>
                            {{ Form::text('borough', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: BOROUGH -->

                    <!-- start: CEP -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            {{ Form::text('cep', null,['class' => 'form-control']) }}

                        </div>
                    </div>
                    <!-- end: CEP -->

                    <!-- start: CITY -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="city_id">Cidade</label>
                            {!! Form::select('city_id',$cities,'',['class' => 'select2picker select_city']) !!}
                        </div>
                    </div>
                    <!-- end: CITY -->

                    <!-- start: STATE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="state_id">
                                Estado
                            </label>
                            {!! Form::select('state_id',$states,'',['class' => 'select2picker select_state']) !!}
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