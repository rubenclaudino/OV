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
                        {!! Form::select('clinic_dental_plan_id', $clinic_dental_plans,'',['class' =>
                        'form-control','placeholder' => 'Não informado']) !!}
                    </div>
                </div>
                <!-- end: DENTAL PLAN -->

                <!-- start: CARD NUMBER -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="card_number">Numero do Cartão</label>
                        <input type="text" class="form-control" id="card_number" name="card_number">
                    </div>
                </div>
                <!-- end: CARD NUMBER -->

                <!-- start: TITLE HOLDER -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="card_owner">Titular</label>
                        <input type="text" class="form-control" id="card_owner" name="card_owner">
                    </div>
                </div>
                <!-- end: TITLE HOLDER -->

                <!-- start: PLAN TYPE -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="dental_plan_type">Tipo Plano</label>
                    <div class="form-group input-group">
                        <input type="text" class="form-control" id="dental_plan_type" name="dental_plan_type">
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