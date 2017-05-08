@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: MAIN DIV -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                 style="margin-top: 20px;font-size: 1.1em;margin-left: -10px">

                <!-- start: TAB HEADERS -->
                <ul class="nav nav-tabs">

                    <!-- start: GENERAL INFO -->
                    <li class="active">
                        <a data-toggle="tab" href="#personal_details">
                            <strong>Geral</strong>
                        </a>
                    </li>
                    <!-- end: GENERAL INFO -->
                {{--
                    <!-- start: HEALTH -->
                    <li id="healthTitle">
                        <a data-toggle="tab" href="#health">
                            <strong>Anamnese</strong>
                        </a>
                    </li>
                    <!-- end: HEALTH -->
--}}
                <!-- start: DENTAL PLAN -->
                    <li id="dentalPlanTitle">
                        <a data-toggle="tab" href="#dentalPlan">
                            <strong>Convênio</strong>
                        </a>
                    </li>
                    <!-- end: DENTAL PLAN -->
                    {{--
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
                    --}}
                </ul>
                <!-- end: TAB HEADERS -->

                <!-- start: TAB CONTENT -->
                <div class="tab-content panel" style="border-radius: 1px">

                    <!-- end: PERSONAL DETAILS -->
                    <div id="personal_details" class="tab-pane fade active in">

                        <!-- start: FORM -->
                        {{ Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'PUT','id' => 'savePatient', 'enctype' => 'multipart/form-data']) }}

                        <input type="hidden" name="action" value="save_profile">

                        <!-- start: ROW -->
                        <div class="row">

                            <!-- start: RIGHT SIDE INFO -->
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                <!-- start: ROW -->
                                <div class="row">

                                    <div style="background: whitesmoke;margin-left: 10px;padding-top: 10px"
                                         class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <!-- start: PATIENT IMAGE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="fileupload fileupload-new" data-provides="fileupload">

                                                <div class="fileupload-new thumbnail" style="width:100%">
                                                    <?php
                                                    if ($patient->patient_profile_image) {
                                                        $patient->patient_profile_image = url('/') . "/" . $patient->patient_profile_image;
                                                    }
                                                    ?>
                                                    {{ Html::image($patient->patient_profile_image) }}
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

                                          <input name="patient_profile_image" id="patient_profile_image" type="file"
                                                 accept="image/x-png, image/gif, image/jpeg">

                                        </span>

                                                    <span class="btn fileupload-exists btn-danger"
                                                          data-dismiss="fileupload">
                                    <i class="fa fa-times"></i> Remover
                                    </span>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- end: PATIENT IMAGE -->

                                        <!-- start: PROFESSIONAL -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="professional_id">Dentista</label>
                                                {!! Form::select('professional_id', $professionals,array($patient->professional_id),['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                            </div>
                                        </div>
                                        <!-- end: PROFESSIONAL -->

                                        <!-- start: DENTAL PLAN -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="has_dental_plan">Tem Convênio</label>
                                                {!! Form::select('has_dental_plan', array('0' => 'Não','1' => 'Sim'),array($patient->has_dental_plan),['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                            </div>
                                        </div>
                                        <!-- end: DENTAL PLAN -->

                                        <!-- start: SPECIALTY -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group">
                                                <label for="pSpec">Especialidades</label>
                                                {!! Form::select('specialty[]',$treatments,'',['class' => 'form-control
                                selectpicker','multiple' => 'true']) !!}
                                            </div>

                                        </div>
                                        <!-- end: SPECIALTY -->

                                        <!-- start: INDICATION -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="indication">Indicação</label>
                                                {!! Form::select('indication', array($patient->referrals),array($patient->referrals),['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                            </div>
                                        </div>
                                        <!-- end: INDICATION -->

                                        <!-- start: ALLWAYS CONFIRM APPOINTMENT -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="confirmation_request">Necessita confirmação</label>
                                                {!! Form::select('confirmation_request', array('0' => 'Não','1' => 'Sim'),array($patient->confirmation_request),['class'
                                               => 'form-control','placeholder' => 'Não informado']) !!}
                                            </div>
                                        </div>
                                        <!-- end: ALLWAYS CONFIRM APPOINTMENT -->

                                        <!-- start: VIP -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="vip">VIP</label>
                                                {!! Form::select('vip', array('0' => 'Sim','1' => 'Não'),array($patient->vip),['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <!-- end: VIP -->

                                    </div>

                                </div>
                                <!-- end: ROW -->

                            </div>
                            <!-- end: RIGHT SIDE INFO -->

                            <!-- start: DIV BOTTOM-->
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                                <!-- start: TAB HEADERS -->
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
                                <!-- end: TAB HEADERS -->

                                <!-- start: TAB CONTENT -->
                                <div class="tab-content" style="border:none;">

                                    <!-- start: MAIN DETIALS -->
                                    <div id="pDetails" class="tab-pane fade active in">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                            <div class="row">

                                                <!-- start: NAME -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="fname">Nome</label>
                                                        {{ Form::text('first_name',$patient->first_name,array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                                <!-- end: NAME -->

                                                <!-- start: LAST NAME -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="sname">Sobrenome</label>
                                                        {{ Form::text('last_name',$patient->last_name,array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                                <!-- end: LAST NAME -->

                                                <!-- start: GENDER -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="gender">Sexo</label>
                                                        {!! Form::select('gender', array('0' => 'M','1' => 'F'),array($patient->gender),['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: GENDER -->

                                                <!-- start: DOB -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <label for="dob">Data de Nascimento</label>
                                                    <div class="input-group">
                                                        {{ Form::text('DOB',$patient->date_of_birth,array('class' => 'form-control input-mask-date')) }}
                                                    </div>
                                                    <br>
                                                </div>
                                                <!-- end: DOB -->

                                                <!-- start: CPF -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cpfv">CPF</label>
                                                        {{ Form::text('CPF',$patient->CPF,array('class' => 'form-control', 'id' => 'cpfv')) }}
                                                    </div>
                                                </div>
                                                <!-- end: CPF -->

                                                <!-- start: RG -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="rg">RG</label>
                                                        {{ Form::text('RG',$patient->RG,array('class' => 'form-control', 'id' => 'rg')) }}
                                                    </div>
                                                </div>
                                                <!-- end: RG -->

                                                <div class="clearfix"></div>

                                                <!-- start: CIVAL STATUS -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="marital_status">Estado Civil</label>
                                                        {!! Form::select('maritial_status', array('1' => 'Solteiro(a)','0' => 'Casado(a)','2' => 'Divorciado(a)','3' => 'Viúvo(a)'),array($patient->maritial_status),['class' => 'form-control','placeholder' => 'Não informado']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: CIVAL STATUS -->

                                                <!-- start: NATIONALTY -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="nationality">Nacionalidade</label>
                                                        {{ Form::text('nationality',$patient->nationality,array('class' => 'form-control', 'id' => 'nationality')) }}
                                                    </div>
                                                </div>
                                                <!-- end: NATIONALTY -->

                                                <div class="clearfix"></div>

                                                <!-- start: PROFESSION -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="profissão">Ocupação / Profissão</label>
                                                        {{ Form::text('profession',$patient->profession,array('class' => 'form-control', 'id' => 'Profissão')) }}
                                                    </div>
                                                </div>
                                                <!-- end: PROFESSION -->

                                                <!-- start: EDUCATION -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="education">Grau de Instrução</label>
                                                        {!! Form::select('education', array('0' => 'Ensino Fundamental','1' => 'Ensino Médio','2' => 'Ensino Superior'),array($patient->maritial_status),['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: EDUCATION -->

                                                <!-- start: OBSERVATION -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="observation">Observação</label>
                                                        {{ Form::text('observation',$patient->observation,array('class' => 'form-control', 'id' => 'observation')) }}
                                                    </div>
                                                </div>
                                                <!-- end: OBSERVATION -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: MAIN DETIALS -->

                                    <!-- start: CONTACT INFO -->
                                    <div id="pContact" class="tab-pane fade">

                                        <!-- start: CONTACT INFO -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                            <!-- start: ROW -->
                                            <div class="row">

                                                <!-- start: LANDLINE PHONE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Telefone Fixo
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{ Form::text('phone_landline',$patient->phone_landline,array('class' => 'form-control input-mask-phone1')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: LANDLINE PHONE -->

                                                <!-- start: WORK PHONE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Telefone Trabalho
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{ Form::text('phone_landline',$patient->phone_landline,array('class' => 'form-control input-mask-phone')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: WORK PHONE -->

                                                <!-- start: CEL 1 -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_1">
                                                            Celular 1
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{ Form::text('phone_1',$patient->phone_1,array('class' => 'form-control input-mask-phone')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CEL 1 -->

                                                <!-- start: CEL 2 -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_2">
                                                            Celular 2
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{ Form::text('phone_2',$patient->phone_2,array('class' => 'form-control input-mask-phone')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- start: CEL 2 -->

                                                <!-- start: WHATSAPP -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Whatsapp
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('whatsapp_number',$patient->whatsapp_number,array('class' => 'form-control input-mask-phone')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- start: WHATSAPP -->

                                                <!-- start: EMAIL -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Email
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('',$patient->email,array('class' => 'form-control','enabled' => 'true')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- start: EMAIL -->

                                                <!-- start: CONTACT 1 NUMBER -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_numero">
                                                            Contato 1
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('',$patient->email,array('class' => 'form-control input-mask-phone','enabled' => 'true')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 1 NUMBER -->

                                                <!-- start: CONTACT 1 TYPE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Relação
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('',$patient->email,array('class' => 'form-control','enabled' => 'true')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 1 TYPE -->

                                                <!-- start: CONTACT 2 NUMBER -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="contact2">
                                                            Contato 2
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('',$patient->email,array('class' => 'form-control input-mask-phone','enabled' => 'true', 'id' => 'contact2')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 2 NUMBER -->

                                                <!-- start: CONTACT 2 TYPE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="phone_landline">
                                                            Relação
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('',$patient->email,array('class' => 'form-control','enabled' => 'true')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: CONTACT 2 TYPE -->

                                            </div>
                                            <!-- end: ROW -->

                                        </div>
                                        <!-- end: CONTACT INFO -->

                                    </div>
                                    <!-- end: CONTACT INFO -->

                                    <!-- start: ADDRESS -->
                                    <div id="pAddress" class="tab-pane fade">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                            <!-- start: ROW -->
                                            <div class="row">

                                                <!-- start: ROAD -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="patient_road">
                                                            Rua/Avenida
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('street_address',$patient->street_address,array('class' => 'form-control')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: ROAD -->

                                                <!-- start: NUMBER -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="patient_number">
                                                            Número
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('number',$patient->number,array('class' => 'form-control')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: NUMBER -->

                                                <!-- start: BOUROUGH -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="doc">Bairro</label>
                                                        {{Form::text('borough',$patient->borough,array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                                <!-- end: BOUROUGH -->

                                                <!-- start: ZIP -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group"
                                                         style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;">
                                                        <label for="zip_code">
                                                            CEP
                                                        </label>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                             style="padding-left:0px;padding-right:0px;margin-left:0px;margin-right:0px;margin-bottom:12px;">
                                                <span>
                                                    {{Form::text('zip_code',$patient->zip_code,array('class' => 'form-control')) }}
                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: ZIP -->

                                                <!-- start: CITY -->
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="patient_city">Cidade</label>
                                                        {{Form::text('city',$patient->city,array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                                <!-- end: CITY -->

                                                <!-- start: STATE -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="patient_state">Estado</label>
                                                        {!! Form::select('professional_id', $professionals,array($patient->professional_id),['class' => 'form-control','placeholder' => 'Não informado']) !!}

                                                    </div>
                                                </div>
                                                <!-- end: STATE -->

                                                <!-- start: OBSERVATION -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="patient_country">Observação</label>
                                                        {{Form::text('country',$patient->country,array('class' => 'form-control')) }}
                                                    </div>
                                                </div>
                                                <!-- end: OBSERVATION -->

                                            </div>
                                            <!-- end: ROW -->

                                        </div>

                                    </div>
                                    <!-- end: ADDRESS -->

                                </div>
                                <!-- end: TAB CONTENT -->

                            </div>
                            <!-- end: DIV BOTTOM-->

                        </div>
                        <!-- end: ROW -->

                        <!-- start: BUTTON INTERACTIONS DIV -->
                        <div class="">

                            <!-- start: ROW -->
                            <div class="row">

                                <!-- start: BUTTON SAVE -->
                                <div class="col-md-offset-10 col-md-2 col-sm-12 col-xs-12">
                                    <button type="submit" name="save" class="btn btn-block btn-success pull-right">
                                        Salvar Mudanças
                                    </button>
                                </div>
                                <!-- end: BUTTON SAVE -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: BUTTON INTERACTIONS DIV -->

                        </form>
                        <!-- end: FORM -->

                    </div>
                    <!-- end: PERSONAL DETAILS -->

                    <!-- start: HEALTH -->
                    <div id="health" class="tab-pane fade">

                    {{ Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'PUT','id' => 'savePatientHealth']) }}

                    <!-- start: ROW -->
                        <div class="row" style="background:#fff;">

                            <!-- start: HEALTH INFO -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <!-- start: ROW -->
                                <div class="row">

                                    <!-- start:  TAKES MEDICINES -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="take_drug">Está tomando medicamentos</label>
                                            <!--input type="text" class="form-control" id="take_drug" name="take_drug"-->
                                            {!! Form::select('take_drugs', array('0' => 'Não','1' => 'Sim'),array($patient->takes_drugs),['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  TAKES MEDICINES -->

                                    <!-- start:  BIRTH DEFECTS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="have_birth_defect">Anomalias congénitas</label>
                                            {!! Form::select('has_birth_defect', array('0' => 'Não','1' => 'Sim'),$patient->has_birth_defect,['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  BIRTH DEFECTS -->

                                    <!-- start:  TAKES PREGNANCY PILLS -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="takes_birth_control_pills">Utiliza algum
                                                anticoncepcional</label>
                                            {!! Form::select('takes_birth_control_pills', array('0' => 'Não','1' => 'Sim'),$patient->takes_birth_control_pills,['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  TAKES PREGNANCY PILLS -->

                                    <!-- start:  PREV SURGERIES -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="had_prev_surgeries">Teve alguma operação grave</label>
                                            {!! Form::select('had_prev_surgeries', array('0' => 'Não','1' => 'Sim'),$patient->had_prev_surgeries,['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  PREV SURGERIES -->

                                    <!-- start:  CURRENT HEALTH -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="current_health">Estado de Saúde</label>
                                            {!! Form::select('current_health', array('0' => 'Ruim','1' => 'Boa','2' => 'Excelente'),$patient->current_health,['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  CURRENT HEALTH -->

                                    <!-- start:  WHEELCHAIR -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="wheel_chair">Cadeirante</label>
                                            {!! Form::select('wheel_chair', array('0' => 'Não','1' => 'Sim'),$patient->wheel_chair,['class' => 'form-control selectpicker','placeholder' => 'Não Informado']) !!}
                                        </div>
                                    </div>
                                    <!-- end:  WHEELCHAIR -->

                                    <!-- start:  BODY TYPE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="body_type">Biotipo</label>
                                        </div>
                                    </div>
                                    <!-- end:  BODY TYPE -->

                                    <!-- start:  HEIGHT -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="patient_height">Altura</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                {{ Form::text('height',$patient->height,array('class' => 'form-control')) }}
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
                                                {{ Form::text('weight',$patient->weight,array('class' => 'form-control')) }}
                                                <span class="input-group-addon">Kg</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end:  WEIGHT -->

                                </div>
                                <!-- end: ROW -->

                            </div>
                            <!-- end: HEALTH INFO -->

                            <!-- start: DISEASE LIST -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                <input type="hidden" value="0" name="hasDisease" id="hasDisease"/>
                                <style>
                                    #diseaseList th, #diseaseList td {
                                        border-top: none !important;
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

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 25px">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end: DISEASE LIST -->

                        </div>
                        <!-- end: ROW -->

                        <!-- start: BUTTON INTERACTIONS DIV -->
                        <div class="">

                            <!-- start: ROW -->
                            <div class="row">

                                <!-- start: BUTTON SAVE -->
                                <div class="col-md-offset-10 col-md-2 col-sm-12 col-xs-12">
                                    <button type="submit" name="save" class="btn btn-block btn-success pull-right">
                                        Salvar Mudanças
                                    </button>
                                </div>
                                <!-- end: BUTTON SAVE -->

                            </div>
                            <!-- end: ROW -->

                        </div>
                        <!-- end: BUTTON INTERACTIONS DIV -->

                        </form>
                    </div>
                    <!-- end: HEALTH -->

                    <!-- start: DENTAL PLAN -->
                    <div id="dentalPlan" class="tab-pane fade">

                        <!-- start: ROW -->
                        <div class="row" style="margin: 15px">

                            <!-- start: DIV -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

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

                                    <!-- start: EXPIRY DATE -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="exp_date">Data de Expiração</label>
                                            <input type="date" class="form-control" id="exp_date" name="exp_date">
                                        </div>
                                    </div>
                                    <!-- end: EXPIRY DATE -->

                                </div>
                                <!-- end: ROW -->

                            </div>
                            <!-- end: DIV -->

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
                                                <select class="form-control selectpicker" id="ortho_treatment_status"
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
                                                <select class="form-control selectpicker" id="brace_type"
                                                        name="brace_type">
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end: BRACES TYPE -->

                                        <!-- start: ORTHODONTIST RESPONSIBLE -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="ortho_responsible">Especialista</label>
                                                <select class="form-control selectpicker" id="ortho_responsible"
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="panel" style="background: whitesmoke">

                                        <div class="panel-body">

                                            <!-- start: INITIAL STAGE PHOTO -->
                                            <div class="col-md-6 col-lg-6">

                                                <h4>Foto Inícial <span class="pull-right"
                                                                       style="font-weight: lighter">00/00/0000</span>
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

                                    </div>
                                </div>
                                <!-- end: BEFORE AND AFTER PHOTOS -->

                                <!-- start: PLANNING -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">

                                        <div class="panel" style="background: whitesmoke">
                                            <div class="panel-body">
                                                <div class="row">
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

                    <!-- start: PROS -->
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
                                <input style="border: none" type="file" id="input-id" name="upload_exams[]"
                                       class="file-loading" multiple accept="image/*, application/pdf"/>
                            </div>
                        </div>
                    </div>
                    <!-- end: EXAMS -->

                </div>
                <!-- end: TAB CONTENT -->

            </div>
            <!-- end: MAIN DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
