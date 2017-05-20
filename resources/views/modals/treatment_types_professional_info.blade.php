<!-- start: PROFESSIONAL INFO MODAL -->
<div id="viewDentistInfoModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background:#F1F1F1;">
                <h2 class="modal-title" style="font-weight: lighter;color: #777">@if ($data->gender == 0) Dr. @else
                        Dra. @endif {{ $data->first_name }} {{ $data->last_name }} <br>
                    <small style="color: silver">Ficha Tecnica</small>
                </h2>
            </div>
            <div class="modal-body">
                <style>
                    .table > tbody > tr > td, .table > tfoot > tr > td {
                        border-top: none !important;
                    }
                </style>
                <table class="table" style="font-size: 1.1em;">
                    <tbody>
                    <tr>
                        <td class="text-bold" style="font-weight: 100;">Numero de atendimentos</td>
                        <td style="color: silver">-</td>
                    </tr>
                    <tr>
                        <td class="text-bold" style="font-weight: 100;">Capital Gerado</td>
                        <td style="color: silver">-</td>
                    </tr>
                    <tr>
                        <td class="text-bold" style="font-weight: 100;width:60%">Porcentagen de Orçamentos
                            Fechados
                        </td>
                        <td style="color: silver">-</td>
                    </tr>
                    <tr>
                        <td class="text-bold" style="font-weight: 100;">Data da ultima Negociação</td>
                        <td style="color: silver">-</td>
                    </tr>
                    <tr>
                        <td class="text-bold" style="font-weight: 100;">Observação</td>
                        <td width="100%" colspan="2" style="color: silver">-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-squared btn-azure">
                    Fechar
                </button>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end: PROFESSIONAL INFO MODAL -->
