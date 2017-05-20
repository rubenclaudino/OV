@extends('layouts.page')
@section('title', 'Procedimento')
@section('content')

   <!-- start: MAIN CONTENT -->
<div class="main-content">

   <!-- start: CONTAINER -->
   <div class="container">

         <!-- start: HEADER INFORMATION -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;margin-bottom: 15px">
            <div class="row">
               <!-- start: PROCEDURE MAIN INFO -->
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel">
                  <div class="panel-heading" style="padding:15px 0;">
                     <div class="row">

                        <!-- start: TILE INFO -->
                         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                           <div class="row">
                               <!-- start: TITLE -->
                               <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                  <h2 style="color:#707070;font-weight: lighter;margin-top:0;" >{{ $plan->title }}</h2>
                               </div>
                               <!-- end: TITLE -->

                               <!-- start: TREATMENT OPTIONS BUTTON -->
                               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                                  <div class="btn-group pull-right">
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


                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <hr class="custom_sepg" style="margin:0px;">
                                  <!-- start: TABLE -->
                                 <table class="table table-condensed" style="margin-top: 10px">
                                 <tbody>
                                    <tr>
                                       <td class="make" style="color: #7d7d7d;line-height:26px;font-size:1.1em">
                                          Valor
                                       </td>
                                       <td style="font-size:1.1em">R$  {{ $plan->price }}</td>
                                    </tr>
                                    <tr>
                                       <td class="make" style="color: #7d7d7d;line-height:26px;font-size:1.1em">
                                          Especialidade
                                       </td>
                                       <td>
                                          @if(isset($plan->speciality))
                                             @foreach($plan->speciality as $d)
                                              <span class="label label-default" style="@if($d->color_code != '')background:#{{$d->color_code}} !important @endif;opacity: 0.8">{{$d->title }}</span>
                                             @endforeach
                                          @endif   
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="make" style="color: #7d7d7d;line-height:26px;font-size:1.1em">
                                          Convênios
                                       </td>
                                       <td td style="font-size:1.1em">{{ $plan->status }}</td>
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
                         </div>
                        <!-- end: TILE INFO -->

                         <!-- start: QUICK STATS -->
                         <div class="col-lg-3 col-md-3">
                           <span class="pull-right">

                              <!-- start: USED PER WEEK -->
                              <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-bottom: 7px">
                                    <span class="pull-left">
                                       <i class="fa fa-calendar-o fa-fw"></i>
                                       &nbsp;Agendamentos &nbsp;&nbsp;&nbsp;</span>
                                    <span class="pull-right"><strong>0</strong></span>
                              </button>
                              <!-- end: USED PER WEEK -->

                              <!-- start: USED PER WEEK -->
                              <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin: 7px 0px">
                                    <span class="pull-left">
                                       <i class="fa fa-calendar-o fa-fw"></i>
                                       &nbsp;Por semana</span>
                                    <span class="pull-right" ><strong>0</strong></span>
                              </button>
                              <!-- end: USED PER WEEK -->

                              <!-- start: USED PER MONTH -->
                              <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin: 7px 0px">
                                    <span class="pull-left">
                                       <i class="fa fa-calendar-o fa-fw"></i>
                                       &nbsp;Por mês</span>
                                    <span class="pull-right"><strong>0</strong></span>
                              </button>
                              <!-- end: USED PER MONTH -->

                              <!-- start: RANKING BETWEEN TREATMENTS -->
                              <button type="button" class="btn btn-info btn-md btn-block panel-azure" style="padding: 8px;border-radius: 2px;border: transparent;margin-top: 7px">
                                    <span class="pull-left">
                                       <i class="fa fa-line-chart fa-fw"></i>
                                       &nbsp;Ranking</span>
                                    <span class="pull-right"><strong>  0  </strong>  de  <strong>  0</strong></span>
                              </button>
                              <!-- end: RANKING BETWEEN TREATMENTS -->

                           </span>
                         </div>
                         <!-- end: QUICK STATS -->

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end: HEADER INFORMATION -->

         <!-- start: INFORMATION BELOW DIV -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <!-- start: ROW -->
            <div class="row">

         <!-- start: TAB TITLES -->
            <ul class="nav nav-tabs" style="font-size: 1.1em">
               <li class="active">
                  <a data-toggle="tab" href="#details">
                     <strong>Detalhes</strong>
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#appointments">
                     <strong>Agendamentos</strong>
                  </a>
               </li>
               <li >
                  <a data-toggle="tab" href="#finances">
                     <strong>Financeiro</strong>
                  </a>
               </li>
            </ul>
         <!-- end: TAB TITLES -->

         <!-- start: TAB CONTENT -->
            <div class="tab-content panel">
               <div id="details" class="tab-pane fade active in">
                  <div class="row" style="background:#fff;padding: 15px" >
                     <style>
                        .table th, .table td {
                           border-top: none !important;
                        }
                      </style>

                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Data Alterado
                                 </td>
                                 <td style="font-size:1.1em">00/00/0000</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    % da Renda Total
                                 </td>
                                 <td style="font-size:1.1em">0 % </td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Porcentagem de todos agendamentos
                                 </td>
                                 <td style="font-size:1.1em">0 % </td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    % Orçamentos Fechados
                                 </td>
                                 <td style="font-size:1.1em">0 %</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    # Pacientes
                                 </td>
                                 <td style="font-size:1.1em">0</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan" style="height: 200px">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td style="font-size: 1.1em">
                                          <strong>Dentist</strong>
                                       </td>
                                       <td style="font-size: 1.1em">

                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Dr. Mariana
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Alex
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sofia
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Marcel
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sarah
                                       </td>
                                       <td>0</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan" style="height: 200px">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td style="font-size: 1.1em">
                                          <strong>Convênio</strong>
                                       </td>
                                       <td style="font-size: 1.1em">

                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Unimed
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Bradesco
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Odontoprev
                                       </td>
                                       <td>0</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Sul America
                                       </td>
                                       <td>0</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="appointments" class="tab-pane fade">
                  <table class="table table-striped table-hover" id="sample-table-2" style="font-size: 1.1em">
                     <thead>
                        <tr>
                           <th class="col-md-1">Date</th>
                           <th class="col-md-1">Time</th>
                           <th class="col-md-2">Dentist</th>
                           <th class="col-md-2">Dental Plan</th>
                           <th class="col-md-3"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>00/00/00</td>
                           <td>00 : 00</td>
                           <td class="hidden-xs">Dra Mariana Oliveira</td>
                           <td>Private Plan</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>00/00/00</td>
                           <td>00 : 00</td>
                           <td class="hidden-xs">Dra Mariana Oliveira</td>
                           <td>Private Plan</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>00/00/00</td>
                           <td>00 : 00</td>
                           <td class="hidden-xs">Dra Mariana Oliveira</td>
                           <td>Private Plan</td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div id="finances" class="tab-pane fade">
                  <div class="row" style="background:#fff;">
                     <style>
                        .table th, .table td {
                           border-top: none !important;
                        }
                      </style>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding: 25px">
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em;width: 60%">
                                    Price
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Average Price
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Comission(%) Negotiated
                                 </td>
                                 <td class="make2" style="font-size:1.1em">0 %</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Average Daily Earnings
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Average Monthly Earnings
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Private Plan Earnings
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Dental Plan Earnings
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">
                                    Earnings To Date
                                 </td>
                                 <td class="make2" style="font-size:1.1em">R$ 0</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

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

                  </div>
               </div>
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
