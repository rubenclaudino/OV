<!-- start: DENTAL PLAN -->
<div id="dentalPlan" class="tab-pane fade">

    <!-- start: ROW -->
    <div class="row" style="background:#fff;">

        <!-- start: ADD DENTAL PLAN -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">
            <button id="addDenalPlan1" class="btn btn-block btn-primary">
                Add Dental Plan
            </button>
            <hr class="custom_sepg">
        </div>
        <!-- start: ADD DENTAL PLAN -->

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
                                <label for="clinic_dental_plan_id">Convênio</label>
                                {!! Form::select('clinic_dental_plan_id', $clinic_dental_plans, 'Dental Plan',['class' => 'form-control dental_plan']) !!}
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

                        <!-- start: ANS CODE -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exp_date">Data de Expiração</label>
                                <input type="date" class="form-control" id="exp_date" name="exp_date">
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

    </div>
    <!-- end: ROW -->

</div>
<!-- end: DENTAL PLAN -->