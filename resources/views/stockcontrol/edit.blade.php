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

                                <p style="font-size: large;color: silver">Editar item</p>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">

                            <div class="toolbar-tools pull-right" style="padding-top: 10px">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="opacity: 0.7">
                                    <li>
                                        <a href="{{ url('/stockcontrol')}}" class="new-event MyToolbar">
                                            <i class="fa fa-archive"></i> Estoque
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

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
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="fileupload fileupload-new" data-provides="fileupload" style="margin-top:5px;">
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
                            <div class="form-group">
                                <button class="btn btn-success btn-submit" data-loading-text="Salvando..."
                                        type="submit">Atualizar Item
                                </button>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
                <!-- end: PANEL BODY -->

            </div>
            <!-- end: MAIN INFORMATION PANEL -->

        </div>

    </div>

@endsection
