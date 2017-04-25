@extends('layouts.page')
@section('content')
<div class="main-content">
   <div class="container">

       <!-- start: MAIN INFORMATION PANEL -->
      <div class="panel panel-white" style="margin-top:8px;">

          <!-- start: TABLE HEADER -->
          <div class="panel-heading header_t1">

              <div class="toolbar row" style="border: none;background: whitesmoke;min-height: 100px">

                  <div class="col-sm-6 hidden-xs">

                      <div class="table-header">
                          <h2 style="font-weight: lighter">{{ $title }}</h2>
                          <p style="font-size: large;color: silver">Criar um lista de cotação de compras</p>
                      </div>

                  </div>

                  <div class="col-sm-6 col-xs-12">

                      <div class="toolbar-tools pull-right" style="padding-top: 10px">
                          <!-- start: TOP NAVIGATION MENU -->
                          <ul class="nav navbar-right" style="opacity: 0.7">
                              <li>
                                  <a href="#" class="print"  data-id="mainInfo">
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
            <table id="quoteItemsTable" class="table table-striped quoteItemsTable" >
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
                <button class="btn btn-sm btn-info btn-addContacts btn-squared hidden-print" data-toggle="modal" data-target="#addContactModal">Adicionar Fornecedor</button>
                <button class="btn btn-sm btn-info btn-addItem btn-squared hidden-print" data-toggle="modal" data-target="#addItemModal">Adicionar Item</button>
            </div>
             <!-- end: ACTION BUTTONS -->

         </div>
      </div>
       <!-- end: MAIN INFORMATION PANEL -->

      <!-- start : ADD ITEM MODAL -->
      <div id="addItemModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header" style="background-color: #ededed">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                        <td><input type="checkbox" data-id="{{ $data->id }}" data-title="{{ $data->title }}"></td>
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

      <!-- start : ADD CONTACT MODAL -->
      <div id="addContactModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #ededed">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                        <td style="text-align: center"><input type="checkbox" data-id="{{ $data->id }}" data-title="{{ $data->title }}"></td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->contact_type }}</td>
                        <td>{{ $data->phone1 }}</td>
                        <td>{{ $data->phone2 }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <button class="btn btn-primary btn-addSelectedContacts btn-block">Selecionar Fornecedores Marcados</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- end : ADD CONTACT MODAL -->

   </div>
</div>
@endsection
