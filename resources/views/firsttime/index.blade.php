@extends('layouts.page')
@section('content')

   <!-- start: MAIN CONTENT -->
   <div class="main-content">

      <!-- start: CONTAINER -->
      <div class="container">

         <div id="msform">

            <!-- start: PROGRESSBAR -->
            <ul id="progressbar">
               <li class="active">Dados</li>
               <li>Agenda</li>
               <li>Pessoal</li>
               <li>Contato</li>
               <li>Fucionários</li>
            </ul>
            <!-- end: PROGRESSBAR -->

            <!-- start: FIELDSETS -->

            <!-- start: MAIN INFO -->
            <fieldset>

               {{ Form::model($user, ['route' => ['dentists.update', $user->id], 'method' => 'PUT','id' => 'form1', 'enctype' => 'multipart/form-data']) }}

                  <h2 class="fs-title">Bem vindo ao Odontovision</h2>
                  <h3 class="fs-subtitle">Vamos ter você trabalhando em poucos passos.</h3>

                  <div class="form-group">
                     <input type="text" name="first_name" placeholder="Nome" value="{{ Auth::user()->first_name }}">
                  </div>

                  <div class="form-group">
                     <input type="text" name="last_name" placeholder="Sobrenome" value="{{ Auth::user()->last_name }}" >
                  </div>

                  <div class="form-group">
                     <input type="text" placeholder="Email" value="{{ Auth::user()->email }}" disabled="">
                  </div>

                  <div class="form-group">
                     {!! Form::select('gender', array('0' => 'Masculino','1' => 'Feminino'),'array($patient->gender)',['class' => '']) !!}
                  </div>

                  <div class="form-group">
                     <input type="text" name="dob" placeholder="Data de nascimento" class="datepicker">
                  </div>

                  <input type="button" name="next" class="next action-button" value="Next" data-id="form1" />

               </form>

            </fieldset>
            <!-- end: MAIN INFO -->

            <!-- start: AGENDA SETTINGS -->
            <fieldset>

               {{ Form::open(array('route' => 'agenda.store','id' => 'form2')) }}

                  <input type="hidden" name="lunch_start" value="13:00">
                  <input type="hidden" name="lunch_end" value="13:30">
                  <input type="hidden" name="interval" value="13:30">

                  <h2 class="fs-title">Agenta</h2>
                  <h3 class="fs-subtitle">Informe seus horas e dias de trabalho.</h3>

                  <!-- start: MODAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb;">Segunda Feira</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input class="grey" name="days[]" type="checkbox" checked>
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}:00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}:00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: MODAY -->

                  <!-- start: TUESDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb; text-align: end">Terça Feira</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input class="grey" name="days[]" type="checkbox" checked>
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: TUESDAY -->

                  <!-- start: WEDNESDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb; text-align: right">Quarta Feira</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input class="grey"  name="days[]" type="checkbox" checked>
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: WEDNESDAY -->

                  <!-- start: THURSDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb">Quinta Feira</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input name="days[]" class="grey" type="checkbox" checked>
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: THURSDAY -->

                  <!-- start: FRIDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb">Sexta Feira</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                       <input name="days[]" class="grey" type="checkbox" checked>
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: FRIDAY -->

                  <!-- start: SATURDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb">Sabado</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input name="days[]" class="grey" type="checkbox">
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4" >
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: SATURDAY -->

                  <!-- start: SUNDAY -->
                  <div class="row">

                     <div class="col-md-3" style="text-align: right">
                        <label style="color: #bbbbbb">Domingo</label>
                     </div>

                     <div class="col-md-1" style="padding-top: 5px">
                        <input class="grey" name="days[]" type="checkbox">
                     </div>

                     <div class="col-md-4">
                        <select name="start[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 8 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                     <div class="col-md-4">
                        <select name="end[]" style="letter-spacing: 2px">
                           @for($i = 0; $i < 24; $i++)
                             <option value="{{$i}}   :   00" {{ $i == 17 ? 'selected' : ''}}>{{ $i % 12 ? $i % 12 : 12 }}:00 {{ $i >= 12 ? 'pm' : 'am' }}</option>
                           @endfor
                        </select>
                     </div>

                  </div>
                  <!-- end: SUNDAY -->

                  <!-- start: BUTTONS -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />

                  <input type="button" name="next" data-id="form2" class="next action-button" value="Next" />
                  <!-- end: BUTTONS -->

               </form>

            </fieldset>
            <!-- end: AGENDA SETTINGS -->

            <!-- start: PERSONAL DETAILS -->
            <fieldset>

               <form id="form3">

                  <h2 class="fs-title">Dados Pessoais</h2>
                  <h3 class="fs-subtitle">Informe suas informações de trabalho</h3>

                  <div class="form-group">
                     <input type="text" name="cro" placeholder="CRO" >
                  </div>

                  <div class="form-group">
                     {!! Form::select('speciality',$specialities,'array($patient->gender)',['class' => 'select', 'placeholder' => 'Selecione Especialidade','style' => 'width:100%']) !!}
                  </div>

                  <!-- start: CPF -->
                  <div class="form-group">
                     <input type="text" id="cpfv" name="last_name" placeholder="CPF" >
                  </div>
                  <!-- end: CPF -->

                  <!-- start: RG -->
                  <div class="form-group">
                     <input type="text" name="last_name" placeholder="RG" >
                  </div>
                  <!-- end: RG -->

                  <!-- start: GETS PERCENTAGE PAY -->
                  <div class="form-group">

                     <div class="row">

                        <div class="col-md-8">
                           <label>Você recebe porcentagem de atendimento ?</label>
                        </div>

                        <div class="col-md-1" style="padding-top: 5px">
                           <input class="grey" type="checkbox" name="work_with_percentages" >
                        </div>

                     </div>

                  </div>
                  <!-- end: GETS PERCENTAGE PAY -->

                  <!-- start: ALLOW OTHERS TO BOOK -->
                  <div class="form-group">

                     <div class="row">

                        <div class="col-md-8">
                           <label>Todos usúarios podem agendar para você ?</label>
                        </div>

                        <div class="col-md-1" style="padding-top: 5px">
                          <input class="grey" type="checkbox" name="book_appointments_by_others" >
                        </div>

                     </div>

                  </div>
                  <!-- end: ALLOW OTHERS TO BOOK -->

                  <!-- start: BUTTONS -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                  <!-- end: BUTTONS -->

               </form>

            </fieldset>
            <!-- end: PERSONAL DETAILS -->

            <!-- start: CONTACT DETAILS -->
            <fieldset>

               <form id="form4">

                  <h2 class="fs-title">Contato</h2>
                  <h3 class="fs-subtitle">Suas informações de contato.</h3>

                  <div class="form-group">
                     <input type="text" name="phone_landline" placeholder="Telefone" >
                  </div>

                  <div class="form-group">
                     <input type="text" name="celular_1" placeholder="Celular 1" >
                  </div>

                  <div class="form-group">
                     <input type="text" name="celular_2" placeholder="Celular 2" >
                  </div>

                  <div class="form-group">
                     <input type="text" name="whats_app" placeholder="Whatsapp" >
                  </div>

                  <!-- start: BUTTONS -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="button" name="next" class="next action-button" value="Next" />
                  <!-- end: BUTTONS -->

               </form>

            </fieldset>
            <!-- end: CONTACT DETAILS -->

            <!-- start: CLINIC USERS -->
            <fieldset>

               <form id="form5">

                  <h2 class="fs-title">Funcionários</h2>
                  <h3 class="fs-subtitle">Envie convites para todos usuários que vão utilizar o sistema.</h3>

                  <div class="row">

                     <div class="col-md-3">
                        <input type="text" name="first_name" placeholder="Nome">
                     </div>

                     <div class="col-md-3">
                        <input type="text" name="email" placeholder="Email">
                     </div>

                     <div class="col-md-3">
                        {!! Form::select('role_id', array('0' => 'Masculino','1' => 'Feminino'),'',['class' => '']) !!}
                     </div>

                     <div class="col-md-3">
                        <input type="button" name="add" class="action-button" value="Add">
                     </div>

                  </div>

                  <!-- start: BUTTONS -->
                  <input type="button" name="previous" class="previous action-button" value="Previous" />
                  <input type="submit" name="submit" class="submit action-button" value="Finish" />
                  <!-- end: BUTTONS -->

               </form>

            </fieldset>
            <!-- end: CLINIC USERS -->

            <!-- end: FIELDSETS -->

         </div>

