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
                                                       <input name="patient_pros_init_img" id="patient_pros_init_img"
                                                              type="file"
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