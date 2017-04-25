@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;font-size: 1.1em;">

                <!-- start: TAB OPTIONS -->
                <ul class="nav nav-tabs">

                    <!-- start: GENERAL INFO -->
                    <li class="active">
                        <a data-toggle="tab" href="#personal_details">
                            <strong>Geral</strong>
                        </a>
                    </li>
                    <!-- end: GENERAL INFO -->

                    <!-- start: HEALTH -->
                    <li>
                        <a data-toggle="tab" href="#health">
                            <strong>Anamnese</strong>
                        </a>
                    </li>
                    <!-- end: HEALTH -->

                    <!-- start: DENTAL PLAN -->
                    <li id="dentalPlanTitle">
                        <a data-toggle="tab" href="#dentalPlan">
                            <strong>Convênio</strong>
                        </a>
                    </li>
                    <!-- end: DENTAL PLAN -->

                    <!-- start: SPEC - ORT -->
                    <li id="ortoTitle">
                        <a data-toggle="tab" href="#orto">
                            <strong>Ortodontia</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - ORT -->

                    <!-- start: SPEC - PROST -->
                    <li id="prosTitle">
                        <a data-toggle="tab" href="#prosthesis">
                            <strong>Prótese</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - PROST -->

                    <!-- start: SPEC - IMPLANT -->
                    <li id="impTitle">
                        <a data-toggle="tab" href="#implant">
                            <strong>Implantodontia</strong>
                        </a>
                    </li>
                    <!-- end: SPEC - IMPLANT -->

                    <!-- end: EXAMS -->
                    <li>
                        <a data-toggle="tab" href="#exam">
                            <strong>Exames</strong>
                        </a>
                    </li>
                    <!-- end: EXAMS -->

                </ul>
                <!-- end: TAB OPTIONS -->

            {{ Form::open(array('route' => 'patients.store', 'class' => 'form', 'id' => 'addPatient', 'enctype' => 'multipart/form-data')) }}

            <!-- start: TAB CONTENT -->
                <div class="tab-content panel" style="border-radius: 1px">

                    <!-- start: PERSONAL DETIALS -->
                    <div id="personal_details" class="tab-pane fade active in">

                        <!-- start: ROW -->
                        <div class="row">

                            <!-- start:  LEFT DIV -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                <!-- start: ROW -->
                                <div class="row">

                                    <!-- start: IMAGE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width:100%">
                                            </div>
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
                                                <input name="patient_profile_image" id="patient_profile_image"
                                                       type="file" accept="image/x-png, image/gif, image/jpeg">
                                          </span>
                                                <a href="#" class="btn fileupload-exists btn-light-grey"
                                                   data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remover
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: IMAGE -->

                                    <!-- start: PROFESSIONAL -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="doc">Profissional</label>
                                            {!! Form::select('professional_id', $professionals,'',['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end: PROFESSIONAL -->

                                    <!-- start: HAS DENTAL PLAN -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="hasDentalPlan">Tem Convênio</label>
                                            {!! Form::select('has_dental_plan', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end: HAS DENTAL PLAN -->

                                    <!-- start: SPECIALITY -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="hidden" name="hasProsSpec" id="hasProsSpec" value="0"/>
                                        <input type="hidden" name="hasOrtoSpec" id="hasOrtoSpec" value="0"/>
                                        <div class="form-group">
                                            <label for="pSpec">Especialidades</label>
                                            {!! Form::select('speciality[]',$treatments,'',['class' => 'form-control selectpicker','multiple' => 'true']) !!}
                                        </div>
                                    </div>
                                    <!-- end: SPECIALITY -->

                                    <!-- start: INDICATION -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="indication">Indicação</label>
                                            {!! Form::select('indication', array('0' => 'Conhecido','1' => 'TV','2' => 'Rádio','3' => 'Local','4' => 'Outdoor','5' => 'Professional','6' => 'Internet','7' => 'Lista Telefonica'),'',['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end: INDICATION -->

                                    <!-- start: SMS VIP -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkbox">
                                            <label>
                                                {{ Form::checkbox('sms_confirmation','',null,array('class' => 'grey')) }}
                                                Confirmação SMS
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                {{ Form::checkbox('vip','',null,array('class' => 'grey')) }}
                                                VIP
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end: SMS VIP -->

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
                                                    <div class="form-group">
                                                        <label for="first_name">Nome</label>
                                                        {{ Form::text('first_name','',array('class' => 'form-control', 'id' => 'first_name')) }}
                                                    </div>
                                                </div>
                                                <!-- end: NAME -->

                                                <!-- start: LAST NAME -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="last_name">Sobrenome</label>
                                                        {{ Form::text('last_name','',array('class' => 'form-control', 'id' => 'last_name')) }}
                                                    </div>
                                                </div>
                                                <!-- end: LAST NAME -->

                                                <!-- start: GENDER -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="gender">Sexo</label>
                                                        {!! Form::select('gender', array('0' => 'Masculino','1' => 'Feminino'),'',['class' => 'form-control', 'placeholder' => 'Não informado', 'id' => 'gender']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: GENDER -->

                                                <!-- start: DOB -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="DOB">Data de Nascimento</label>
                                                        <div class="input-group">
                                                            {{ Form::text('DOB','',array('class' => 'form-control date-picker', 'id' => 'DOB')) }}
                                                            <span class="input-group-addon"> <i
                                                                        class="fa fa-calendar"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: DOB -->

                                                <!-- start: CPF -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="CPF">CPF</label>
                                                        {{ Form::text('CPF','',array('class' => 'form-control', 'id' => 'CPF')) }}
                                                    </div>
                                                </div>
                                                <!-- end: CPF -->

                                                <!-- start: RG -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="RG">RG</label>
                                                        {{ Form::text('RG','',array('class' => 'form-control','id' => 'RG')) }}
                                                    </div>
                                                </div>
                                                <!-- end: RG -->

                                                <div class="clearfix"></div>

                                                <!-- start: CIVAL STATUS -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="marital_status">Estado Civil</label>
                                                        {!! Form::select('maritial_status', array('0' => 'Solteiro(a)','1' => 'Casado(a)','2' => 'Divorciado(a)','3' => 'Viúvo(a)'),'',['class' => 'form-control','placeholder' => 'Não informado', 'id' => 'maritial_status']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: CIVAL STATUS -->

                                                <!-- start: EDUCATION -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="education">Grau de Instrução</label>
                                                        {!! Form::select('education', array('0' => 'Ensino Fundamental','1' => 'Ensino Médio','2' => 'Ensino Superior'),'',['class' => 'form-control','placeholder' => 'Não informado', 'id' => 'education']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: EDUCATION -->

                                                <div class="clearfix"></div>

                                                <!-- start: NATIONALTY -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="nationality">Nacionalidade</label>
                                                        {{ Form::text('nationality','',array('class' => 'form-control', 'id' => 'nationality')) }}
                                                    </div>
                                                </div>
                                                <!-- end: NATIONALTY -->

                                                <!-- start: PROFESSION -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="profession">Ocupação / Profissão</label>
                                                        {{ Form::text('profession','',array('class' => 'form-control', 'id' => 'profession')) }}
                                                    </div>
                                                </div>
                                                <!-- end: PROFESSION -->

                                                <!-- start: OBSERVATION -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="observation">Observação</label>
                                                        {{ Form::text('observation','',array('class' => 'form-control', 'id' => 'observation')) }}
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
                                                                     {{ Form::text('phone_landline','',array('class' => 'form-control input-mask-phone1', 'id' => 'phone_landline')) }}
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
                                                                     {{ Form::text('celular_1','',array('class' => 'form-control input-mask-phone', 'id' => 'celular_1')) }}
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
                                                                    {{ Form::text('celular_1','',array('class' => 'form-control input-mask-phone', 'id' => 'celular_1')) }}
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
                                                                    {{Form::text('celular_2','',array('class' => 'form-control input-mask-phone', 'id' => 'celular_2')) }}
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
                                                                    {{Form::text('whatsapp_number','',array('class' => 'form-control input-mask-phone', 'id' => 'whatsapp_number')) }}
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
                                                                     {{ Form::text('email','',array('class' => 'form-control input-mask-email', 'id' => 'email')) }}
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: EMAIL -->

                                                <!-- start: CONTACT 1 NUMBER -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="ref_num1">
                                                            Contato 1
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                                    {{Form::text('ref_num1','',array('class' => 'form-control input-mask-phone', 'id' => 'ref_num1')) }}
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 1 NUMBER -->

                                                <!-- start: CONTACT 1 TYPE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="ref1">
                                                            Relação
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                 <span>
                                                                    {{Form::text('ref1','',array('class' => 'form-control input-mask-phone', 'id' => 'ref1')) }}
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 1 TYPE -->

                                                <!-- start: CONTACT 2 NUMBER -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="ref_num2">
                                                            Contato 2
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                 <span>
                                                                    {{Form::text('ref_num2','',array('class' => 'form-control input-mask-phone', 'id' => 'ref_num2')) }}
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 2 NUMBER -->

                                                <!-- start: CONTACT 2 TYPE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="ref2">
                                                            Relação
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                                    {{Form::text('ref2','',array('class' => 'form-control input-mask-phone', 'id' => 'ref2')) }}
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
                                                        {{Form::text('street_address','',array('class' => 'form-control', 'id' => 'street_address')) }}
                                                    </div>
                                                </div>
                                                <!-- end: ROAD -->

                                                <!-- start: NUMBER -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="number">Número</label>
                                                        {{Form::text('number','',array('class' => 'form-control', 'id' => 'number')) }}
                                                    </div>
                                                </div>
                                                <!-- end: NUMBER -->

                                                <!-- start: BOUROUGH -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="borough">
                                                            Bairro
                                                        </label>
                                                        {{ Form::text('borough','',array('class' => 'form-control', 'id' => 'borough')) }}
                                                    </div>
                                                </div>
                                                <!-- end: BOUROUGH -->

                                                <!-- start: ZIP -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="zip">CEP</label>
                                                        {{Form::text('zip','',array('class' => 'form-control input-mask-cep', 'id' => 'zip')) }}
                                                    </div>
                                                </div>
                                                <!-- end: ZIP -->

                                                <!-- start: CITY -->
                                                <div class="col-lg-9 col-md9 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="city">Cidade</label>
                                                        {{ Form::text('city','',array('class' => 'form-control', 'id' => 'city')) }}
                                                    </div>
                                                </div>
                                                <!-- end: CITY -->

                                                <!-- start: STATE -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="state_id">
                                                            Estado
                                                        </label>
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

                                                <!-- start: OBSERVATION -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="patient_obs">Observations</label>
                                                        {{ Form::text('patient_obs','',array('class' => 'form-control', 'id' => 'patient_obs')) }}
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
                        <!-- start: ROW -->

                    </div>
                    <!-- end: PERSONAL DETIALS -->

                    <!-- start: HEALTH -->
                    <div id="health" class="tab-pane fade">

                        <div class="row" style="background:#fff;">

                            <!-- start: LEFT SIDE INFO -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <div class="row">

                                    <!-- start:  TAKES MEDICINES -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="take_drug">Está tomando medicamentos</label>
                                            {!! Form::select('take_drugs', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  TAKES MEDICINES -->

                                    <!-- start:  BIRTH DEFECTS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="have_birth_defect">Anomalias congénitas</label>
                                            {!! Form::select('has_birth_defect', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  BIRTH DEFECTS -->

                                    <!-- start:  BONE DEVELOPMENT -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="bone_dev_stage">Bone development stage?</label>
                                            {!! Form::select('bone_dev_stage', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  BONE DEVELOPMENT -->

                                    <!-- start:  TAKES PREGNANCY PILLS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="take_prg_pills">Utiliza algum anticoncepcional</label>
                                            {!! Form::select('take_preg_pills', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  TAKES PREGNANCY PILLS -->

                                    <!-- start:  PREV SURGERIES -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="has_prev_surgeries">Teve alguma operação grave</label>
                                            {!! Form::select('has_prev_surgeries', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  PREV SURGERIES -->

                                    <!-- start:  CURRENT HEALTH -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="current_health">Estado de Saúde</label>
                                            {!! Form::select('current_health', array('0' => 'Ruim','1' => 'Boa','2' => 'Excelente'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  CURRENT HEALTH -->

                                    <!-- start:  WHEELCHAIR -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="wheel_chair">Cadeirante</label>
                                            {!! Form::select('wheel_chair', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  WHEELCHAIR -->

                                    <!-- start:  BODY TYPE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="body_type">Biotipo</label>
                                            {!! Form::select('body_type_id', array('0' => 'Não','1' => 'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  BODY TYPE -->

                                    <!-- start:  HEIGHT -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="patient_height">Altura</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                {{ Form::text('height','',array('class' => 'form-control','placeholder' => 'Não Informado')) }}
                                                <span class="input-group-addon">cm</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end:  HEIGHT -->

                                    <!-- start:  WEIGHT -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="patient_weight">Peso</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                {{ Form::text('weight','',array('class' => 'form-control','placeholder' => 'Não Informado')) }}
                                                <span class="input-group-addon">Kg</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end:  WEIGHT -->

                                </div>

                            </div>
                            <!-- end: LEFT SIDE INFO -->

                            <!-- start: RIGHT SIDE INFO -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"
                                 style="margin-top: 25px;background: whitesmoke;padding: 20px 0px">

                                <input type="hidden" value="0" name="hasDisease" id="hasDisease"/>

                                <style>
                                    #diseaseList th, #diseaseList td {
                                        border-top: none !important;

                                    / / border: 1 px solid red;
                                    }

                                    #diseaseList tbody > tr > td {
                                        vertical-align: top !important;
                                    }

                                    #diseaseList {
                                        width: 100%;
                                    }

                                    input[name='diseases[]'] {
                                        margin-right: 10px;
                                    }
                                </style>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <?php foreach($disease as $data){ ?>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>{{ Form::checkbox('disease','0','',array('class' => 'grey','data-id' => $data->id)) }} {{$data->title}}</label>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>

                                    <?php } ?>
                                </div>

                            </div>
                            <!-- end: RIGHT SIDE INFO -->

                        </div>

                    </div>
                    <!-- end: HEALTH -->

                    <!-- start: DENTAL PLAN -->
                    <div id="dentalPlan" class="tab-pane fade">

                        <!-- start: ROW -->
                        <div class="row" style="background:#fff;">

                            <!-- start: ADD DENTAL PLAN -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button id="addDenalPlan1" class="btn btn-block btn-primary">
                                    Add Dental Plan
                                </button>
                                <hr class="custom_sepg">
                            </div>
                            <!-- start: ADD DENTAL PLAN -->

                            <input type="hidden" class="form-control" id="hasDentalPlan2" name="hasDentalPlan2"
                                   value="0">
                            <input type="hidden" class="form-control" id="hasDentalPlan3" name="hasDentalPlan3"
                                   value="0">

                            <!-- start: DIV -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">

                                <!-- start: PANEL -->
                                <div class="panel panel-white" style="background: whitesmoke">

                                    <!-- start: PANEL BODY -->
                                    <div class="panel-body">

                                        <!-- start: ROW -->
                                        <div class="row">

                                            <!-- start: DENTAL PLAN -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="accepted_DP1">Dental Plan</label>
                                                    <select class="form-control" id="accepted_DP1" name="accepted_DP1">
                                                        <option>Não Informado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- end: DENTAL PLAN -->

                                            <!-- start: CARD NUMBER -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="typeOfPlan1">Card Number</label>
                                                    <input type="text" class="form-control" id="typeOfPlan1"
                                                           name="typeOfPlan1">
                                                </div>
                                            </div>
                                            <!-- end: CARD NUMBER -->

                                            <!-- start: TITLE HOLDER -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="cardNo1">Title Holder</label>
                                                    <input type="text" class="form-control" id="cardNo1" name="cardNo1">
                                                </div>
                                            </div>
                                            <!-- end: TITLE HOLDER -->

                                            <!-- start: PLAN TYPE -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="cardExpDate1">Plan Type</label>
                                                <div class="form-group input-group">
                                                    <input type="text" class="form-control" id="cardNo1" name="cardNo1">
                                                </div>
                                            </div>
                                            <!-- end: PLAN TYPE -->

                                            <!-- start: ANS CODE -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="DP_acd1">ANS Code</label>
                                                    <input type="text" class="form-control" id="DP_acd1" name="DP_acd1">
                                                </div>
                                            </div>
                                            <!-- end: ANS CODE -->

                                        </div>
                                        <!-- end: ROW -->

                                    </div>
                                    <!-- end: PANEL BODY -->

                                </div>
                                <!-- end: PANEL -->

                            </div>
                            <!-- end: DIV -->

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding dentalPlanHidden" id="hideDP1">
                                <div class="panel panel-white accepted_plan">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <button id="addDenalPlan2" class="btn btn-block btn-primary">
                                                    Add Dental Plan
                                                </button>
                                                <br>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="accepted_DP2">Dental Plan</label>
                                                    <select class="form-control" id="accepted_DP2" name="accepted_DP2">
                                                        <option>--Please select a professional--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="typeOfPlan2">Type Of Plan</label>
                                                    <input type="text" class="form-control" id="typeOfPlan2"
                                                           name="typeOfPlan2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="cardNo2">Card Number</label>
                                                    <input type="text" class="form-control" id="cardNo2" name="cardNo2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="cardExpDate2">Expiry Date</label>
                                                <div class="form-group input-group">
                                                    <input data-date-format="dd-mm-yyyy" data-date-viewmode="years"
                                                           class="form-control date-picker" type="text"
                                                           id="cardExpDate2" name="cardExpDate2">
                                                    <span class="input-group-addon"> <i
                                                                class="fa fa-calendar"></i> </span>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="DP_acd2">Accomodations</label>
                                                    <input type="text" class="form-control" id="DP_acd2" name="DP_acd2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding dentalPlanHidden" id="hideDP2">
                                <div class="panel panel-white accepted_plan">
                                    <div class="panel-body">
                                        <div class="row">
                                            <!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <a id="addDenalPlan3" class="btn btn-block btn-primary">
                                                  Add Dental Plan
                                               </a>
                                               <br>
                                            </div-->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="accepted_DP3">Dental Plan</label>
                                                    <select class="form-control" id="accepted_DP3" name="accepted_DP3">
                                                        <option>--Please select a professional--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="typeOfPlan3">Type Of Plan</label>
                                                    <input type="text" class="form-control" id="typeOfPlan3"
                                                           name="typeOfPlan3">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="cardNo3">Card Number</label>
                                                    <input type="text" class="form-control" id="cardNo3" name="cardNo3">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="cardExpDate3">Expiry Date</label>
                                                <div class="form-group input-group">
                                                    <input data-date-format="dd-mm-yyyy" data-date-viewmode="years"
                                                           class="form-control date-picker" type="text"
                                                           id="cardExpDate3" name="cardExpDate3">
                                                    <span class="input-group-addon"> <i
                                                                class="fa fa-calendar"></i> </span>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="DP_acd3">Accomodations</label>
                                                    <input type="text" class="form-control" id="DP_acd3" name="DP_acd3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end: ROW -->

                    </div>
                    <!-- end: DENTAL PLAN -->

                    <!-- start: ORTO -->
                    <div id="orto" class="tab-pane fade">

                        <!-- start: ROW -->
                        <div class="row" style="background:#fff;">

                            <!-- start: LEFT SIDE INFO -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">

                                <!-- start: PANEL BODY -->
                                <div class="panel-body">

                                    <!-- start: ROW -->
                                    <div class="row">

                                        <!-- start: TREATMENT STATUS -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="ortho_treatment_status">Status do Tratamento</label>
                                                <select class="form-control" id="ortho_treatment_status"
                                                        name="ortho_treatment_status">
                                                    <option value="1">Ativo</option>
                                                    <option value="0">Inativo</option>
                                                    <option value="2">Aguardando Documentação</option>
                                                    <option value="3">Finalizado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end: TREATMENT STATUS -->

                                        <!-- start: ANTERIOR ORTHODONTIC TREATMENT -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="anterior_ortho_treatment">
                                                    Já usou aparelho antes
                                                </label>
                                                <input type="text" class="form-control" id="anterior_ortho_treatment"
                                                       name="anterior_ortho_treatment">
                                            </div>
                                        </div>
                                        <!-- end: ANTERIOR ORTHODONTIC TREATMENT -->

                                        <!-- start: REASON FOR ORTHODONTIC TREATMENT -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="ortho_reason_for_treatment">Razão do tratamento</label>
                                                <input type="text" class="form-control" id="ortho_reason_for_treatment"
                                                       name="ortho_reason_for_treatment">
                                            </div>
                                        </div>
                                        <!-- end: REASON FOR ORTHODONTIC TREATMENT -->

                                        <!-- start: MOTIVAITIONAL LEVEL -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="orto_motivation_level">Nível de motivação</label>
                                                <input type="text" class="form-control" id="orto_motivation_level"
                                                       name="orto_motivation_level">
                                            </div>
                                        </div>
                                        <!-- end: MOTIVAITIONAL LEVEL -->

                                        <!-- start: BRACES TYPE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="brace_type">Tipo Aparelho</label>
                                                <select class="form-control" id="brace_type"
                                                        name="brace_type">
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end: BRACES TYPE -->

                                        <!-- start: ORTHODONTIST RESPONSIBLE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="ortho_responsible">Especialista</label>
                                                <select class="form-control" id="ortho_responsible"
                                                        name="ortho_responsible">
                                                </select>
                                            </div>
                                        </div>
                                        <!-- start: ORTHODONTIST RESPONSIBLE -->

                                        <!-- start: BRACE PRICE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="otho_observation">Valor Aparelho</label>
                                                <input type="text" class="form-control" id="orto_motivation_level"
                                                       name="orto_motivation_level">
                                            </div>
                                        </div>
                                        <!-- end: BRACE PRICE -->

                                        <!-- start: MAINTAINCE PRICE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="otho_observation">Valor Manutenção</label>
                                                <input type="text" class="form-control" id="orto_motivation_level"
                                                       name="orto_motivation_level">
                                            </div>
                                        </div>
                                        <!-- end: MAINTAINCE PRICE -->

                                        <!-- start: MAINTAINCE FIX PRICE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="otho_observation">Valor Colagem</label>
                                                <input type="text" class="form-control" id="orto_motivation_level"
                                                       name="orto_motivation_level">
                                            </div>
                                        </div>
                                        <!-- end: MAINTAINCE FIX PRICE -->

                                    </div>
                                    <!-- end: ROW -->

                                </div>
                                <!-- end: PANEL BODY -->

                            </div>
                            <!-- end: LEFT SIDE INFO -->

                            <!-- start: RIGHT SIDE INFO -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                <!-- start: BEFORE AND AFTER PHOTOS -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: whitesmoke">

                                    <!-- start: INITIAL STAGE PHOTO -->
                                    <div class="col-md-6 col-lg-6">

                                        <h4>Foto Inícial <span class="pull-right" style="font-weight: lighter">00/00/0000</span>
                                        </h4>

                                        <div class="fileupload fileupload-new center" data-provides="fileupload"
                                             style="width:100%;">

                                            <input name="patient_orto_init" id="patient_orto_init" value="false"
                                                   type="hidden" style="width:100%;">

                                            <div class="fileupload-new thumbnail"
                                                 style="width:100%;border:none;">
                                                <img src="images/anonymous.jpg" alt="">
                                            </div>

                                            <div style="line-height: 10px; width:100%"
                                                 class="fileupload-preview fileupload-exists thumbnail">
                                            </div>

                                            <div>

                                               <span class="btn btn-info btn-file">

                                       <span class="fileupload-new">
                                          <i class="fa fa-picture-o fa-fw"></i>
                                          Selecionar Imagem
                                       </span>

                                       <span class="fileupload-exists">
                                          <i class="fa fa-picture-o"></i>
                                          Mudar
                                       </span>

                                       <input name="patient_orto_init_img" id="patient_orto_init_img" type="file"
                                              accept="image/x-png, image/gif, image/jpeg">

                                               </span>

                                                <span href="#" class="btn fileupload-exists btn-danger"
                                                      data-dismiss="fileupload">
                                                   <i class="fa fa-ban fa-fw"></i> Remover
                                               </span>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: INITIAL STAGE PHOTO -->

                                    <!-- start: FINAL STAGE PHOTO -->
                                    <div class="col-md-6 col-lg-6">

                                        <h4>Foto Final <span class="pull-right"
                                                             style="font-weight: lighter">00/00/0000</span>
                                        </h4>

                                        <div class="fileupload fileupload-new center"
                                             data-provides="fileupload">
                                            <input name="patient_orto_init" id="patient_orto_init" value="false"
                                                   type="hidden">
                                            <div class="fileupload-new thumbnail"
                                                 style="width:100%;border:none;">
                                                <img src="images/anonymous.jpg" alt="">
                                            </div>
                                            <div style="line-height: 10px; width:100%"
                                                 class="fileupload-preview fileupload-exists thumbnail">
                                            </div>
                                            <div>
                                    <span class="btn btn-info btn-file">
                                       <span class="fileupload-new">
                                          <i class="fa fa-picture-o fa-fw"></i>
                                           Selecionar Imagem
                                       </span>
                                       <span class="fileupload-exists">
                                          <i class="fa fa-picture-o fa=fw"></i>
                                          Mudar
                                       </span>
                                       <input name="patient_orto_init_img" id="patient_orto_init_img" type="file"
                                              accept="image/x-png, image/gif, image/jpeg">
                                    </span>
                                                <span href="#" class="btn fileupload-exists btn-danger"
                                                      data-dismiss="fileupload">
                                                   <i class="fa fa-ban fa-fw"></i> Remover
                                               </span>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end: FINAL STAGE PHOTO -->

                                </div>
                                <!-- end: BEFORE AND AFTER PHOTOS -->

                                <!-- start: PLANNING -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: whitesmoke">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h4 class="control-label">
                                                Planejamento do Tratamento
                                            </h4>
                                            <div class="noteWrap">
                                                <div class="form-group"
                                                     style="padding: 0px !important;margin: 0px !important">
                                                       <textarea id="ortho_planing_note" name="ortho_planing_note"
                                                                 class="form-control summernote"
                                                                 placeholder="Planejamento..." style="display: none;">
                                                       </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end: PLANNING -->

                            </div>
                            <!-- end: RIGHT SIDE INFO -->

                        </div>
                        <!-- start: ROW -->

                    </div>
                    <!-- end: ORTO -->

                    <!-- start: PROSTETIS -->
                    <div id="prosthesis" class="tab-pane fade">
                        <div class="row" style="background:#fff;">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                                <div class="panel panel-white accepted_plan equalDivs3">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_treatment_status">Treatment Status</label>
                                                    <select class="form-control" id="pros_treatment_status"
                                                            name="pros_treatment_status">
                                                        <option value="1">Active</option>
                                                        <option value="0">Stoped</option>
                                                        <option value="2">Awaiting Document</option>
                                                        <option value="3">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pro_responsible">Professional Responsible</label>
                                                    <select class="form-control" id="pro_responsible"
                                                            name="pro_responsible">
                                                        <!--option>--Please select a professional--</option-->

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="has_pros_before">Has used prosthesis before</label>
                                                    <select class="form-control" id="has_pros_before"
                                                            name="has_pros_before">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pro_reason_for_treatment">Reason for Treatment</label>
                                                    <input type="text" class="form-control"
                                                           id="pro_reason_for_treatment"
                                                           name="pro_reason_for_treatment">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_limit">Prosthesis Limitation</label>
                                                    <input type="text" class="form-control" id="pros_limit"
                                                           name="pros_limit">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_type_cement">Type of cement used</label>
                                                    <select class="form-control" id="pros_type_cement"
                                                            name="pros_type_cement">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_type_rem">Type of remainder used</label>
                                                    <select class="form-control" id="pros_type_rem"
                                                            name="pros_type_rem">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_type_pros">Type of prosthesis used</label>
                                                    <select class="form-control" id="pros_type_pros"
                                                            name="pros_type_pros">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_implant_reg">Implant Region</label>
                                                    <select class="form-control" id="pros_implant_reg"
                                                            name="pros_implant_reg">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label for="pros_material">Material Used</label>
                                                    <select class="form-control" id="pros_material"
                                                            name="pros_material">

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 nopadding">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="well" style="background:none!important;">
                                        <center>
                                            <h4><strong>Initial Photo</strong></h4>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <input name="patient_pro_init" id="patient_pro_init" value="false"
                                                       type="hidden">
                                                <div class="fileupload-new thumbnail" style="width:100%;border:none;">
                                                    <img src="images/anonymous.jpg" alt="">
                                                </div>
                                                <div style="line-height: 10px; width:100%"
                                                     class="fileupload-preview fileupload-exists thumbnail">
                                                </div>
                                                <div>
                                    <span class="btn btn-primary btn-file">
                                       <span class="fileupload-new">
                                          <i class="fa fa-picture-o"></i>
                                          Select image
                                       </span>
                                       <span class="fileupload-exists">
                                          <i class="fa fa-picture-o"></i>
                                          Change
                                       </span>
                                       <input name="patient_pros_init_img" id="patient_pros_init_img" type="file"
                                              accept="image/x-png, image/gif, image/jpeg">
                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey"
                                                       data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>

                                            </div>
                                            <h5 id="pros-init-pic-date">dd/mm/yyyy</h5>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="well" style="background:none!important;">
                                        <center>
                                            <h4><strong>Result Photo</strong></h4>
                                            <img src="images/before.jpg" width="150px" height="180px"/>
                                            <h5>12/02/2014</h5>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="pros_observation">Observations</label>
                                        <textarea col="20" rows="18" class="form-control" id="pros_observation"
                                                  name="pros_observation" style="resize:none">
                             </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: PROSTETIS -->

                    <!-- start: EXAMS -->
                    <div id="exam" class="tab-pane fade">
                        <div class="row" style="background:#fff;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="file" id="input-id" name="upload_exams[]" class="file-loading" multiple
                                       accept="image/*, application/pdf"/>
                            </div>
                        </div>
                    </div>
                    <!-- end: EXAMS -->

                    <!-- start: BUTTON INTERACTIONS -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-10 col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-block btn-success pull-right">
                                        Salvar Mudanças
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: BUTTON INTERACTIONS -->

                </div>
                <!-- start: TAB CONTENT -->

                </form>

            </div>
            <!-- end: MAIN PANEL -->

        </div>

    </div>

@endsection
