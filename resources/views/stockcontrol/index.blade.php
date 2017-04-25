@extends('layouts.page')
@section('content')
    <div class="main-content">
        <div class="container">

            <!-- start: INFORMATION PANEL -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;">

                        <div class="col-sm-6 hidden-xs">

                            <div class="table-header">
                                <h2 style="font-weight: lighter">{{ $title }}</h2>

                                <p style="font-size: large;">Veja todo seu estoque</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="opacity: 1">
                                    <li>
                                        <a href="#" class="print" data-id="mainInfo">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/stockcontrol/create')}}" class="new-event MyToolbar">
                                            <i class="fa fa-shopping-cart"></i> Novo Item
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: GRID INFORMATION -->
                <div class="panel-body">

                    <!-- start: DISPLAYING STOCK ITEMS -->
                    <table class="table datatable table-striped stockTable" id="mainInfo">
                        <thead>
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
                                    <button type="button" class="btn btn-sm btn-squared dropdown-toggle"
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
                <!-- start: GRID INFORMATION -->
            </div>
            <!-- end: INFORMATION PANEL -->
        </div>
    </div>
@endsection
