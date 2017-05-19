<input type="hidden" name="id" value="{{  null}}">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('clinic_id') ? 'has-error' : '' }}">
        <label for="clinic_id">Select Clinic</label>
        {!! Form::select('clinic_id', $clinics, 'Select A Clinic',['class' => 'form-control','placeholder' => 'Select a Clinic']) !!}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="roles">Roles</label>
        {!! Form::select('roles[]',$roles,'',['class' => 'form-control selectpicker','multiple' => 'true']) !!}
    </div>
</div>

<div class="clearfix"></div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
        <label for="first_name">Nome</label>
        {{ Form::text('first_name', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
        <label for="last_name">Sobrenome</label>
        {{ Form::text('last_name', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
        <label for="fname">Sexo</label>

        <div class="clearfix">
            <label>{{ Form::radio('gender', '0') }} Masculino </label> &nbsp;
            <label>{{ Form::radio('gender', '1') }} Feminino </label>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="fname">E-mail</label>
        {{ Form::text('email', null,['placeholder' => 'Email usado para seu login','class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="fname">Password</label>
        <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}">
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="fname">Confirm Password</label>
        <input class="form-control" id="confirm_password" name="password_confirmation"
               type="password"
               value="{{ old('confirm_password') }}">
    </div>
</div>

<div class="clearfix"></div>

<!-- start: ADDRESS -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Endereço</h3>
</div>
<!-- end: ADDRESS -->

<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
        <label for="address">Rua / Avendia</label>
        {{ Form::text('address', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('street_number') ? 'has-error' : '' }}">
        <label for="street_number">Número</label>
        {{ Form::number('street_number', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('borough') ? 'has-error' : '' }}">
        <label for="borough">Bairro</label>
        {{ Form::text('borough', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
        <label for="zip_code">CEP</label>
        {{ Form::text('zip_code', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
        <label for="city_id">Cidade</label>
        {!! Form::select('city_id', $cities, 'Não informado',['class' => 'form-control']) !!}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('state_id') ? 'has-error' : '' }}">
        <label for="state_id">Estado</label>
        {!! Form::select('state_id', $states, 'Não informado',['class' => 'form-control']) !!}
    </div>
</div>

<div class="clearfix"></div>

<!-- start: CONTACT -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Contato</h3>
</div>
<!-- end: CONTACT -->

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_1') ? 'has-error' : '' }}">
        <label for="phone_1">Enter phone 1</label>
        {{ Form::text('phone_1', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_2') ? 'has-error' : '' }}">
        <label for="phone_2">Enter phone 2</label>
        {{ Form::text('phone_2', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_landline') ? 'has-error' : '' }}">
        <label for="phone_landline">Enter landline phone</label>
        {{ Form::text('phone_landline', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('whatsapp_number') ? 'has-error' : '' }}">
        <label for="whatsapp_number">Enter whatsapp number</label>
        {{ Form::text('whatsapp_number', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="clearfix"></div>
<div class="col-md-12">
    <hr>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
        <label for="fname">Data de Nascimento</label>
        {{ Form::text('date_of_birth', null,['class' => 'form-control datepicker']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
        <label for="fname">CPF</label>
        {{ Form::text('cpf', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="clearfix"></div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('rg') ? 'has-error' : '' }}">
        <label for="fname">RG</label>
        {{ Form::text('rg', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('observation') ? 'has-error' : '' }}">
        <label for="fname">Observações</label>
        {{ Form::text('observation', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('cro') ? 'has-error' : '' }}">
        <label for="fname">CRO</label>
        {{ Form::text('cro', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('honors') ? 'has-error' : '' }}">
        <label for="fname">Honors</label>
        {{ Form::text('honors', null,['class' => 'form-control']) }}
    </div>
</div>

<div class="col-md-12 hide">
    <h3 class="panel_inner_title" style="font-weight: lighter">Preferences e Outras Informações</h3>
    <hr style="border-top: 1px #dddddd solid;margin-top: -10px">
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hide">

    <div class="form-group {{ $errors->has('resident_in_clinic') ? 'has-error' : '' }}">
        <label style="font-size: 1.1em">Resident in Clinic
            &nbsp;&nbsp; {{ Form::checkbox('resident_in_clinic',1) }} </label>
    </div>

    <div class="form-group {{ $errors->has('uses_whatapp') ? 'has-error' : '' }}">
        <label style="font-size: 1.1em">Use Whats App
            &nbsp;&nbsp; {{ Form::checkbox('uses_whatsapp',1) }} </label>
    </div>

    <div class="form-group {{ $errors->has('accept_calls') ? 'has-error' : '' }}">
        <label style="font-size: 1.1em">Accept Calls
            &nbsp;&nbsp; {{ Form::checkbox('accept_calls',1) }} </label>
    </div>

</div>

<div class="clearfix"></div>
<div class="col-md-12">
    <hr>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
    <div class="form-group">
        <button class="btn btn-success btn-submit" data-loading-text="Saving..." type="submit">
            Save
        </button>
    </div>
</div>
<div class="clearfix"></div>