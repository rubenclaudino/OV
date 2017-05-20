<!-- start : ADD ITEM MODAL -->
<div id="addItemModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ededed">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Lista de Itens</h3>
            </div>
            <div class="modal-body">
                <table class="table itemsTable">
                    <thead>
                    <tr>
                        <th class="col-md-1"></th>
                        <th class="col-md-6">Item</th>
                        <th class="col-md-2">Estoque</th>
                        <th class="col-md-2">Estoque Min.</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $data)
                        <tr>
                            <td><input type="checkbox" data-id="{{ $data->id }}" data-title="{{ $data->title }}">
                            </td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->minquantity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary btn-addSelectedItems btn-block">Selecionar Itens Marcados</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end : ADD ITEM MODAL -->
