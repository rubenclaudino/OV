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

                            <h2 class="table_title">Contato<br>
                                <small style="color: #dddddd">Atualizar cadastro do contato</small>
                            </h2>

                            <hr class="custom_sep">

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        <!-- start: FORM -->
                    {{ Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'PUT','id' => 'updateContact']) }}

                        <!-- start: ROW -->
                        <div class="row">

                            <!-- start: CONTACT NAME -->
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input id="name" class="form-control" name="name" type="text"
                                           value="{{ $contact->name }}">
                                </div>
                            </div>
                            <!-- end: CONTACT NAME -->

                            <!-- start: TYPE CONTACT -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="quanity">Tipo</label>
                                    {!! Form::select('contact_type', array('0' => 'Dental', '1' => 'Protético', '2' => 'Instituto de Radiologia', '3' => 'Outro'),array($contact->contact_type),['class' => 'form-control', 'style' => 'border-radius:3px']) !!}
                                </div>
                            </div>
                            <!-- end: TYPE CONTACT -->

                            <!-- start: IS PUBLIC TO ALL USERS -->
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="is_public">Público</label>
                                    {!! Form::select('is_public',array('0' => 'Não',
                                     '1' => 'Sim'), $contact->is_public, ['class' => 'form-control', 'style' => 'border-radius:3px']) !!}
                                    </select>
                                </div>
                            </div>
                            <!-- end: IS PUBLIC TO ALL USERS -->

                            <!-- start: OBSERVATION -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="obs">Observação</label>
                                    <input id="obs" class="form-control" name="obs" type="text"
                                           value="{{ $contact->obs }}">
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
                                           name="phone_landline" type="text"
                                           value="{{ $contact->phone_landline }}">
                                </div>
                            </div>
                            <!-- end: LANDLINE -->

                            <!-- start: CEL1 -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="phone_1">Celular</label>
                                    <input class="form-control input-mask-phone" id="phone_1" name="phone_1"
                                           type="text" value="{{ $contact->phone_1 }}">
                                </div>
                            </div>
                            <!-- end: CEL1 -->

                            <!-- start: WHATSAPP -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="whatsapp_number">Whatsapp</label>
                                    <input class="form-control input-mask-phone" id="whatsapp_number"
                                           name="whatsapp_number" type="text"
                                           value="{{ $contact->whatsapp_number }}">
                                </div>
                            </div>
                            <!-- end: WHATSAPP -->

                            <!-- start: EMAIL -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                           value="{{ $contact->email }}">
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
                                    <input class="form-control" id="address" name="address" type="text"
                                           value="{{ $contact->address }}">
                                </div>
                            </div>
                            <!-- end: ROAD -->

                            <!-- start: NUMBER -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="street_number">Número</label>
                                    <input class="form-control" id="street_number" name="street_number" type="text"
                                           value="{{ $contact->street_number }}">
                                </div>
                            </div>
                            <!-- end: NUMBER -->

                            <!-- start: BOROUGH -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="borough">Bairro</label>
                                    <input class="form-control" id="borough" name="borough" type="text"
                                           value="{{ $contact->borough }}">
                                </div>
                            </div>
                            <!-- end: BOROUGH -->

                            <!-- start: CEP -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="zip_code">CEP</label>
                                    <input class="form-control input-mask-cep" id="zip_code" name="zip_code"
                                           type="text"
                                           value="{{ $contact->zip_code }}">
                                </div>
                            </div>
                            <!-- end: CEP -->

                            <!-- start: CITY -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="city">Cidade</label>
                                    <input class="form-control" id="city" name="city" type="text"
                                           value="{{ $contact->city }}">
                                </div>
                            </div>
                            <!-- end: CITY -->

                            <!-- start: STATE -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="state_id">Estado</label>
                                    {!! Form::select('state_id',array('0' => 'Não Informado',
                                     '1' => 'AC',
                                     '2' => 'AL',
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
                        '27' => 'TO' ),
                        $contact->state_id,['class' => 'form-control', 'style' => 'border-radius:3px']) !!}
                                    </select>
                                </div>
                            </div>
                            <!-- end: STATE -->

                            <div class="clearfix"></div>

                        </div>

                        <!-- start: FORM INTERACTIONS -->
                        <div>

                            <hr class="custom_sepg">

                            <button class="btn btn-success btn-submit" data-loading-text="Saving..."
                                    type="submit">
                                Atualizar Cadastro
                            </button>

                            <a href="{{ url('/contacts')}}" class="btn btn-grey">
                                Voltar
                            </a>

                        </div>
                        <!-- end: FORM INTERACTIONS -->

                        </form>
                        <!-- end: FORM -->

                    </div>
                    <!-- end: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
