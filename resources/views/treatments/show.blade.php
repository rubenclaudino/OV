@extends('layouts.page')
@section('content')

   <!-- start: MAIN CONTENT -->
<div class="main-content">

   <!-- start: CONTAINER -->
   <div class="container">

         <!-- start: HEADER INFORMATION -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;margin-bottom: 15px">

            <!-- start: ROW -->
            <div class="row">

               <!-- start: PROCEDURE MAIN INFO -->
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white" style="padding-bottom: 5px;padding-left: 20px;padding-top:0px;font-size: 1.1em ">

                  <!-- start: TILE INFO -->
                   <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >

                      <!-- start: TITLE -->
                      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                         <h2 style="color:#707070;font-weight: lighter" >{{ $plan->title }}</h2>
                      </div>
                      <!-- end: TITLE -->

                      <!-- start: TREATMENT OPTIONS BUTTON -->
                      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                         <div class="btn-group pull-right" style="margin-top:20px;">
                            <button class="btn dropdown-toggle btn-squared" data-toggle="dropdown" aria-expanded="false" style="border-radius: 1px;background: #dddddd">
                               Opções &nbsp; <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                               <li><a href="{{ URL::route('patients.edit', $plan->id) }}"><i class="fa fa-pencil fa-fw text-info" style="color: #404040"></i>&nbsp;&nbsp;Editar</a></li>
                               <li><a href="#"><i class="fa fa-money fa-fw text-info" style="color: #404040"></i>&nbsp; Pagamento</a></li>
                               <li><a href="#"><i class="fa fa-print fa-fw text-info" style="color: #404040"></i>&nbsp; Imprimir</a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- end: TREATMENT OPTIONS BUTTON -->

                      <!-- start: TABLE STYLING -->
                         <style>
                     .table th, .table td {
                        border-top: none !important;
                     }
                  </style>
                      <!-- end: TABLE STYLING -->

                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                         <hr class="custom_sepg" style="margin:0px;">

                      <!-- start: TABLE -->
                  <table class="table table-condensed" style="margin-top: 10px">
                     <tbody>
                        <tr>
                           <td class="make" style="color: #7d7d7d;line-height:26px;">
                              Valor
                           </td>
                           <td style="">R$  {{ $plan->price }}</td>
                        </tr>
                        <tr>
                           <td class="make" style="color: #7d7d7d;line-height:26px;">
                              Especialidade
                           </td>
                           <td>
                             {{--@foreach($plan->speciality as $d)
                                 <span class="label label-default" style="@if($d->color_code != '')background:#{{$d->color_code}} !important @endif;opacity: 0.8">{{$d->title }}</span>
                                 {{$d->title }}
                              @endforeach--}}
                           </td>
                        </tr>
                        <tr>
                           <td class="make" style="color: #7d7d7d;line-height:26px;">
                              Convênios
                           </td>
                           <td td style="">{{ $plan->status }}</td>
                        </tr>
                        <!-- <tr>
                           <td class="make" style="color: #383838;font-weight:bold;line-height:24px;">
                              Observation
                           </td>
                           <td>{{ $plan->observation }}</td>
                        </tr> -->
                     </tbody>
                  </table>
                      <!-- end: TABLE -->
                      </div>

                   </div>
                  <!-- end: TILE INFO -->

                   <!-- start: QUICK STATS -->
                   <div class="col-lg-3 col-md-3" style="margin-bottom: 10px;margin-top: 15px;opacity:1">
                  <span class="pull-right">

                     <!-- start: USED PER WEEK -->
                     <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-bottom: 7px">
                           <span class="pull-left">
                              <i class="fa fa-calendar-o fa-fw"></i>
                              &nbsp;Agendamentos &nbsp;&nbsp;&nbsp;</span>
                           <span class="pull-right"><strong>-</strong></span>
                     </button>
                     <!-- end: USED PER WEEK -->

                     <!-- start: USED PER WEEK -->
                     <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-bottom: 7px">
                           <span class="pull-left">
                              <i class="fa fa-calendar-o fa-fw"></i>
                              &nbsp;Por semana</span>
                           <span class="pull-right" ><strong>-</strong></span>
                     </button>
                     <!-- end: USED PER WEEK -->

                     <!-- start: USED PER MONTH -->
                     <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-bottom: 7px">
                           <span class="pull-left">
                              <i class="fa fa-calendar-o fa-fw"></i>
                              &nbsp;Por mês</span>
                           <span class="pull-right"><strong>-</strong></span>
                     </button>
                     <!-- end: USED PER MONTH -->

                     <!-- start: RANKING BETWEEN TREATMENTS -->
                     <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-bottom: 7px">
                           <span class="pull-left">
                              <i class="fa fa-line-chart fa-fw"></i>
                              &nbsp;Ranking</span>
                           <span class="pull-right"><strong>  -  </strong>  de  <strong>  -</strong></span>
                     </button>
                     <!-- end: RANKING BETWEEN TREATMENTS -->

                  </span>
                   </div>
                   <!-- end: QUICK STATS -->

               </div>
               <!-- end: PROCEDURE MAIN INFO -->

            </div>
            <!-- start: ROW -->

         </div>
         <!-- end: HEADER INFORMATION -->

         <!-- start: INFORMATION BELOW DIV -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <!-- start: ROW -->
            <div class="row">

         <!-- start: TAB TITLES -->
            <ul class="nav nav-tabs" style="font-size: 1.1em">

               <!-- start: DETAILS -->
               <li class="active">
                  <a data-toggle="tab" href="#details">
                     <strong>Detalhes</strong>
                  </a>
               </li>
               <!-- end: DETAILS -->

               <!-- start: APPOINTMENTS -->
               <li>
                  <a data-toggle="tab" href="#appointments">
                     <strong>Agendamentos</strong>
                  </a>
               </li>
               <!-- end: APPOINTMENTS -->

               <!-- start: FINANCES -->
               <li >
                  <a data-toggle="tab" href="#finances">
                     <strong>Financeiro</strong>
                  </a>
               </li>
               <!-- end: FINANCES -->

            </ul>
         <!-- end: TAB TITLES -->

         <!-- start: TAB CONTENT -->
            <div class="tab-content panel">

               <!-- start: DETAILS -->
               <div id="details" class="tab-pane fade active in">

                  <!-- start: ROW -->
                  <div class="row" style="background:#fff;padding: 15px" >

                     <!-- start: STYLE -->
                     <style>
                        .table th, .table td {
                           border-top: none !important;
                        }
                      </style>
                     <!-- end: STYLE -->

                     <!-- start: MAIN STATS -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Data Alterado
                                 </td>
                                 <td style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    % da Renda Total
                                 </td>
                                 <td style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Porcentagem de todos agendamentos
                                 </td>
                                 <td style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    % Orçamentos Fechados
                                 </td>
                                 <td style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    # Pacientes
                                 </td>
                                 <td style="font-size:1.1em">-</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- end: MAIN STATS -->

                     <!-- start: DENTIST WITH NUMBER OF APPOINTMENTS -->
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan" style="height: 200px">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td style="font-size: 1.1em">
                                          <strong>Profissionais</strong>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          -
                                       </td>
                                       <td>
                                          -
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- end: DENTIST WITH NUMBER OF APPOINTMENTS -->

                     <!-- start: DENTAL PLAN WITH NUMBER OF APPOINTMENTS -->
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan" style="height: 200px">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td style="font-size: 1.1em">
                                          <strong>Convênios</strong>
                                       </td>
                                       <td style="font-size: 1.1em">

                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          -
                                       </td>
                                       <td>-</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- end: DENTAL PLAN WITH NUMBER OF APPOINTMENTS -->

                  </div>
                  <!-- end: ROW -->

               </div>
               <!-- end: DETAILS -->

               <!-- start: APPOINTMENTS -->
               <div id="appointments" class="tab-pane fade">

                  <!-- start: TABLE -->
                  <table class="table table-striped table-hover" id="sample-table-2" style="font-size: 1.1em">
                     <thead>
                        <tr>
                           <th class="col-md-1">Data</th>
                           <th class="col-md-1">Horário</th>
                           <th class="col-md-2">Profesional</th>
                           <th class="col-md-2">Convênio</th>
                           <th class="col-md-3"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>-</td>
                           <td>-</td>
                           <td class="hidden-xs">-</td>
                           <td>-</td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
                  <!-- end: TABLE -->

               </div>
               <!-- end: APPOINTMENTS -->

               <!-- start: FINANCES -->
               <div id="finances" class="tab-pane fade">

                  <!-- start: ROW -->
                  <div class="row" style="background:#fff;">

                     <!-- start: STYLE -->
                     <style>
                        .table th, .table td {
                           border-top: none !important;
                        }
                      </style>
                     <!-- end: STYLE -->

                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 25px">

                        <!-- start: TABLE -->
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width: 60%">
                                    Valor
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Média Cobrada
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Comissão(%)Negociada
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Media Retorno Diario
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Media Retorno Mensal
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Retorno Particular
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Retorno Convênio
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Retorno Total
                                 </td>
                                 <td class="make2" style="font-size:1.1em">-</td>
                              </tr>
                           </tbody>
                        </table>
                        <!-- end: TABLE -->

                     </div>

                     <!-- start: GRAPH 1 -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="panel panel-white accepted_plan">
                           <div class="panel-body">
                              <div class="convas-container" >
                                 <canvas  id="treatment"></canvas>
                              </div>
                              <div id="js-legend1" class="chart-legend"></div>
                           </div>
                        </div>
                     </div>
                     <!-- end: GRAPH 1 -->

                     <!-- start: GRAPH 2 -->
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="panel panel-white accepted_plan">
                           <div class="panel-body">
                              <div class="convas-container" >
                                 <canvas  id="treatment"></canvas>
                              </div>
                              <div id="js-legend1" class="chart-legend"></div>
                           </div>
                        </div>
                     </div>
                     <!-- end: GRAPH 2 -->

                  </div>
                  <!-- end: ROW -->

               </div>
               <!-- end: FINANCES -->

            </div>
         <!-- end: TAB CONTENT -->

            </div>
            <!-- start: ROW -->

         </div>
         <!-- end: INFORMATION BELOW DIV -->

   </div>
   <!-- end: CONTAINER -->

</div>
   <!-- end: MAIN CONTENT -->

@endsection
