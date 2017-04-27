<!-- start: DENTAL PLAN -->
<div id="dentalPlan" class="tab-pane fade">
    {{--
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
    --}}
</div>
<!-- end: DENTAL PLAN -->