<style>
   #pageslide-left{display: none;}
   .main-container.inner{margin-left:0;}
   /*form styles*/
   #msform {
   	width: 500px;
   	margin: 30px auto;
   	text-align: center;
   	position: relative;
   }
   #msform fieldset {
   	background: white;
   	border: 0 none;
   	border-radius: 1px;
   	box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);
   	padding: 20px 20px;
   	box-sizing: border-box;
   	width: 96%;
   	margin: 0 2%;

   	/*stacking fieldsets above each other*/
   	position: relative;
   }
   /*Hide all except first fieldset*/
   #msform fieldset:not(:first-of-type) {
   	display: none;
   }
   /*inputs*/
   #msform input, #msform textarea, #msform select{
   	padding: 10px;
   	border: 1px solid #ccc;
   	border-radius: 1px;
   	margin-bottom: 10px;
   	width: 100%;
   	box-sizing: border-box;
   	font-family: 'Raleway', sans-serif;
   	color: #3d3d3d;
   	font-size: 13px;
   }
   #msform label{
   	font-family: 'Raleway', sans-serif;
   	color: #2C3E50;
      line-height: 30px;
   }
   #msform .form-group{
      margin:0;
   }
   #msform .form-group .help-block{
      color:#f24747;
      margin:0;
      margin-top:-7px;
      font-size:12px;
      text-align: left;
   }
   /*buttons*/
   #msform .action-button {
   	width: 100px;
   	background: #27AE60;
   	font-weight: bold;
   	color: white;
   	border: 0 none;
   	border-radius: 1px;
   	cursor: pointer;
   	padding: 10px 5px;
   	margin: 10px 5px;
   }
   #msform .action-button:hover, #msform .action-button:focus {
   	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
   }

   #msform .label{
      font-family: 'Raleway', sans-serif;
   	  color: #3d3d3d;
   }
/*headings*/
.fs-title {
	font-size: 18px;
	text-transform: uppercase;
	color: Grey;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 16px;
	color: #cccccc;
	margin-bottom: 20px;
    margin-top:10px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 20px;
	overflow: hidden;
    padding-left:0;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 10px;
	width: 20%;
	float: left;
    z-index: 2;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: grey;
	background: white;
	border-radius: 2px;
	margin: 0 auto 5px auto;
    opacity: 0.8;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -40%;
	top: 9px;
    opacity: 0.8;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: limegreen;
	color: white;
}

</style>

      </div>
      <!-- end: CONTAINER -->

   </div>
   <!-- end: MAIN CONTENT -->

@endsection
