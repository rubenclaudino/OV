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

                        <div class="col-lg-12 col-md-12">

                            <h2 class="table_title">Item<br>
                                <small style="color: #dddddd">Atualizar cadastro do item</small>
                            </h2>

                            <hr class="custom_sep">

                        </div>

                    </div>
                    <!-- end: PANEL HEAD -->

                    <!-- start: PANEL BODY -->
                    <div class="panel-body">

                        {{ Form::model($item, ['route' => ['stockcontrol.update', $item->id], 'method' => 'PUT','id' => 'updateItem', 'enctype' => 'multipart/form-data']) }}

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

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="title">Item</label>
                                    <input class="form-control" id="name" name="name" type="text"
                                           placeholder="Descrição ou nome do item" value="{{ $item->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="min_stock">Quantidade Mínima</label>
                                    <input class="form-control" id="min_stock" name="min_stock" type="number"
                                           placeholder="Para receber alerta quando chegar nessa quantidade"
                                           value="{{ $item->min_stock }}">
                                </div>
                                <div class="form-group">
                                    <label for="purchased_date">Data da Compra</label>
                                    <input class="form-control datepicker" id="purchased_date" name="purchased_date"
                                           type="text" placeholder="Data que foi feito a compra" date-format="yy-mm-dd"
                                           value="{{ $item->purchased_date }}">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <div class="fileupload fileupload-new" data-provides="fileupload"
                                     style="margin-top:5px;">
                                    <div class="fileupload-new thumbnail" style="width:100%">
                                        @if($item->image_url != '')
                                            {{ Html::image($item->image_url) }}
                                        @endif
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
                                     &nbsp;Alterar
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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <hr class="custom_sepg">
                                    <button class="btn btn-success btn-submit" data-loading-text="Salvando..."
                                            type="submit">Atualizar Item
                                    </button>
                                    <a href="{{ url('/stockcontrol')}}" class="btn btn-grey">
                                        Voltar
                                    </a>
                                </div>
                            </div>
                        </div>

                        </form>

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
