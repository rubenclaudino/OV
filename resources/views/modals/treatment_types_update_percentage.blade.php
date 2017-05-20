<!-- start: UPDATE PERCENTAGE MODAL -->
<div id="updateDentistPercentageModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

        <!-- start: MODAL CONTENT -->
        <div class="modal-content" style="width: 75%">

            <div class="modal-header" style="background:#F1F1F1;">
                <h2 class="modal-title" style="font-weight: lighter;color: #777">@if ($data->gender == 0) Dr. @else
                        Dra. @endif {{ $data->first_name }} {{ $data->last_name }} <br>
                    <small style="color: silver">Porcentagem Negociada</small>
                </h2>
            </div>

            <div class="modal-footer">
                       <span class="input-icon pull-left" style="display: inline !important;">
                               <input id="s_percentage" name="s_percentage" class="form-control currency pull-left"
                                      style="width:100px;padding-left: 28px;display: inline !important;" type="number"
                                      maxlength="3" min="0" max="100"
                                      onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0';}">
                               <i class="fa fa-percent" style="padding-top: 3px;padding-right: 15px"></i>
                               </span>
                <button type="button" class="btn btn-default btn-danger center" style="display: inline !important;"
                        data-dismiss="modal">Fechar
                </button>
                <button type="button" class="btn btn-default btn-success center"
                        style="display: inline !important;">Atualizar
                </button>
            </div>

        </div>
        <!-- end: MODAL CONTENT -->

    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end: UPDATE PERCENTAGE MODAL -->
