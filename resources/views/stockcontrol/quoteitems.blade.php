@extends('layouts.page')
@section('title', '')
@section('content')
    <!-- start: MAIN INFORMATION PANEL -->
    <div class="panel panel-white" style="margin-top:8px;">

        <!-- start: TABLE HEADER -->
        <div class="panel-heading header_t1">

            <div class="toolbar row" style="border: none;background: whitesmoke;min-height: 100px">

                <div class="col-sm-6 hidden-xs">

                    <div class="table-header">
                        <h2 style="font-weight: lighter">Stock control quote</h2>
                        <p style="font-size: large;color: silver">Criar um lista de cotação de compras</p>
                    </div>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <div class="toolbar-tools pull-right" style="padding-top: 10px">
                        <!-- start: TOP NAVIGATION MENU -->
                        <ul class="nav navbar-right" style="opacity: 0.7">
                            <li>
                                <a href="#" class="print" data-id="mainInfo">
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

        <div class="panel-body" id="mainInfo">
            <!-- start: TABLE OF QUOTED ITEMS -->
            <table id="quoteItemsTable" class="table table-striped quoteItemsTable">
                <thead>
                <tr>
                    <th>Item</th>
                    <th class="center"></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <!-- end: TABLE OF QUOTED ITEMS -->
            <div class="clearfix"></div>
            <hr class="custom_sepg hidden-print">

            <!-- start: ACTION BUTTONS -->
            <div class="btn-actions hidden-print">
                <button class="btn btn-sm btn-info btn-addContacts btn-squared hidden-print" data-toggle="modal"
                        data-target="#addContactModal">Adicionar Fornecedor
                </button>
                <button class="btn btn-sm btn-info btn-addItem btn-squared hidden-print" data-toggle="modal"
                        data-target="#addItemModal">Adicionar Item
                </button>
            </div>
            <!-- end: ACTION BUTTONS -->

        </div>
    </div>
    <!-- end: MAIN INFORMATION PANEL -->

    @include('modals.add_item')
    @include('modals.add_contact')

@endsection
