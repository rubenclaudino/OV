@extends('layouts.page')
@section('content')

        <!-- start: MAIN CONTENT -->
<div class="main-content">

    <!-- start: CONTAINER -->
    <div class="container">

        <!-- start: MAIN INFORMATION PANEL -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

            <!-- start: PANEL HEADING -->
            <div class="panel-heading header_t1" style="margin-bottom: 0px">
                <h2 class="table_title">{{ $title }}<br>
                    <small style="color: #dddddd">{{ $subtitle }}</small>
                </h2>
                <hr class="custom_sep" style="padding: 0;margin: 0">
            </div>
            <!-- end: PANEL HEADING -->

            <!-- start: PANEL BODY -->
            <div class="panel-body" style="padding: 0px 30px">

                <!-- start: FORM START -->
                {{ Form::open(array('route' => 'stockcontrol.store', 'class' => 'form', 'id' => 'addItem', 'enctype' => 'multipart/form-data')) }}
                        <!-- start: FORM START -->

                <!-- start: ERROR INFORMATION -->
                @if(count($errors))
                    <div class="alert alert-danger">
                        <strong>Houve</strong> algum erro com formatação.
                        <br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                            <!-- end: ERROR INFORMATION -->

                    <div class="row">
                        <!-- start: PROFILE PICTURE COLUMN -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-top:5px;">
                                <div class="fileupload-new thumbnail" style="width:100%;border-radius: 1px">
                                </div>
                                <div style="line-height: 10px; width:100%"
                                     class="fileupload-preview fileupload-exists thumbnail">
                                </div>
                                <div>
                              <span class="btn btn-primary btn-file">
                                 <span class="fileupload-new">
                                    <i class="fa fa-picture-o fa-fw"></i>
                                    &nbsp;Selecionar Imagem
                                 </span>
                                 <span class="fileupload-exists">
                                    <i class="fa fa-picture-o fa-fw"></i>
                                    &nbsp;Editar
                                 </span>
                                    <input name="image_url" id="image_url" type="file"
                                           accept="image/x-png, image/gif, image/jpeg">
                              </span>
                               <span class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                 <span class="fileupload-exists">
                                    <i class="fa fa-times fa-fw"></i>
                                    &nbsp;Remover
                                 </span>
                              </span>
                                </div>
                            </div>
                        </div>
                        <!-- end: PROFILE PICTURE COLUMN -->

                        <!-- start: FIELD INFORMATION -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="title">Item</label>
                                <input class="form-control" id="name" name="name" type="text"
                                       placeholder="Descrição ou nome do item">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin: 0px;padding-left: 0px">
                                <div class="form-group">
                                    <label for="quanity">Quantidade</label>
                                    <input class="form-control" id="quantity" name="quantity" type="number"
                                           placeholder="Quantidade atual">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin: 0px;padding-right: 0px">
                                <div class="form-group">
                                    <label for="min_stock">Quantidade Mínima</label>
                                    <input class="form-control" id="min_stock" name="min_stock" type="number"
                                           placeholder="Notificação de baixo estoque">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="purchased_date">Data da Compra</label>
                                <input class="form-control datepicker" id="purchased_date" name="purchased_date"
                                       type="text" placeholder="Data que foi feito a compra" date-format="yy-mm-dd">
                            </div>
                        </div>

                        <!-- start: INTERACTION AREA -->
                        <div class="form-group col-lg-12">

                            <hr class="custom_sepg">
                            <button class="btn btn-success btn-submit" data-loading-text="Salvando..." type="submit">
                                Cadastrar Item
                            </button>

                        </div>
                        <!-- end: INTERACTION AREA -->

                        <!-- end: FIELD INFORMATION -->

                    </div>

                    </form>

            </div>
            <!-- start: PANEL BODY -->

        </div>
        <!-- end: MAIN INFORMATION PANEL -->

    </div>
    <!-- end: CONTAINER -->

</div>
<!-- end: MAIN CONTENT -->

@endsection
