<!-- start: ORTO -->
<div id="orto" class="tab-pane fade">
    {{--
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
--}}
</div>
<!-- end: ORTO -->