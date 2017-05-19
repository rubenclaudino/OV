<input type="hidden" name="id" value="{{  null}}">

<!-- start: SELECT CLINIC -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('clinic_id') ? 'has-error' : '' }}">
        <label for="clinic_id">Selecione Clinica</label>
        {!! Form::select('clinic_id', $clinics, 'Select A Clinic',['class' => 'form-control']) !!}
    </div>
</div>
<!-- end: SELECT CLINIC -->

<!-- start: USER ROLE -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group">
        <label for="roles">Roles</label>
        {!! Form::select('roles[]',$roles, null,['class' => 'form-control selectpicker','multiple' => 'true']) !!}
    </div>
</div>
<!-- end: USER ROLE -->

<div class="clearfix"></div>

<!-- start: LOGIN TITLE -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Dados Usuário</h3>
</div>
<!-- end: LOGIN TITLE -->

<!-- start: EMAIL -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="fname">E-mail</label>
        {{ Form::text('email', null,['placeholder' => 'Email usado para seu login','class' => 'form-control']) }}
    </div>
</div>
<!-- end: EMAIL -->

<!-- start: PASSWORD -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="fname">Senha</label>
        <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}">
    </div>
</div>
<!-- end: PASSWORD -->

<!-- start: PASSWORD CONFIRMATION -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="fname">Confirmar Senha</label>
        <input class="form-control" id="confirm_password" name="password_confirmation"
               type="password"
               value="{{ old('confirm_password') }}">
    </div>
</div>
<!-- end: PASSWORD CONFIRMATION -->

<div class="clearfix"></div>

<!-- start: PERSONAL TITLE -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Dados Pessoais</h3>
</div>
<!-- end: PERSONAL TITLE -->

<!-- start: FIRST NAME -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
        <label for="first_name">Nome</label>
        {{ Form::text('first_name', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: FIRST NAME -->

<!-- start: LAST NAME -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
        <label for="last_name">Sobrenome</label>
        {{ Form::text('last_name', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: LAST NAME -->

<!-- start: GENDER -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
        <label for="fname">Sexo</label>

        <div class="clearfix">
            <label>{{ Form::radio('gender', '0') }} Masculino </label> &nbsp;
            <label>{{ Form::radio('gender', '1') }} Feminino </label>
        </div>
    </div>
</div>
<!-- end: GENDER -->

<!-- start: DATE OF BIRTH -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
        <label for="date_of_birth">Data de Nascimento</label>
        {{ Form::text('date_of_birth', null,['class' => 'form-control datepicker']) }}
    </div>
</div>
<!-- end: DATE OF BIRTH -->

<!-- start: CPF -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('cpf') ? 'has-error' : '' }}">
        <label for="fname">CPF</label>
        {{ Form::text('cpf', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: CPF -->

<!-- start: PERSONAL ID NUMBER -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('personal_id_number') ? 'has-error' : '' }}">
        <label for="personal_id_number">RG</label>
        {{ Form::text('personal_id_number', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: PERSONAL ID NUMBER -->

<!-- start: HONORS -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('honors') ? 'has-error' : '' }}">
        <label for="fname">Honors</label>
        {{ Form::text('honors', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: HONORS -->

<!-- start: CRO / DENTIST UNIQUE REGISTERATION -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('dentist_unique_identifier') ? 'has-error' : '' }}">
        <label for="dentist_unique_identifier">CRO</label>
        {{ Form::text('dentist_unique_identifier', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: CRO / DENTIST UNIQUE REGISTERATION -->

<!-- start: EXTRA INFO -->
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('additional_info') ? 'has-error' : '' }}">
        <label for="fname">Informações extras</label>
        {{ Form::text('additional_info', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: EXTRA INFO -->

<!-- start: CONTACT TITLE -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Dados de Contato</h3>
</div>
<!-- end: CONTACT TITLE -->

<!-- start: LANDLINE PHONE -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_landline') ? 'has-error' : '' }}">
        <label for="phone_landline">Telefone Fixo</label>
        {{ Form::text('phone_landline', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: LANDLINE PHONE -->

<!-- start: CEL 1 -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_1') ? 'has-error' : '' }}">
        <label for="phone_1">Celular 1</label>
        {{ Form::text('phone_1', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: CEL 1 -->

<!-- start: CEL 2 -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('phone_2') ? 'has-error' : '' }}">
        <label for="phone_2">Celular 2</label>
        {{ Form::text('phone_2', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: CEL 2 -->

<!-- start: WHATSAPP -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('whatsapp_number') ? 'has-error' : '' }}">
        <label for="whatsapp_number">Whatsapp</label>
        {{ Form::text('whatsapp_number', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: WHATSAPP -->

<!-- start: ADDRESS TITLE -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h3 class="custom_header1">Dados de Endereço</h3>
</div>
<!-- end: ADDRESS TITLE -->

<!-- start: STREET -->
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
        <label for="address">Rua / Avendia</label>
        {{ Form::text('address', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: STREET -->

<!-- start: ROAD NUMBER -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('street_number') ? 'has-error' : '' }}">
        <label for="street_number">Número</label>
        {{ Form::number('street_number', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: ROAD NUMBER -->

<!-- start: BOROUGH -->
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('borough') ? 'has-error' : '' }}">
        <label for="borough">Bairro</label>
        {{ Form::text('borough', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: BOROUGH -->

<!-- start: POSTAL CODE -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('zip_code') ? 'has-error' : '' }}">
        <label for="zip_code">CEP</label>
        {{ Form::text('zip_code', null,['class' => 'form-control']) }}
    </div>
</div>
<!-- end: POSTAL CODE -->

<!-- start: CITY -->
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
        <label for="city_id">Cidade</label>
        {!! Form::select('city_id', $cities, 'Não informado',['class' => 'form-control']) !!}
    </div>
</div>
<!-- end: CITY -->

<!-- start: STATE -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <div class="form-group {{ $errors->has('state_id') ? 'has-error' : '' }}">
        <label for="state_id">Estado</label>
        {!! Form::select('state_id', $states, 'Não informado',['class' => 'form-control']) !!}
    </div>
</div>
<!-- end: STATE -->

<div class="clearfix"></div>

<!-- start: EXTRA DETAILS TITLE -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hide">
    <h3 class="custom_header1">Preferences e Outras Informações</h3>
</div>
<!-- end: EXTRA DETAILS TITLE -->

<!-- start: EXTRA DETAILS -->
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
<!-- end: EXTRA DETAILS -->

<div class="clearfix"></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <hr>
</div>

<!-- start: INTERACTIONS -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
    <div class="form-group">
        <button class="btn btn-success btn-submit" data-loading-text="Salvando..." type="submit">
            Salvar
        </button>
    </div>
</div>
<!-- end: INTERACTIONS -->
