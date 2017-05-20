@extends('layouts.page')
@section('title', 'Especialidades')
@section('content')

    <div class="main-content" ng-controller="SpecialityController">

        <div class="container" style="min-height: 580px" ng-init="loadFeeds()">

            <!-- start: MAIN INFO PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:1">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">Especialidades</h2>
                                <p style="font-size: large">Todas especialidades cadastradas</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="color: white">
                                    <li>
                                        <a href="#" ng-click="open()">
                                            <i class="fa fa-bookmark"></i> Especialidade
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-id="mainInfo" class="print">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: PANEL BODY -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 25px">

                    <!-- start: TABLE -->
                    <table class="table  table-striped table-condensed " id="mainInfo">

                        <!-- start: COLUMN INFORMATION -->
                        <thead>
                        <tr>
                            <th></th>
                            <th>Especialidade</th>
                            <th>Cor</th>
                            <th class="hidden-print"></th>
                        </tr>
                        </thead>
                        <!-- end: COLUMN INFORMATION -->

                        <!-- start: ROW INFORMATION -->
                        <tbody>
                        <tr ng-repeat="speciality in specialities">
                            <!-- ID -->
                            <td>{! speciality.id !}</td>
                            <td>{! speciality.name !}</td>
                            <td>
                                <span class="label label-default"
                                      style="background:#{! speciality.color !} !important;opacity: 0.7">{! speciality.color !}</span>
                            </td>
                            <td class="hidden-print">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm dropdown-toggle"
                                            style="background: #dddddd;border-radius: 1px" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Opções &nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                        <li><a href="#" ng-click="editSpeciality($index)">
                                                <small><i class="fa fa-pencil fa-fw"></i> &nbsp;Editar</small>
                                            </a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-id="{! speciality.id !}"
                                               ng-click="deleteForm(speciality.id)"
                                               ng-confirm-click="Are you sure to delete this record ?"
                                               class="deleteSpeciality">
                                                <small><i class="fa fa-ban fa-fw"></i> &nbsp;Excluir</small>
                                            </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                        <!-- end: ROW INFORMATION -->

                    </table>
                    <!-- end: TABLE -->

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: MAIN INFO PANEL -->

            <!-- start: NEW SPECIALTY MODAL -->
            <div class="modal fade" tabindex="-1" role="dialog" modal="showModal" close="cancel()">
                <div class="modal-dialog" role="document" style="max-width: 430px">
                    <div class="modal-content">

                        <!-- start: MODAL HEADER -->
                        <div class="modal-header" style="background:#F1F1F1;">
                            <h2 style="font-weight: 100">Especialidade <br>
                                <small style="color:silver"> Cadastrar nova especialidade</small>
                            </h2>
                        </div>
                        <!-- end: MODAL HEADER -->

                        <!-- start: MODAL BODY -->
                        <div class="modal-body">

                            <!-- start: FORM -->
                            <form id="addSpeciality" name="saveForm" ng-submit="saveSpeciality(saveForm.$valid)"
                                  novalidate ng-class="{true: 'error'}[submitted]">

                                <!-- start: INNER MODAL BODY -->
                                <div class="modal-body">
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && saveForm.title.$invalid }">
                                        <input type="text" name="title" placeholder="Especialidade" class="form-control"
                                               ng-model="formData.title" required>
                                    </div>
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && saveForm.description.$invalid }">
                                        <input type="text" class="form-control" name="description"
                                               placeholder="Descrição" ng-model="formData.description" required>
                                    </div>
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && saveForm.color_code.$invalid }">
                                        <input type="text" name="color_code jscolor" placeholder="Cor"
                                               class="form-control" ng-model="formData.color_code" required>
                                    </div>
                                </div>
                                <!-- end: INNER MODAL BODY -->

                                <!-- start: MODAL FOOTER -->
                                <div class="modal-footer" style="padding-bottom: 0;margin-bottom: 0">
                                    <button type="button" class="btn btn-danger" ng-click="cancel()">Fechar</button>
                                    <button type="submit" class="btn btn-success" ng-click="submitted=true">Registrar
                                        Procedimento
                                    </button>
                                </div>
                                <!-- end: MODAL FOOTER -->

                            </form>
                            <!-- end: FORM -->

                        </div>
                        <!-- end: MODAL BODY -->

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end: NEW SPECIALTY MODAL -->

            <!-- start: EDIT SPECIALTY MODAL -->
            <div class="modal fade" tabindex="-1" role="dialog" modal="editSpecialityModal" close="cancelEditModal()">
                <div class="modal-dialog" role="document" style="max-width: 450px">

                    <!-- start: MODAL BODY -->
                    <div class="modal-content">

                        <!-- start: MODAL HEADER -->
                        <div class="modal-header" style="background:#F1F1F1;">
                            <h2 style="font-weight: 100">Especialidade <br>
                                <small style="color:silver"> Editar especialidade</small>
                            </h2>
                        </div>
                        <!-- end: MODAL HEADER -->

                        <div class="modal-body">

                            <!-- start: FORM -->
                            <form id="updateSpeciality" name="editForm"
                                  ng-submit="updateSpeciality(editForm.$valid, formData.id)" novalidate>

                                <!-- start: INNER MODAL BODY -->
                                <div class="modal-body">
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && editForm.title.$invalid }">
                                        <input type="text" name="title" placeholder="Especialidade" class="form-control"
                                               ng-model="formData.title" required>
                                    </div>
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && editForm.description.$invalid }">
                                        <input type="text" class="form-control" name="description"
                                               placeholder="Descrição" ng-model="formData.description" required>
                                    </div>
                                    <div class="form-group"
                                         ng-class="{ 'has-error' : submitted && editForm.color_code.$invalid }">
                                        <input type="text" name="color_code" placeholder="Cor"
                                               class="form-control jscolor" ng-model="formData.color_code" required>
                                    </div>
                                </div>
                                <!-- end: INNER MODAL BODY -->

                                <!-- start: MODAL FOOTER -->
                                <div class="modal-footer" style="padding-bottom: 0;margin-bottom: 0">
                                    <button type="button" class="btn btn-danger" ng-click="cancel()">Fechar</button>
                                    <button type="submit" class="btn btn-success" ng-click="submitted=true">Atualizar
                                        Procedimento
                                    </button>
                                </div>
                                <!-- end: MODAL FOOTER -->

                            </form>
                            <!-- end: FORM -->

                        </div>
                        <!-- end: MODAL BODY -->

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end: EDIT SPECIALTY MODAL -->

        </div>
    </div>
@endsection
