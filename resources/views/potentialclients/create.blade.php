@extends('layouts.page')
@section('content')

    <div class="main-content">

        <div class="container">

            <!-- start: MAIN INFO PANEL -->
            <div class="panel panel-white" style="margin-top:15px;">

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
                    {{ Form::open(array('route' => 'potentialclients.store', 'class' => 'form', 'id' => 'addPotentialClient')) }}

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="first_name">Nome</label>
                            <input class="form-control" id="first_name" name="first_name" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="last_name">Sobrenome</label>
                            <input class="form-control" id="last_name" name="last_name" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="spec">Especialidade</label>
                            <select class="form-control" id="spec" name="spec">
                                <option value="0">Não Informado</option>
                                <option value="1">Buco-Maxilo Facial</option>
                                <option value="2">Dentística</option>
                                <option value="3">Endodontia</option>
                                <option value="4">Implantodontia</option>
                                <option value="5">Periodontia</option>
                                <option value="6">Prótese</option>
                                <option value="7">Ortodontia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="0">Não Informado</option>
                                <option value="1">Aguardando Contato</option>
                                <option value="2">Aguardando Lançamento</option>
                                <option value="3">Aguardando Visita</option>
                                <option value="4">Avaliando Proposta</option>
                                <option value="5">Avaliando Opçoes</option>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CLINIC DETAILS -->
                    <h3 class="custom_header">Detalhes do Cliente</h3>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_name">Razão Social</label>
                            <input class="form-control" id="estab_name" name="estab_name" type="text">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_type">Tipo Estabelecimento</label>
                            <select class="form-control" id="estab_type" name="estab_type">
                                <option value="0">Não Informado</option>
                                <option value="1">Clínica</option>
                                <option value="2">Ponto</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_users">Número de usuários</label>
                            <input class="form-control" id="estab_users" name="estab_users" type="number">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CONTACT -->
                    <h3 class="custom_header">Contato</h3>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_landline">Telefone Fixo</label>
                            <input class="form-control input-mask-phone1" id="phone_landline" name="phone_landline" type="text">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="celular_1">Celular</label>
                            <input class="form-control input-mask-phone" id="celular_1" name="celular_1" type="text" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="whatsapp_number">Whatsapp</label>
                            <input class="form-control input-mask-phone" id="whatsapp_number" name="whatsapp_number" type="text">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CONTACT -->
                    <h3 class="custom_header">Endereço</h3>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="street_address">Rua / Avendia</label>
                            <input class="form-control" id="street_address" name="street_address" type="text">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input class="form-control" id="number" name="number" type="text">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="borough">Bairro</label>
                            <input class="form-control" id="borough" name="borough" type="text">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="zip">CEP</label>
                            <input class="form-control input-mask-cep" id="zip" name="zip" type="text">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input class="form-control" id="city" name="city" type="text">
                        </div>
                    </div>

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

                    <!-- start: CONTACT -->
                    <h3 class="custom_header">CRM</h3>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_visit_date">Data de Visita</label>
                            <input class="form-control" id="estab_visit_date" name="estab_visit_date" type="date">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="contact_result">Observação</label>
                            <input class="form-control" id="contact_result" name="contact_result" type="text">
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

                </form>

            </div>

        </div>
        <!-- start: MAIN INFO PANEL -->

    </div>
    </div>
@endsection
