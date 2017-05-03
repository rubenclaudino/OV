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

                <div class="container">

                    <!-- start: CONTACT INFORMATION PANEL -->
                    <div class="panel-body">

                        <!-- start: FORM -->
                        {{ Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'PUT','id' => 'updateContact']) }}

                        <div class="row">

                            <!-- start: CONTACT NAME -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="name" >Nome</label>
                                    <input id="name" class="form-control" name="name" type="text"
                                           value="{{ $contact->name }}">
                                </div>
                            </div>

                            <!-- start: TYPE CONTACT -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="quanity">Tipo</label>
                                    {!! Form::select('contact_type', array('0' => 'Dental', '1' => 'Protético', '2' => 'Instituto de Radiologia', '3' => 'Outro'),array($contact->contact_type),['class' => 'form-control', 'style' => 'border-radius:3px']) !!}
                                </div>
                            </div>

                            <!-- start: OBSERVATION -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group">
                                    <label for="obs">Observação</label>
                                    <input id="obs" class="form-control" name="obs" type="text"
                                           value="{{ $contact->obs }}">
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
                                           name="phone_landline" type="text"
                                           value="{{ $contact->phone_landline }}">
                                </div>
                            </div>

                            <!-- start: CEL1 -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="phone_1">Celular</label>
                                    <input class="form-control input-mask-phone" id="phone_1" name="phone_1"
                                           type="text" value="{{ $contact->phone_1 }}">
                                </div>
                            </div>

                            <!-- start: WHATSAPP -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="whatsapp_number">Whatsapp</label>
                                    <input class="form-control input-mask-phone" id="whatsapp_number"
                                           name="whatsapp_number" type="text"
                                           value="{{ $contact->whatsapp_number }}">
                                </div>
                            </div>

                            <!-- start: EMAIL -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="email"
                                           value="{{ $contact->email }}">
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
                                    <label for="address">Rua / Avendia</label>
                                    <input class="form-control" id="address" name="address" type="text"
                                           value="{{ $contact->address }}">
                                </div>
                            </div>

                            <!-- start: NUMBER -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="street_number">Número</label>
                                    <input class="form-control" id="street_number" name="street_number" type="text"
                                           value="{{ $contact->street_number }}">
                                </div>
                            </div>

                            <!-- start: BOROUGH -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="borough">Bairro</label>
                                    <input class="form-control" id="borough" name="borough" type="text"
                                           value="{{ $contact->borough }}">
                                </div>
                            </div>

                            <!-- start: CEP -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="zip_code">CEP</label>
                                    <input class="form-control input-mask-cep" id="zip_code" name="zip_code" type="text"
                                           value="{{ $contact->zip_code }}">
                                </div>
                            </div>

                            <!-- start: CITY -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="city">Cidade</label>
                                    <input class="form-control" id="city" name="city" type="text"
                                           value="{{ $contact->city }}">
                                </div>
                            </div>

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

                            <div class="clearfix"></div>

                        </div>

                        <div>

                            <hr class="custom_sepg">

                            <button class="btn btn-success btn-submit" data-loading-text="Saving..."
                                    type="submit">
                                Atualizar Cadastro
                            </button>

                            <a href="{{ url('/contacts')}}" class="btn btn-danger">
                                Voltar
                            </a>

                        </div>

                        </form>
                        <!-- end: FORM -->

                    </div>
                    <!-- end: CONTACT INFORMATION PANEL -->

                </div>

            </div>
            <!-- end: MAIN INFO PANEL -->

        </div>

    </div>

@endsection
