<!-- start: ERROR SECTION -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="errorHandler alert alert-danger no-display">
        <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
    </div>
</div>
<!-- end: ERROR SECTION -->

<!-- start: INFORMATION PANEL -->
<div style="margin: 15px 2px">

    <!-- start: PANEL -->
    <div class="panel">

        <!-- start: PANEL HEAD -->
        <div class="panel-head">

            <div class="col-lg-12 col-md-12">

                <div class="col-lg-12 col-md-12">

                    <h2 class="table_title">Contato<br>
                        <small style="color: #bbbbbb">Dados do Contato</small>
                    </h2>

                    <hr class="custom_sep">

                </div>

            </div>

        </div>
        <!-- end: PANEL HEAD -->

        <!-- start: PANEL BODY -->
        <div class="panel-body">

            <!-- start: DIV -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <!-- start: ROW -->
                <div class="row">

                    <!-- start: CONTACT NAME -->
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            {{ Form::text('name', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: CONTACT NAME -->

                    <!-- start: CONTACT TYPE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="contact_type">Tipo</label>
                            {!! Form::select('contact_type', array('0' => 'Dental','1' => 'Protético','2' => 'Instituto de Radiologia','3' => 'Outro'),null,['class'
                         => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- end: CONTACT TYPE -->

                    <!-- start: SHARE WITH ALL IN CLINIC -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="is_public">Público</label>
                            {!! Form::select('is_public', array('0' => 'Não','1' => 'Sim'),null,['class'
                          => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- end: SHARE WITH ALL IN CLINIC  -->

                    <!-- start: ADDITIONAL INFORMATION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="additional_info">Informações adicionais</label>
                            {{ Form::text('additional_info', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: ADDITIONAL INFORMATION -->

                    <div class="clearfix"></div>

                    <!-- start: CONTACT TITLE -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="custom_header1"><small>Dados de Contato</small></h2>
                    </div>
                    <!-- end: CONTACT TITLE -->

                    <!-- start: LANDLINE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_landline">Telefone Fixo</label>
                            {{ Form::text('phone_landline', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: LANDLINE -->

                    <!-- start: PHONE 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_1">Celular</label>
                            {{ Form::text('phone_1', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: PHONE 1 -->

                    <!-- start: WHATSAPP -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="whatsapp_number">Whatsapp</label>
                            {{ Form::text('whatsapp_number', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: WHATSAPP -->

                    <!-- start: EMAIL -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            {{ Form::email('email', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: EMAIL -->

                    <div class="clearfix"></div>

                    <!-- start: ADDRESS TITLE -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="custom_header1"><small>Dados de Endereço</small></h2>
                    </div>
                    <!-- end: ADDRESS TITLE -->

                    <!-- start: ROAD -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="address">Rua / Avenida</label>
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

                    <!-- start: ZIP CODE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="zip_code">CEP</label>
                            {{ Form::text('zip_code', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: ZIP CODE -->

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
                            <button type="submit" class="btn btn-success">
                                Salvar
                            </button>
                            <a href="{{ url('/dentalplans')}}" class="btn btn-grey">
                                Voltar
                            </a>
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