@extends('layouts.page')
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

                        <div class="col-lg-12 col-md-12">

                            <div class="col-lg-12 col-md-12">

                                <h2 class="table_title">Contato<br>
                                    <small style="color: #bbbbbb">Cadastrar um novo contato</small>
                                </h2>

                                <hr class="custom_sep">

                            </div>

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        <!-- start: FORM -->
                    {{ Form::open(array('route' => 'contacts.store', 'class' => 'form', 'id' => 'addContact')) }}

                        <!-- start: CONTACT NAME -->
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input class="form-control" id="name" name="name" type="text">
                            </div>
                        </div>
                        <!-- end: CONTACT NAME -->

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
                        <!-- end: CONTACT TYPE -->

                        <!-- start: SHARE WITH ALL IN CLINIC -->
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="is_public">Público</label>
                                <select class="form-control" id="is_public" name="is_public">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                        </div>
                        <!-- end: SHARE WITH ALL IN CLINIC  -->

                        <div class="clearfix"></div>

                        <!-- start: OBSERVATION -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="obs">Observação</label>
                                <input id="obs" class="form-control" name="obs" type="text">
                            </div>
                        </div>
                        <!-- end: OBSERVATION -->

                        <div class="clearfix"></div>

                        <!-- start: CONTACT -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="custom_header1">Contato</h3>
                        </div>
                        <!-- end: CONTACT -->

                        <!-- start: LANDLINE -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="phone_landline">Telefone Fixo</label>
                                <input class="form-control input-mask-phone1" id="phone_landline"
                                       name="phone_landline" type="text">
                            </div>
                        </div>
                        <!-- end: LANDLINE -->

                        <!-- start: CEL1 -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="celular_1">Celular</label>
                                <input class="form-control input-mask-phone" id="phone_1" name="phone_1"
                                       type="text">
                            </div>
                        </div>
                        <!-- end: CEL1 -->

                        <!-- start: WHATSAPP -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="whatsapp_number">Whatsapp</label>
                                <input class="form-control input-mask-phone" id="whatsapp_number"
                                       name="whatsapp_number" type="text">
                            </div>
                        </div>
                        <!-- end: WHATSAPP -->

                        <!-- start: EMAIL -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email">
                            </div>
                        </div>
                        <!-- end: EMAIL -->

                        <div class="clearfix"></div>

                        <!-- start: ADDRESS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="custom_header1">Endereço</h3>
                        </div>
                        <!-- end: ADDRESS -->

                        <!-- start: ROAD -->
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="address">Rua / Avendia</label>
                                <input class="form-control" id="address" name="address" type="text">
                            </div>
                        </div>
                        <!-- end: ROAD -->

                        <!-- start: NUMBER -->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="street_number">Número</label>
                                <input class="form-control" id="street_number" name="street_number" type="text">
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
                                <label for="zip">CEP</label>
                                <input class="form-control input-mask-cep" id="zip_code" name="zip_code" type="text">
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
                        <!-- end: STATE -->

                        <div class="clearfix"></div>

                        <!-- start: FORM INTERACTIONS -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <hr class="custom_sepg">
                                <button class="btn btn-success btn-submit" data-loading-text="Salvando..."
                                        type="submit">
                                    Salvar Contato
                                </button>
                                <a href="{{ url('/contacts')}}" class="btn btn-grey">
                                    Voltar
                                </a>
                            </div>
                        </div>
                        <!-- end: FORM INTERACTIONS -->

                    </div>
                    <!-- end: PANEL BODY -->

                    </form>
                    <!-- end: FORM -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
