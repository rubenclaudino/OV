@extends('layouts.page')
@section('content')

    <div class="main-content">

        <div class="container">

            <!-- start: MAIN INFO PANEL -->
            <div class="panel panel-white" style="margin-top:8px;">

                <!-- start: PANEL HEADING -->
                <div class="panel-heading header_t1" style="margin-bottom: 0px">
                    <h2 class="table_title">Contato<br>
                        <small style="color: #dddddd">Cadastrar um novo contato</small>
                    </h2>
                    <hr class="custom_sep" style="padding: 0;margin: 0">
                </div>
                <!-- end: PANEL HEADING -->

                <div class="panel-body">

                {{ Form::open(array('route' => 'contacts.store', 'class' => 'form', 'id' => 'addContact')) }}

                    <!-- start: CONTACT NAME -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="title">Nome</label>
                            <input class="form-control" id="title" name="title" type="text">
                        </div>
                    </div>

                    <!-- start: CONTACT TYPE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="contact_type">Tipo</label>
                            <select class="form-control" id="contact_type" name="contact_type">
                                <option value="0">Dental</option>
                                <option value="1">Protético</option>
                                <option value="2">Instituto de Radiologia</option>
                                <option value="3">Outro</option>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: OBSERVATION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                        <div class="form-group">
                            <label for="obs">Observação</label>
                            <input id="obs" class="form-control" name="obs" type="text">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CONTACT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header1">Contato</h3>
                    </div>

                    <!-- start: LANDLINE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_landline">Telefone Fixo</label>
                            <input class="form-control input-mask-phone1" id="phone_landline"
                                   name="phone_landline" type="text">
                        </div>
                    </div>

                    <!-- start: CEL1 -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="celular_1">Celular</label>
                            <input class="form-control input-mask-phone" id="celular_1" name="celular_1"
                                   type="text">
                        </div>
                    </div>

                    <!-- start: WHATSAPP -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="whatsapp_number">Whatsapp</label>
                            <input class="form-control input-mask-phone" id="whatsapp_number"
                                   name="whatsapp_number" type="text">
                        </div>
                    </div>

                    <!-- start: EMAIL -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: ADDRESS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header1">Endereço</h3>
                    </div>

                    <!-- start: ROAD -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="street_address">Rua / Avendia</label>
                            <input class="form-control" id="street_address" name="street_address" type="text">
                        </div>
                    </div>

                    <!-- start: NUMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input class="form-control" id="number" name="number" type="text">
                        </div>
                    </div>

                    <!-- start: BOROUGH -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="borough">Bairro</label>
                            <input class="form-control" id="borough" name="borough" type="text">
                        </div>
                    </div>

                    <!-- start: CEP -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="zip">CEP</label>
                            <input class="form-control input-mask-cep" id="zip" name="zip" type="text">
                        </div>
                    </div>

                    <!-- start: CITY -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input class="form-control" id="city" name="city" type="text">
                        </div>
                    </div>

                    <!-- start: STATE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="state_id">Estado</label>
                            <select class="form-control" id="state_id" name="state_id">
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

                    <div class="clearfix"></div>

                    <!-- start: FORM INTERACTIONS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <hr class="custom_sepg">
                            <button class="btn btn-success btn-submit" data-loading-text="Salvando..." type="submit">
                                Salvar Contato
                            </button>
                        </div>
                    </div>

                </div>

                </form>

            </div>

        </div>
        <!-- start: MAIN INFO PANEL -->

    </div>

    </div>

@endsection
