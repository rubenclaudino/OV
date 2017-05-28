<!-- start: ERROR SECTION -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="errorHandler alert alert-danger no-display">
        <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
    </div>
</div>
<!-- end: ERROR SECTION -->

<!-- start: INFORMATION PANEL -->
<div style="margin: 15px 2px">

    <!-- start: PANEL -->
    <div class="panel">

        <!-- start: PANEL HEAD -->
        <div class="panel-head">

            <div class="col-lg-12 col-md-12">

                <div class="col-lg-12 col-md-12">

                    <h2 class="table_title">Procedimento<br>
                        <small style="color: #bbbbbb">Dados do Procedimento</small>
                    </h2>

                    <hr class="custom_sep">

                </div>

            </div>

        </div>
        <!-- end: PANEL HEAD -->

        <!-- start: PANEL BODY -->
        <div class="panel-body">

            <!-- start: DIV -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <!-- start: ROW -->
                <div class="row">

                    <div class="clearfix"></div>

                    <!-- start: PROCEDURE NAME -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="name">Procedimento</label>
                            {{ Form::text('name', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: PROCEDURE NAME -->

                    <!-- start: PROCEDURE CODE -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="procedure_code">Codígo TUSS</label>
                            {{ Form::text('procedure_code', null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <!-- end: PROCEDURE CODE -->

                    <!-- start: SPECIALTY -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="specialty_id">Especialidade</label>
                            {!! Form::select('specialty_id',$specialties,'',['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- end: SPECIALTY -->

                    <!-- start: BUTTON INTERACTIONS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr class="custom_sepg">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Salvar
                            </button>
                            <a href="{{ url('/procedures')}}" class="btn btn-grey">
                                Voltar
                            </a>
                        </div>
                    </div>
                    <!-- end: BUTTON INTERACTIONS -->

                </div>
                <!-- end: ROW -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: PANEL BODY -->

    </div>
    <!-- end: PANEL -->

</div>
<!-- end: INFORMATION PANEL -->