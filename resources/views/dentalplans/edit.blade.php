@extends('layouts.page')
@section('content')

    <!-- start: MAIN CONTAINER -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: ROW -->
            <div class="row" style="margin-top: 15px">

                <!-- start: FORM -->
            {{ Form::model($plan, ['route' => ['dentalplans.update', $plan->id], 'method' => 'PUT','id' => 'updateDentalPlan']) }}

            <!-- start: ERRORS -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="errorHandler alert alert-danger no-display">
                        <i class="fa fa-remove-sign"></i> Existem errors no formulário. Por favor verifique em baixo.
                    </div>
                </div>
                <!-- end: ERRORS -->

                <!-- start: MAIN DIV -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div id="personal_details" class="tab-pane fade active in">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="panel">

                                    <!-- start: FORM HEADER -->
                                    <div class="panel-heading header_t1" style="padding-bottom: 0;margin-bottom: 0">
                                        <h2 class="table_title">{{ $title }} <br>
                                            <small style="color: silver">{{ $subtitle }}</small>
                                        </h2>
                                        <hr class="custom_sep" style="padding-bottom: 0;margin-bottom: 0">
                                    </div>
                                    <!-- end: FORM HEADER -->

                                    <div class="panel-body">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                            <div class="row">

                                                <!-- start: DENTAL PLAN NAME -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="title">Nome</label>
                                                        <input class="form-control" id="title" name="title" type="text"
                                                               value="{{ $plan->title }}">
                                                    </div>
                                                </div>
                                                <!-- end: DENTAL PLAN NAME -->

                                                <!-- start: ANS -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="ans">ANS</label>
                                                        <input class="form-control" id="ans" name="ans" type="text">
                                                    </div>
                                                </div>
                                                <!-- end: ANS -->

                                                <!-- start: SITE -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="url">Site</label>
                                                        <input class="form-control" id="url" name="url" type="text"
                                                               value="{{ $plan->url }}">
                                                    </div>
                                                </div>
                                                <!-- end: SITE -->

                                                <!-- start: PHONE 1 -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="phone">Phone 1</label>
                                                        <input class="form-control" id="phone" name="phone" type="text"
                                                               value="{{ $plan->phone_1 }}">
                                                    </div>
                                                </div>
                                                <!-- end: PHONE 1 -->

                                                <!-- start: PHONE 2 -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="phone_2">Phone 2</label>
                                                        <input class="form-control" id="phone2" name="phone_2"
                                                               type="text" value="{{ $plan->phone_2 }}">
                                                    </div>
                                                </div>
                                                <!-- end: PHONE 2 -->

                                                <!-- start: ROAD -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="address">Road / Avenue</label>
                                                        <input class="form-control" id="address" name="address"
                                                               type="text" value="{{ $plan->address }}">
                                                    </div>
                                                </div>
                                                <!-- end: ROAD -->

                                                <!-- start: NUMBER -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="number">Number</label>
                                                        <input class="form-control" id="number" name="number"
                                                               type="text" value="{{ $plan->number }}">
                                                    </div>
                                                </div>
                                                <!-- end: NUMBER -->

                                                <div class="clearfix"></div>

                                                <!-- start: BOROUGH -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="borough">Borough</label>
                                                        <input class="form-control" id="borough" name="borough"
                                                               type="text" value="{{ $plan->borough }}">
                                                    </div>
                                                </div>
                                                <!-- end: BOUROUGH -->

                                                <!-- start: CEP -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="cep">CEP</label>
                                                        <input class="form-control" id="cep" name="cep" type="text"
                                                               value="{{ $plan->cep }}">
                                                    </div>
                                                </div>
                                                <!-- end: CEP -->

                                                <div class="clearfix"></div>

                                                <!-- start: CITY -->
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input class="form-control" id="city" name="city" type="text"
                                                               value="{{ $plan->city }}">
                                                    </div>
                                                </div>
                                                <!-- end: CITY -->

                                                <!-- start: STATE -->
                                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="state_id">
                                                            State
                                                        </label>
                                                        {!! Form::select('state_id',$states,$plan->state_id,['class' => 'select2picker select_state']) !!}
                                                    </div>
                                                </div>
                                                <!-- end: STATE -->

                                                <!-- start: BUTTON INTERACTIONS -->
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <hr>
                                                    <div class="form-group">
                                                        <a class="btn btn-danger" href="{{ url('/dentalplans')}}"
                                                           style="color: white">
                                                            Cancelar
                                                        </a>
                                                        <button type="submit" class="btn btn-success">
                                                            Salvar
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end: BUTTON INTERACTIONS -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- end: MAIN DIV -->

                </form>

            </div>

        </div>

    </div>

@endsection
