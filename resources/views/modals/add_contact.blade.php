<!-- start : ADD CONTACT MODAL -->
<div id="addContactModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ededed">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Fornecedores</h3>
            </div>
            <div class="modal-body">
                <!-- <form>
                    <input type="text" placeholder="Search Shop" class="form-control">
                 </form> -->
                <table class="table contactsTable">
                    <thead>
                    <tr>
                        <th class="col-md-1"></th>
                        <th class="col-md-4">Fornecedor</th>
                        <th class="col-md-3">Tipo</th>
                        <th class="col-md-2">Telefone 1</th>
                        <th class="col-md-2">Telefone 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $data)
                        <tr>
                            <td style="text-align: center"><input type="checkbox" data-id="{{ $data->id }}"
                                                                  data-title="{{ $data->title }}"></td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->contact_type }}</td>
                            <td>{{ $data->phone1 }}</td>
                            <td>{{ $data->phone2 }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary btn-addSelectedContacts btn-block">Selecionar Fornecedores Marcados
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end : ADD CONTACT MODAL -->
