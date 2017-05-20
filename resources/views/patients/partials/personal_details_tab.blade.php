<!-- start: PERSONAL DETIALS -->
<div id="personal_details" class="tab-pane fade active in">

    <!-- start: ROW -->
    <div class="row">

        <!-- start:  LEFT DIV -->
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <!-- start: ROW -->
            <div class="row">

                <div style="background: whitesmoke;margin-left: 10px;padding-top: 10px"
                     class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- start: IMAGE -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="fileupload fileupload-new" data-provides="fileupload">

                            <div class="fileupload-new thumbnail" style="width:100%"></div>
                            <div style="line-height: 10px; width:100%"
                                 class="fileupload-preview fileupload-exists thumbnail">
                            </div>

                            <div>

                            <span class="btn btn-primary btn-file">
                                <span class="fileupload-new">
                                    <i class="fa fa-picture-o"></i>
                                    Selecione imagem
                                </span>
                                 <span class="fileupload-exists">
                                    <i class="fa fa-picture-o"></i>
                                     Alterar
                                 </span>
                                <input name="patient_profile_image" id="patient_profile_image" type="file"
                                       accept="image/x-png, image/gif, image/jpeg">
                            </span>

                                <span class="btn fileupload-exists btn-danger" data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Remover
                                </span>

                            </div>
                        </div>
                    </div>
                    <!-- end: IMAGE -->

                    <!-- start: DENTIST -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="doc">Dentista</label>
                            {!! Form::select('user_id', $professionals,null,['class' =>
                            'form-control','placeholder' => 'Não informado']) !!}
                        </div>
                    </div>
                    <!-- end: DENTIST -->

                    <!-- start: DENTAL PLAN -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="clinic_dental_plan_id">Convênio</label>
                            {!! Form::select('patient_dental_plans[clinic_dental_plan_id]', $clinic_dental_plans, null,['class' =>
                            'form-control','placeholder' => 'Não informado']) !!}
                        </div>
                    </div>
                    <!-- end: DENTAL PLAN -->

                    <!-- start: SPECIALITY -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="pSpec">Especialidades</label>
                            {!! Form::select('specialty[]',$treatments,2,['class' => 'form-control
                            selectpicker','multiple' => 'true']) !!}
                        </div>
                    </div>
                    <!-- end: SPECIALITY -->

                    <!-- start: INDICATION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="referral_id">Indicação</label>
                            {!! Form::select('referral_id', $referrals,null,['class' =>
                            'form-control','placeholder' => 'Não informado']) !!}
                        </div>
                    </div>
                    <!-- end: INDICATION -->

                    <!-- start: ALLWAYS CONFIRM APPOINTMENT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="confirmation_request">Necessita confirmação</label>
                            {!! Form::select('confirmation_request', array('0' => 'Não','1' => 'Sim'),null,['class'
                           => 'form-control','placeholder' => 'Não informado']) !!}
                        </div>
                    </div>
                    <!-- end: ALLWAYS CONFIRM APPOINTMENT -->

                    <!-- start: VIP -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="vip">vip</label>
                            {!! Form::select('vip', array('0' => 'Não','1' => 'Sim'),null,['class'
                           => 'form-control','placeholder' => 'Não informado']) !!}
                        </div>
                    </div>
                    <!-- end: VIP -->

                </div>

            </div>
            <!-- end: ROW -->

        </div>
        <!-- end: LEFT DIV -->

        <!-- start:  RIGHT DIV -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

            <!-- start:  RIGHT DIV -->
            <ul class="nav nav-tabs nav-nested" style="background:whitesmoke;opacity: 0.5">

                <!-- start: MAIN DETIALS -->
                <li class="active">
                    <a data-toggle="tab" href="#pDetails">
                        <strong>Dados Pessoais</strong>
                    </a>
                </li>
                <!-- end: MAIN DETIALS -->

                <!-- start: CONTACT INFO -->
                <li>
                    <a data-toggle="tab" href="#pContact">
                        <strong>Contato</strong>
                    </a>
                </li>
                <!-- end: CONTACT INFO -->

                <!-- start: ADDRESS -->
                <li>
                    <a data-toggle="tab" href="#pAddress">
                        <strong>Endereço</strong>
                    </a>
                </li>
                <!-- end: ADDRESS -->

            </ul>
            <!-- start:  RIGHT DIV -->

            <!-- start: TAB CONTENT -->
            <div class="tab-content" style="border:none;">

                <!-- start: MAIN DETIALS -->
                <div id="pDetails" class="tab-pane fade active in">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                        <div class="row">

                            <!-- start: NAME -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                                    <label for="first_name">Nome</label>
                                    {{ Form::text('first_name', null, array('class' => 'form-control')) }}
                                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <!-- end: NAME -->

                            <!-- start: LAST NAME -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group  {{ $errors->has('last_name') ? 'has-error' : '' }}">
                                    <label for="last_name">Sobrenome</label>
                                    {{ Form::text('last_name', null,array('class' => 'form-control')) }}
                                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <!-- end: LAST NAME -->

                            <div class="clearfix"></div>

                            <!-- start: GENDER -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="gender">Sexo</label>
                                    {!! Form::select('gender', ['0' => 'Masculino','1' => 'Feminino'],'',['class' => 'form-control', 'placeholder' => 'Não
                                    informado']) !!}
                                </div>
                            </div>
                            <!-- end: GENDER -->

                            <!-- start: DOB -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="date_of_birth">Data de Nascimento</label>
                                    <div class="input-group">
                                        {{ Form::text('date_of_birth', null,array('class' => 'form-control datepicker')) }}
                                    </div>
                                </div>
                            </div>
                            <!-- end: DOB -->

                            <!-- start: CPF -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="CPF">CPF</label>
                                    {{ Form::text('CPF', null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: CPF -->

                            <!-- start: RG -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="RG">RG</label>
                                    {{ Form::text('RG',null,array('class' => 'form-control'))
                                    }}
                                </div>
                            </div>
                            <!-- end: RG -->

                            <div class="clearfix"></div>

                            <!-- start: CIVAL STATUS -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="marital_status">Estado Civil</label>
                                    {!! Form::select('marital_status', ['0' => 'Solteiro(a)','1'
                                    => 'Casado(a)','2' => 'Divorciado(a)','3' => 'Viúvo(a)'],'',['class'
                                    => 'form-control','placeholder' => 'Não informado']) !!}
                                </div>
                            </div>
                            <!-- end: CIVAL STATUS -->

                            <!-- start: NATIONALTY -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="nationality">Nacionalidade</label>
                                    {{ Form::text('nationality', null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: NATIONALTY -->

                            <div class="clearfix"></div>

                            <!-- start: PROFESSION -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="profession">Ocupação / Profissão</label>
                                    {{ Form::text('profession', null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: PROFESSION -->

                            <!-- start: EDUCATION -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="education">Grau de Instrução</label>
                                    {!! Form::select('education', ['0' => 'Ensino Fundamental','1'
                                    => 'Ensino Médio','2' => 'Ensino Superior'], null,['class' =>
                                    'form-control','placeholder' => 'Não informado']) !!}
                                </div>
                            </div>
                            <!-- end: EDUCATION -->

                            <div class="clearfix"></div>

                            <!-- start: OBSERVATION -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="observation">Observação</label>
                                    {{ Form::text('observation', null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: OBSERVATION -->

                        </div>

                    </div>

                </div>
                <!-- end: MAIN DETIALS -->

                <!-- start: CONTACT INFO -->
                <div id="pContact" class="tab-pane fade">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="row">

                            <!-- start: LANDLINE PHONE -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="phone_landline">
                                    Telefone Fixo
                                </label>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                        {{ Form::text('phone_landline',null,array('class' => 'form-control input-mask-phone1', 'id' => 'phone_landline')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: LANDLINE PHONE -->

                            <!-- start: WORK PHONE -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="celular_1">
                                    Telefone Trabalho
                                </label>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                             {{ Form::text('work_phone',null,array('class' => 'form-control input-mask-phone', 'id' => 'work_phone')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: WORK PHONE -->

                            <!-- start: CEL 1 -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="celular_1">
                                    Celular 1
                                </label>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                            {{ Form::text('phone_1',null,array('class' => 'form-control input-mask-phone', 'id' => 'phone_1')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CEL 1 -->

                            <!-- start: CEL 2 -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="celular_2">
                                        Celular 2
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                            {{Form::text('phone_2',null,array('class' => 'form-control input-mask-phone', 'id' => 'phone_2')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CEL 2 -->

                            <!-- start: WHATSAPP -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="patient_whatsapp">
                                        Whatsapp
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                            {{Form::text('whatsapp_number',null,array('class' => 'form-control input-mask-phone', 'id' => 'whatsapp_number')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: WHATSAPP -->

                            <!-- start: EMAIL -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="email">
                                        Email
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                             {{ Form::text('email',null,array('class' => 'form-control input-mask-email', 'id' => 'email')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: EMAIL -->

                            <!-- start: CONTACT 1 NUMBER -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="related_phone_1">
                                        Contato 1
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                            {{Form::text('related_phone_1',null,array('class' => 'form-control input-mask-phone', 'id' => 'related_phone_1')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CONTACT 1 NUMBER -->

                            <!-- start: CONTACT 1 TYPE -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="related_name_1">
                                        Relação
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                         <span>
                                            {{Form::text('related_name_1',null,array('class' => 'form-control', 'id' => 'related_name_1')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CONTACT 1 TYPE -->

                            <!-- start: CONTACT 2 NUMBER -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="related_phone_2">
                                        Contato 2
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                         <span>
                                            {{Form::text('related_phone_2',null,array('class' => 'form-control input-mask-phone', 'id' => 'related_phone_2')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CONTACT 2 NUMBER -->

                            <!-- start: CONTACT 2 TYPE -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group"
                                     style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                    <label for="related_name_2">
                                        Relação
                                    </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                        <span>
                                            {{Form::text('related_name_2',null,array('class' => 'form-control', 'id' => 'related_name_2')) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end: CONTACT 2 TYPE -->

                        </div>

                    </div>

                </div>
                <!-- end: CONTACT INFO -->

                <!-- start: ADDRESS -->
                <div id="pAddress" class="tab-pane fade">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                        <div class="row">

                            <!-- start: ROAD -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                <div class="form-group">
                                    <label for="street_address">Rua/Avenida</label>
                                    {{Form::text('address',null,array('class' => 'form-control',
                                    'id' => 'address')) }}
                                </div>
                            </div>
                            <!-- end: ROAD -->

                            <!-- start: NUMBER -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="street_number">Número</label>
                                    {{Form::text('street_number',null,array('class' => 'form-control', 'id' =>
                                    'street_number')) }}
                                </div>
                            </div>
                            <!-- end: NUMBER -->

                            <!-- start: BOUROUGH -->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="borough">
                                        Bairro
                                    </label>
                                    {{ Form::text('borough',null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: BOUROUGH -->

                            <!-- start: ZIP -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="zip_code">CEP</label>
                                    {{Form::text('zip_code',null,array('class' => 'form-control
                                    input-mask-cep')) }}
                                </div>
                            </div>
                            <!-- end: ZIP -->

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

                            <!-- start: OBSERVATION -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="observation">Observations</label>
                                    {{ Form::text('observation',null,array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- end: OBSERVATION -->

                        </div>

                    </div>

                </div>
                <!-- end: ADDRESS -->

            </div>
            <!-- end: TAB CONTENT -->

        </div>
        <!-- end: RIGHT DIV -->

    </div>
    <!-- end: ROW -->

</div>
<!-- end: PERSONAL DETIALS -->