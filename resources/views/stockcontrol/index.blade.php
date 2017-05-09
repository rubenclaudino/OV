@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: DIV -->
            <div style="margin: 15px 2px">

                <!-- start: PANEL -->
                <div class="panel">

                    <!-- start: PANEL HEAD -->
                    <div class="panel-head">

                        <div class="col-lg-6 col-md-6">

                            <h2 class="table_title">Controle de Estoque<br>
                                <small style="color: #dddddd">Veja todo seu estoque</small>
                            </h2>

                        </div>

                        <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                            <div class="pull-right">

                                <a class="btn" href="{{ url('/stockcontrol/create')}}" style="background: whitesmoke">
                                    <i class="fa fa-user"></i> Novo Item
                                </a>

                                <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                                    <i class="fa fa-print"></i> Imprimir
                                </a>

                            </div>

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <!-- start: PANEL BODY -->
                    <div class="panel-body" id="mainInfo">

                        <!-- start: DISPLAYING STOCK ITEMS -->
                        <table class="table stockTable">

                            <thead style="background: whitesmoke">
                            <tr>
                                <th class="hide">#</th>
                                <th></th>
                                <th class="col-md-4">Descrição Item</th>
                                <th class="center">Quantidade</th>
                                <th class="center">Estq. Mínimo</th>
                                <th>Ult. Movimentação</th>
                                <th class="hidden-print" style="width: 18%"></th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            if(!empty($items)){
                            foreach($items as $data){
                            ?>
                            <tr>
                                <td class="hide">{{ $data->id }}</td>
                                <td>{{ Html::image($data->image_url, $data->name , array('height' => '27px','style' => 'border-radius:100px')) }}</td>
                                <td><strong>{{ $data->name }}</strong></td>
                                <!-- STOCK -->
                                <td class="center">
                                    @if($data->quantity < $data->min_stock)
                                        <span class="label label-danger"
                                              style="opacity: 0.8">  {{ $data->quantity }} </span>
                                    @elseif($data->quantity > $data->min_stock && $data->quantity < $data->min_stock + 3 || $data->quantity == $data->min_stock)
                                        <span class="label label-warning"
                                              style="opacity: 0.8">  {{ $data->quantity }} </span>
                                    @else
                                        <span class="label label-success"
                                              style="opacity: 0.8">  {{ $data->quantity }} </span>
                                    @endif
                                </td>
                                <!-- MIN STOCK -->
                                <td class="center">
                                    {{ $data->min_stock }}
                                </td>
                                <!-- LAST MOVEMENTATION -->
                                <td>{{ date('M d, Y' , strtotime($data->updated_at)) }}</td>
                                <!-- INTERACTIONS -->
                                <td class="hidden-print">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                                style="background: #dddddd;opacity: 0.9" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            Opções &nbsp; <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                            <li><a href="{{ URL::route('stockcontrol.edit', $data->id) }}">
                                                    <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                                </a></li>
                                            <li><a href="#" data-id="{{ $data->id }}" class="btn-history">
                                                    <small><i class="fa fa-calendar-o fa-fw"></i>&nbsp; Histórico</small>
                                                </a></li>
                                            <li><a href="#" class="stockModalOpen" data-toggle="modal"
                                                   data-target="#stockModal" data-title="{{$data->title}}"
                                                   data-quantity="{{$data->quantity}}" data-id="{{$data->id}}">
                                                    <small><i class="fa fa-unsorted fa-fw"></i>&nbsp; Depositar / Retirar
                                                    </small>
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a class="deleteItem" href="#" data-id="{{ $data->id }}">
                                                    <small><i class="fa fa-trash fa-fw"></i>&nbsp; Excluir</small>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php }} ?>
                            </tbody>
                        </table>
                        <!-- end: DISPLAYING STOCK ITEMS -->

                        <!-- start: STOCK MOVEMENT -->
                        <div id="stockModal" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document" style="max-width: 400px">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #ededed">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                        <h3 class="modal-title">Movimentação de Estoque</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form id="updateStock" method="post">
                                            <table class="table">
                                                <thead>
                                                <th width="65%">Item</th>
                                                <th>Quantidade Atual</th>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="item-title"></td>
                                                    <td class="item-quantity"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <input type="hidden" name="id" value="" style="width: auto">
                                                            <select class="form-control" name="action">
                                                                <option value="add">Depositar</option>
                                                                <option value="withdraw">Retirar</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="width: 100%">
                                                            <input type="text" name="quantity" class="form-control"
                                                                   placeholder="Quantidade">
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button type="submit" class="btn btn-primary btn-block">Atualizar estoque
                                            </button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- end: STOCK MOVEMENT  -->

                        <!-- start: STOCK HISTORY -->
                        <div id="historyModal" class="modal fade" tabindex="-1" role="dialog"
                             style="border: none;border-radius: 0px">
                            <div class="modal-dialog" role="document" style="border: none;border-radius: 0px">
                                <div class="modal-content" style="border: none;border-radius: 0px">
                                    <div class="modal-header"
                                         style="background-color: whitesmoke;border: none;border-radius: 0px">
                                        <h3 class="modal-title">Histórico de Movimentação</h3>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Movimentação</th>
                                            <th>Quantidade</th>
                                            <th>Data de Movimentação</th>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>

                                        <button data-dismiss="modal" class="btn btn-info btn-block">Fechar</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- start: STOCK HISTORY -->

                    </div>
                    <!-- end: PANEL BODY -->

                </div>
                <!-- end: PANEL -->

            </div>
            <!-- end: DIV -->

        </div>
        <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
