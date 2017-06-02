<!-- start: QUICK PATIENT MODAL -->
<div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- start: MODAL DIALOG-->
    <div class="modal-dialog" style="width: 400px">

        <!-- start: MODAL CONTENT -->
        <div class="modal-content" style="border-radius: 2px">

            <!-- start: FORM -->
            <form id="addQuickPatient" method="post">

                <!-- start: MODAL HEADER -->
                <div class="modal-header" style="background:#F1F1F1;">
                    <h2 style="font-weight: lighter;">Paciente<br>
                        <small style="color:silver">Cadastro simples</small>
                    </h2>
                </div>
                <!-- end: MODAL HEADER -->

                <!-- start: MODAL BODY -->
                <div class="modal-body" style="padding: 15px;">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input class="form-control" id="first_name" name="first_name" required type="text"
                                       placeholder="Nome">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input class="form-control" id="last_name" name="last_name" type="text"
                                       placeholder="Sobrenome">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input class="form-control" id="" name="phone_1" required type="text"
                                       placeholder="Telefone">
                            </div>
                        </div>

                        <!-- start: DENTAL PLAN -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                {!! Form::select('patient_dental_plans[clinic_dental_plan_id]', $clinic_dental_plans, null,['class' =>
                                'form-control']) !!}
                            </div>
                        </div>
                        <!-- end: DENTAL PLAN -->

                    </div>
                </div>
                <!-- end: MODAL BODY -->

                <!-- start: MODAL INTERACTIONS -->
                <div class="modal-footer">

                    <button class="btn btn-success btn-save-createnew" type="submit">
                        Salvar Cadastro
                    </button>
                    <button type="button" class="btn btn-grey" data-dismiss="modal">
                        Voltar
                    </button>
                </div>
                <!-- end: MODAL INTERACTIONS -->

            </form>

        </div>
        <!-- /.modal-content -->

    </div>
    <!-- start: MODAL DIALOG -->

</div>
<!-- start: QUICK PATIENT MODAL -->
