<!-- start: CREATE APPOINTMENT TYPE MODAL -->
<div class="modal fade" id="addAppointmentTypeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #ededed;">
                <h3 class="modal-title" id="myModalLabel">Cadastrar Novo Tipo de Agendamento</h3>
            </div>
            <form method="post" id="addAppointmentType" action="{{ url('/calendar/addAppointmentType')}}">
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">
                    <label>Tipo de Agendamento</label>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Descrição do tipo de agendamento"
                               name="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-sm btn-squared" style="border-radius: 1px"
                            data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-success btn-sm btn-squared" style="border-radius: 1px">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end: CREATE APPOINTMENT TYPE MODAL -->