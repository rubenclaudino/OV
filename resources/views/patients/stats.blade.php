@extends('layouts.dashboard')
@section('content')

<div class="main-content">

   <div class="container">

	   <!-- start: MAIN INFO PANEL -->
      <div class="row" style="margin-top: 10px">

         <!-- start : PATIENTS REGISTERED -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>{{ $patients['count'] }}</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Pacientes</h4>
                     <span class="subtitle">Cadastrados</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- start : PATIENTS REGISTERED -->

         <!-- start : PATIENTS INACTIVE -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>0</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Pacientes</h4>
                     <span class="subtitle">Inativos</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : PATIENTS INACTIVE -->

         <!-- start : AVG AGE BASE -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>0</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Média</h4>
                     <span class="subtitle">Idade</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : AVG AGE BASE -->

         <!-- start : MONTHLY AVG PATIENTS SEEN -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>0</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Pacientes</h4>
                     <span class="subtitle">Média / Mês</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : MONTHLY AVG PATIENTS SEEN -->

         <!-- start : DENTAL PLAN -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>{{ $patients['insuredPlan'] }}</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Pacientes</h4>
                     <span class="subtitle">Convênios</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : DENTAL PLAN -->

         <!-- start : PRIVATE PLAN -->
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
            <div class="panel-default panel-white core-box ">
               <div class="panel-body no-padding">
                  <div class="padding-20 partition-green core-icon text-center">
                     <h2>{{ $patients['privatePlan'] }}</h2>
                  </div>
                  <div class="padding-20 core-content">
                     <h4 class=" block no-margin">Pacientes</h4>
                     <span class="subtitle">Particular</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : PRIVATE PLAN -->

         <div class="clearfix"></div>

         <!-- start : NEW PATIENTS -->
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
               <div class="panel-heading border-light">
                  <h5 style="margin-bottom:0;">Pacientes Novos</h5>
               </div>
               <div class="panel-body">
                  <div class="convas-container">
                     <canvas  id="barChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : NEW PATIENTS -->

         <!-- start : PATIENTS BOOKED PER MONTH -->
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
               <div class="panel-heading border-light">
                  <h5 style="margin-bottom:0;">Pacientes Atendidos</h5>
               </div>
               <div class="panel-body" style="width:100%">
                  <div class="convas-container">
                     <canvas  id="canvas1"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : PATIENTS BOOKED PER MONTH -->

      </div>
	   <!-- end: MAIN INFO PANEL -->

   </div>

</div>

@endsection
