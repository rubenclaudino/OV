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
                        {!! Form::select('take_drugs', array('0' => 'Não','1' => 'Sim'),'',['class' =>
                        'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  TAKES MEDICINES -->

                <!-- start:  BIRTH DEFECTS -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="have_birth_defect">Anomalias congénitas</label>
                        {!! Form::select('has_birth_defect', array('0' => 'Não','1' =>
                        'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  BIRTH DEFECTS -->

                <!-- start:  BONE DEVELOPMENT -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="bone_dev_stage">Bone development stage?</label>
                        {!! Form::select('bone_dev_stage', array('0' => 'Não','1' => 'Sim'),'',['class'
                        => 'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  BONE DEVELOPMENT -->

                <!-- start:  TAKES PREGNANCY PILLS -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="take_prg_pills">Utiliza algum anticoncepcional</label>
                        {!! Form::select('take_preg_pills', array('0' => 'Não','1' => 'Sim'),'',['class'
                        => 'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  TAKES PREGNANCY PILLS -->

                <!-- start:  PREV SURGERIES -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="has_prev_surgeries">Teve alguma operação grave</label>
                        {!! Form::select('has_prev_surgeries', array('0' => 'Não','1' =>
                        'Sim'),'',['class' => 'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  PREV SURGERIES -->

                <!-- start:  CURRENT HEALTH -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="current_health">Estado de Saúde</label>
                        {!! Form::select('current_health', array('0' => 'Ruim','1' => 'Boa','2' =>
                        'Excelente'),'',['class' => 'form-control','placeholder' => 'Não Informado'])
                        !!}
                    </div>
                </div>
                <!-- end:  CURRENT HEALTH -->

                <!-- start:  WHEELCHAIR -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="wheel_chair">Cadeirante</label>
                        {!! Form::select('wheel_chair', array('0' => 'Não','1' => 'Sim'),'',['class' =>
                        'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  WHEELCHAIR -->

                <!-- start:  BODY TYPE -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="body_type">Biotipo</label>
                        {!! Form::select('body_type_id', array('0' => 'Não','1' => 'Sim'),'',['class' =>
                        'form-control','placeholder' => 'Não Informado']) !!}
                    </div>
                </div>
                <!-- end:  BODY TYPE -->

                <!-- start:  HEIGHT -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="patient_height">Altura</label>
                    <div class="form-group">
                        <div class="input-group">
                            {{ Form::text('height','',array('class' => 'form-control','placeholder' =>
                            'Não Informado')) }}
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
                            {{ Form::text('weight','',array('class' => 'form-control','placeholder' =>
                            'Não Informado')) }}
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

                @foreach($disease as $data)
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>{{ Form::checkbox('disease','0','',array('class' => 'grey','data-id'
                                                                    => $data->id)) }} {{$data->title}}</label>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
        <!-- end: RIGHT SIDE INFO -->

    </div>

</div>
<!-- end: HEALTH -->