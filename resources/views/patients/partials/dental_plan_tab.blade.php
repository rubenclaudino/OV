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
                        <label for="clinic_dental_plan_id">Convênio</label>
                        {!! Form::select('patient_dental_plans[clinic_dental_plan_id]', $clinic_dental_plans, null,['class' =>
                        'form-control','placeholder' => 'Não informado']) !!}
                    </div>
                </div>
                <!-- end: DENTAL PLAN -->

                <!-- start: CARD NUMBER -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="card_number">Numero do Cartão</label>
                        {{ Form::text('patient_dental_plans[card_number]', null, array('class' => 'form-control')) }}

                    </div>
                </div>
                <!-- end: CARD NUMBER -->

                <!-- start: TITLE HOLDER -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="card_owner">Titular</label>
                        {{ Form::text('patient_dental_plans[card_owner]', null, array('class' => 'form-control')) }}

                    </div>
                </div>
                <!-- end: TITLE HOLDER -->

                <!-- start: PLAN TYPE -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="dental_plan_type">Tipo Plano</label>
                    <div class="form-group input-group">
                        {{ Form::text('patient_dental_plans[dental_plan_type]', null, array('class' => 'form-control')) }}

                    </div>
                </div>
                <!-- end: PLAN TYPE -->

                <!-- start: EXPIRY DATE -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exp_date">Data de Expiração</label>
                        {{ Form::text('patient_dental_plans[exp_date]', null, array('class' => 'form-control datepicker')) }}

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