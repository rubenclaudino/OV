@extends('layouts.page')
@section('title', 'Permissions')
@section('content')

    <!-- start: MAIN INFORMATION PANEL -->
    <div class="panel panel-white" style="margin-top:8px;">

        <!-- start: BODY HEADER -->
        <div class="panel-heading">
            <h2 class="table_title">Permissions</h2>
            <hr class="custom_sep">
        </div>
        <!-- end: BODY HEADER -->

        <!-- start: MAIN BODY PANEL -->
        <div class="panel-body">

            <!-- start: FORM -->
        {{ Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'PUT','id' => 'updatePermission', 'enctype' => 'multipart/form-data']) }}

        <!-- start: ERROR INFORMATION -->
            @if(count($errors))
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!-- start: ERROR INFORMATION -->


            <div class="clearfix"></div>
            <!-- start: NAME -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="fname">Nome</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                           value="{{ $permission->name }}">
                </div>
            </div>
            <!-- start: SLUG -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                    <label for="fname">Slug</label>
                    {!! Form::select('slug', $controllers,trim($permission->slug),['class' => 'form-control selectpicker','placeholder' => 'Select Slug']) !!}
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- start: MODEL -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group {{ $errors->has('model') ? 'has-error' : '' }}">
                    <label for="description">Modelo</label>
                    {!! Form::select('model', $models,$permission->model,['class' => 'form-control selectpicker','placeholder' => 'Select Model']) !!}
                </div>
            </div>
            <!-- start: DESCRIPTION -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="description">Descrição</label>
                    <input class="form-control" id="description" name="description" type="text"
                           placeholder="Description" value="{{ $permission->description }}">
                </div>
            </div>

            <div class="clearfix"></div>

            <hr class="custom_sep">

            <!-- start: BUTTON AREA -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="form-group">
                    <button class="btn btn-success btn-submit btn-squared" data-loading-text="Salvando..."
                            type="submit">Criar Permissão
                    </button>
                </div>
            </div>
            <!-- end: BUTTON AREA -->

            </form>
            <!-- end: FORM -->

        </div>
        <!-- end: MAIN BODY PANEL -->

    </div>
    <!-- end: MAIN INFORMATION PANEL -->

@endsection
