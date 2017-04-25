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

                <div class="panel-body">

                    {{ Form::open(array('route' => ['potentialclients.update', $client->id], 'method' => 'PUT', 'class' => 'form', 'id' => 'updatePotentialClients', 'enctype' => 'multipart/form-data')) }}
                    <input type="hidden" name="action" value="save_profile">

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="first_name">Nome</label>
                            <input class="form-control" id="first_name" name="first_name" type="text"
                                   value="{{ $client->first_name }} " required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="last_name">Sobrenome</label>
                            <input class="form-control" id="last_name" name="last_name" type="text"
                                   value="{{ $client->last_name }}" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="spec">Especialidade</label>
                            {!! Form::select('spec',array('0' => 'Não Informado','1' => 'Buco-Maxilo Facial','2' => 'Dentística','3' => 'Endodontia','4' => 'Implantodontia','5' => 'Periodontia','6' => 'Prótese','7' => 'Ortodontia'),$client->spec,['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="status">Status</label>
                            {!! Form::select('status',array('0' => 'Não Informado','1' => 'Aguardando Contato','2' => 'Aguardando Lançamento','3' => 'Aguardando Visita','4' => 'Avaliando Proposta','5' => 'Avaliando Opçoes'),$client->status,['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CLINIC DETAILS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header">Detalhes do Cliente</h3>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_name">Razão Social</label>
                            <input class="form-control" id="estab_name" name="estab_name" type="text"
                                   value="{{ $client->estab_name }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_type">Tipo Estabelecimento</label>
                            {!! Form::select('estab_type',array('0' => 'Não Informado','1' => 'Clínica','2' => 'Ponto'),$client->estab_type,['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_users">Número de usuários</label>
                            <input class="form-control" id="estab_users" name="estab_users" type="number"
                                   value="{{ $client->estab_users }}">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: CONTACT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header">Contato</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="phone_landline">Telefone Fixo</label>
                            <input class="form-control" id="phone_landline" name="phone_landline" type="text"
                                   value="{{ $client->contact->phone_landline }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="celular_1">Celular</label>
                            <input class="form-control" id="celular_1" name="celular_1" type="text"
                                   value="{{ $client->contact->celular_1 }}" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="whatsapp_number">Whatsapp</label>
                            <input class="form-control" id="whatsapp_number" name="whatsapp_number" type="text"
                                   value="{{ $client->contact->whatsapp_number }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email"
                                   value="{{ $client->contact->email }}">
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: ADDRESS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header">Endereço</h3>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="street_address">Rua / Avendia</label>
                            <input class="form-control" id="street_address" name="street_address" type="text"
                                   value="{{ $client->address->street_address }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="number">Número</label>
                            <input class="form-control" id="number" name="number" type="text"
                                   value="{{ $client->address->number }}">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="borough">Bairro</label>
                            <input class="form-control" id="borough" name="borough" type="text"
                                   value="{{ $client->address->borough }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="zip">CEP</label>
                            <input class="form-control" id="zip" name="zip" type="text"
                                   value="{{ $client->address->zip }}">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <input class="form-control" id="city" name="city" type="text"
                                   value="{{ $client->address->city }}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="state_id">Estado</label>
                            {!! Form::select('state_id',array('0' => 'Não Informado', '1' => 'AC', '2' => 'AL',
                            '3' => 'AP',
                            '4' => 'AM',
                            '5' => 'BA',
                            '6' => 'CE',
                            '7' => 'DF',
                            '8' => 'ES',
                            '9' => 'GO',
                            '10' => 'MA',
                            '11' => 'MT',
                            '12' => 'MS',
                            '13' => 'MG',
                            '14' => 'PA',
                            '15' => 'PB',
                            '16' => 'PR',
                            '17' => 'PE',
                            '18' => 'PI',
                            '19' => 'RJ',
                            '20' => 'RN',
                            '21' => 'RS',
                            '22' => 'RO',
                            '23' => 'RR',
                            '24' => 'SC',
                            '25' => 'SP',
                            '26' => 'SE',
                            '27' => 'TO' ),$client->address->state_id,['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- start: FEEDBACK -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="custom_header">CRM</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="estab_visit_date">Data de Visita</label>
                            <input class="form-control" id="estab_visit_date" name="estab_visit_date"
                                   type="date"
                                   value="{{ $client->estab_visit_date }}">
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="contact_result">Observação</label>
                            <input class="form-control" id="contact_result" name="contact_result" type="text"
                                   value="{{ $client->contact_result }}">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <hr class="custom_sepg">
                            <button class="btn btn-success btn-submit" data-loading-text="Salvando..."
                                    type="submit">
                                Atualizar Cadastro
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
