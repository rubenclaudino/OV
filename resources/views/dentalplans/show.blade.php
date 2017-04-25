@extends('layouts.page')
@section('content')

<div class="main-content">
   <div class="container">

      <!-- start: TOOLBAR -->
      <div class="toolbar row">
   		<div class="col-sm-6 hidden-xs">
   			<div class="page-header">
   				<h1>{{ $title }} <small>{{ $subtitle }}</small></h1>
   			</div>
   		</div>
   		<div class="col-sm-6 col-xs-12">
   			<div class="toolbar-tools pull-right">
   				<!-- start: TOP NAVIGATION MENU -->
   				<ul class="nav navbar-right">
   					<li>
   						<a href="{{ url('/treatments/treatmentTypes')}}" class="new-event MyToolbar">
   							<i class="fa fa-medkit"></i> View All Plans
   						</a>
   					</li>
   				</ul>
   				<!-- end: TOP NAVIGATION MENU -->
   			</div>
   		</div>
   	</div>
      <!-- end: TOOLBAR -->

      <div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li>
						<a href="#">
							Dashboard
						</a>
					</li>
					<li class="active">
						{{ $title }}
					</li>
				</ol>
			</div>
		</div>

      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="background:#fff; color:#383838;min-height:235px;">
                  <h2 style="color:#5555ff">{{ $plan->title }}</h2>
                  <style>
                     .table th, .table td {
                        border-top: none !important;
                     }

                  </style>
                  <table class="table table-condensed" >
                     <tbody>
                        <tr>
                           <td class="make" style="color: #383838;font-weight:bold;line-height:24px;">
                              Price
                           </td>
                           <td>R${{ $plan->price }}</td>
                        </tr>
                        <tr>
                           <td class="make" style="color: #383838;font-weight:bold;line-height:24px;">
                              Catagory
                           </td>
                           <td>{{ $plan->speciality }}</td>
                        </tr>
                        <tr>
                           <td class="make" style="color: #383838;font-weight:bold;line-height:24px;">
                              Accepted Plans
                           </td>
                           <td>{{ $plan->status }}</td>
                        </tr>
                        <tr>
                           <td class="make" style="color: #383838;font-weight:bold;line-height:24px;">
                              Observation
                           </td>
                           <td>{{ $plan->observation }}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <span class="pull-right">
                     <div class="col-lg-12 nopadding" style="padding-top:0;">
                        <div class="profile-div">
                           <i class="fa fa-calendar-check-o" style="font-size:1.3em"></i>
                           N&deg; Appointments <strong>120</strong>
                        </div>
                     </div>
                     <div class="col-lg-12 nopadding">
                        <div class="profile-div">
                           <i class="fa fa-calendar-check-o" style="font-size:1.3em"></i>
                           N&deg; Appointments This Week <strong>2</strong>
                        </div>
                     </div>
                     <div class="col-lg-12 nopadding">
                        <div class="profile-div">
                           <i class="fa fa-calendar-check-o" style="font-size:1.3em"></i>
                           N&deg; Appointments Next Week <strong>2</strong>
                        </div>
                     </div>
                     <div class="col-lg-12 nopadding">
                        <div class="profile-div">
                           <i class="fa fa-line-chart" style="font-size:1.3em"></i>
                           Treatment Position <strong>2</strong> Of <strong>18</strong>
                        </div>
                     </div>
                  </span>
               </div>
            </div>
         </div>
            <ul class="nav nav-tabs nav-justified nav-profile">
               <li class="active">
                  <a data-toggle="tab" href="#details">
                     <strong>Details</strong>
                  </a>
               </li>
               <li>
                  <a data-toggle="tab" href="#appointments">
                     <strong>Appointments</strong>
                  </a>
               </li>
               <li >
                  <a data-toggle="tab" href="#finances">
                     <strong>Finances</strong>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div id="details" class="tab-pane fade active in">
                  <div class="row" style="background:#fff;">
                     <style>
                        .table th, .table td {
                           border-top: none !important;
                        }
                      </style>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Date Created
                                 </td>
                                 <td>18/03/2014</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    % Income
                                 </td>
                                 <td>32% Of Income Is From This Treatment</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    % Appointments
                                 </td>
                                 <td>8% Of Appointments Are Of This Treatment</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    % Quotes Closed
                                 </td>
                                 <td>22%</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    # Patients
                                 </td>
                                 <td>18</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td class="text-bold">
                                          Dentist
                                       </td>
                                       <td class="text-bold">
                                          # Caried Out
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Dr. Mariana
                                       </td>
                                       <td>12</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Alex
                                       </td>
                                       <td>9</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sofia
                                       </td>
                                       <td>8</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Marcel
                                       </td>
                                       <td>7</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sarah
                                       </td>
                                       <td>6</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-white accepted_plan">
                           <div class="panel-body fixed-panel">
                              <table class="table table-condensed" >
                                 <thead>
                                    <tr>
                                       <td class="text-bold">
                                          Dentist
                                       </td>
                                       <td class="text-bold">
                                          # Caried Out
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Dr. Mariana
                                       </td>
                                       <td>12</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Alex
                                       </td>
                                       <td>9</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sofia
                                       </td>
                                       <td>8</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Marcel
                                       </td>
                                       <td>7</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Dr. Sarah
                                       </td>
                                       <td>6</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="appointments" class="tab-pane fade">
                  <table class="table table-striped table-hover" id="sample-table-2">
                     <thead>
                        <tr>
                           <th>Date</th>
                           <th>Dentist</th>
                           <th class="hidden-xs">Patient</th>
                           <th class="center hidden-xs">Paid</th>
                           <th class="hidden-xs">Pyment Type</th>
                           <th>R$</th>
                           <th class="hidden-xs">Installment</th>
                           <th class="center hidden-xs">Obs</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Mariana</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-times" style="color:red;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Alex</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-check" style="color:green;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Alex</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-check" style="color:green;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Mariana</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-times" style="color:red;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Sofia</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-check" style="color:green;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Sarah</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-times" style="color:red;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
                        </tr>
                        <tr>
                           <td>14/02/16</td>
                           <td>Dr. Osman</td>
                           <td class="hidden-xs">Ariya Stark</td>
                           <td class="center hidden-xs">
                              <i class="fa fa-check" style="color:green;"></i>
                           </td>
                           <td class="hidden-xs">Cash</td>
                           <td>R$ 450</td>
                           <td class="hidden-xs">x1</td>
                           <td class="center hidden-xs"><a><i class="fa fa-info-circle"></i></a></td>
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
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <table class="table table-condensed" >
                           <tbody>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Treatment Price
                                 </td>
                                 <td class="make2">R$ 200</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Average Treatment Price
                                 </td>
                                 <td class="make2">R$ 83</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Comission(%) Negotiated
                                 </td>
                                 <td class="make2">20%</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Average Daily Earning
                                 </td>
                                 <td class="make2">R$ 249</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Average Monthly Earning
                                 </td>
                                 <td class="make2">R$ 2490</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Private Earning
                                 </td>
                                 <td class="make2">R$ 249</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Dental Plan Earning
                                 </td>
                                 <td class="make2">R$ 249</td>
                              </tr>
                              <tr>
                                 <td style="color: #383838;font-weight:bold;line-height:30px;">
                                    Earning To Date
                                 </td>
                                 <td class="make2">R$ 24090</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
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
         </div>
      </div>
   </div>
</div>
@endsection
