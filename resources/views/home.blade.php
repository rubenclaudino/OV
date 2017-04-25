@extends('layouts.dashboard')
@section('content')

<div class="main-content">

   <!-- start: PANEL CONFIGURATION MODAL FORM -->
   <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
               </button>
               <h4 class="modal-title">Panel Configuration</h4>
            </div>
            <div class="modal-body">
               Here will be a configuration form
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">
                  Close
               </button>
               <button type="button" class="btn btn-primary">
                  Save changes
               </button>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- end: SPANEL CONFIGURATION MODAL FORM -->

   <div class="container" style="opacity:100.00;">

      <!-- start: PAGE CONTENT -->
      <div class="row" >

         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding ">

            <div class="col-md-6 col-lg-6 col-sm-12 nopadding">
               <div class="panel panel-default panel-white core-box " >
                  <div class="panel-body no-padding" >
                     <div class="padding-20 partition-green text-center core-icon">
                        <h1 style="font-size:2.3em;line-height:0; margin-left:-5px">0</h1>
                     </div>
                     <div class="padding-20 core-content">
                        <h4 class=" block no-margin">Agendados</h4>
                        <span class="subtitle">Hoje</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 nopadding">
               <div class="panel panel-default panel-white core-box " >
                  <div class="panel-body no-padding" >
                     <div class="padding-20 partition-green core-icon text-center">
                        <h1 style="font-size:2.3em;line-height:0; margin-left:-5px">0</h1>
                     </div>
                     <div class="padding-20 core-content">
                        <h4 class=" block no-margin">Agendados</h4>
                        <span class="subtitle">Ontem</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
               <div id="notes" class="little4Divs" style="margin-top:0;">
                  <div class="panel panel-note">
                     <div class="e-slider owl-carousel owl-theme">
                        <div class="item">
                           <div class="panel-heading">
                              <h4 class="no-margin">This is a Note</h4>
                           </div>
                           <div class="panel-body space10">
                              <div class="note-short-content">
                                 Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                              </div>
                              <div class="note-content">
                                 Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                                 Quis aute iure reprehenderit in <strong>voluptate velit</strong> esse cillum dolore eu fugiat nulla pariatur.
                                 <br>
                                 Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 <br>
                                 Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                 <br>
                                 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                 <br>
                                 Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                 <br>
                                 At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                 <br>
                                 Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                 <br>
                                 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                              </div>
                           </div>
                           <div class="panel-footer">
                              <div class="avatar-note"><img src="" alt="">
                              </div>
                              <span class="author-note">Nicole</span>
                              <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                 2014-02-18T00:00:00-05:00
                              </time>
                              <div class="note-options pull-right">
                                 <a href="" class="read-note" data-subviews-options='{"startFrom": "right", "onShow": "readNote(subViewElement)", "onHide": "hideNote()"}'><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="panel-heading">
                              <h4 class="no-margin">This is the second Note</h4>
                           </div>
                           <div class="panel-body space10">
                              <div class="note-short-content">
                                 Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem, quia voluptas sit...
                              </div>
                              <div class="note-content">
                                 Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 <br>
                                 Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                 <br>
                                 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                                 <br>
                                 Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                 <br>
                                 Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae.
                                 <br>
                                 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                              </div>
                           </div>
                           <div class="panel-footer">
                              <div class="note-options pull-right">
                                 <a href="" class="show-subviews read-note" data-subviews-options='{"startFrom": "right", "onShow": "readNote(subViewElement)", "onHide": "hideNote()"}'><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                              </div>
                              <div class="avatar-note"><img src="" alt="">
                              </div>
                              <span class="author-note">Steven</span>
                              <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                 2014-02-18T00:00:00-05:00
                              </time>
                           </div>
                        </div>
                        <div class="item">
                           <div class="panel-heading">
                              <h4 class="no-margin">This is yet another Note</h4>
                           </div>
                           <div class="panel-body space10">
                              <div class="note-short-content">
                                 At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores...
                              </div>
                              <div class="note-content">
                                 At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                                 <br>
                                 Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 <br>
                                 Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci v'elit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                                 <br>
                                 Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut <strong>aliquid ex ea commodi consequatur?</strong>
                              </div>
                           </div>
                           <div class="panel-footer">
                              <div class="note-options pull-right">
                                 <a href="" class="show-subviews read-note" data-subviews-options='{"startFrom": "right", "onShow": "readNote(subViewElement)", "onHide": "hideNote()"}'><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
                              </div>
                              <div class="avatar-note"><img src="" alt="">
                              </div>
                              <span class="author-note">Ella</span>
                              <time class="timestamp" title="2014-02-18T00:00:00-05:00">
                                 2014-02-18T00:00:00-05:00
                              </time>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding ">

            <div class="col-md-6 col-lg-6 col-sm-12 nopadding">
               <div class="panel panel-default panel-white core-box " >
                  <div class="panel-body no-padding" >
                     <div class="padding-20 partition-green text-center core-icon">
                        <h1 style="font-size:2.3em;line-height:0; margin-left:-5px">0</h1>
                     </div>
                     <div class="padding-20 core-content">
                        <h4 class=" block no-margin">Agendados</h4>
                        <span class="subtitle">Essa semana</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 nopadding">
               <div class="panel panel-default panel-white core-box " >
                  <div class="panel-body no-padding" >
                     <div class="padding-20 partition-green core-icon text-center small-mobi">
                        <h1 style="font-size:2.3em;line-height:0;">0</h1>
                     </div>
                     <div class="padding-20 core-content small-mobi-inside">
                        <h4 class=" block no-margin">Agendados</h4>
                        <span class="subtitle">Semana Passada</span>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nopadding">
               <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 " style="padding:0 5px 0 0;">
                  <div class="panel panel-white little4Divs" style="height:auto !important;">
                     <div class="panel-body padding-20 text-center">
                        <div class="space10">
                           <h5 class="text-black semi-bold no-margin p-b-5">Hoje</h5>
                           <h3 class="text-black no-margin"><span class="text-small">R$</span>0</h3>
                           0
                        </div>
                        <div class="sparkline-5 space10 modified-sparkline-5"><!-- first background was #1FBBA6-->
                           <span><canvas height="70" width="104" style="display: inline-block; width: 104px; height: 70px; vertical-align: top;"></canvas></span>
                        </div>
                        <!-- <span class="text-light1"><i class="fa fa-clock-o"></i> 1 hour ago</span> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 " style="padding:0 5px 0 0;">
                  <div class="panel panel-white little4Divs"  style="height:auto !important;">
                     <div class="panel-body padding-20 text-center">
                        <div class="space10">
                           <h5 class="text-black semi-bold no-margin p-b-5">Ontem</h5>
                           <h3 class="text-black no-margin"><span class="text-small">R$</span>0</h3>
                           0
                        </div>
                        <div class="sparkline-5 space10 modified-sparkline-5">
                           <span><canvas height="70" width="104" style="display: inline-block; width: 104px; height: 70px; vertical-align: top;"></canvas></span>
                        </div>
                        <!-- <span class="text-light1"><i class="fa fa-clock-o"></i> 1 hour ago</span> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="padding:0;margin:0">
                  <div class="panel panel-white little4Divs" id="pagecontent" style="padding:0!important;margin:0!important;background:#fff!important;">
                     <canvas style="width:100%;margin-top:35%!important;" id="pieChart"></canvas>
                     <div id="p-legend" class="chart-legend-small"></div>
                  </div>
               </div>
            </div>

         </div>

         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding " style="margin:0; padding-left:0;padding-top:0;">

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 " style="margin:0; padding:0;height:193px" >
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="margin-left:0; padding:5px;margin-top:0" >
                  <div class="panel panel-default panel-white core-box " >
                     <div class="panel-body no-padding" >
                        <div class="padding-20 partition-green core-icon text-center"  style="width:50%!important">
                           <h1 style="font-size:2.3em;line-height:0;margin-bottom:20px">0</h1>
                           <span class="subtitle">Convênio</span>
                        </div>
                        <div class="padding-20 core-content text-center" style="margin-left:50%">
                           <h1 style="font-size:2.3em;line-height:0; margin-bottom:20px">
                              0
                           </h1>
                           <span class="subtitle">Particular</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 " style="margin-top:0; padding:5px;" >
                  <div class="panel panel-default panel-white core-box " >
                     <div class="panel-body no-padding" >
                        <div class="padding-20 partition-green core-icon text-center"  style="width:50%!important">
                           <h1 style="font-size:2.3em;line-height:0;margin-bottom:20px">0</h1>
                           <span class="subtitle">Confirmados</span>
                        </div>
                        <div class="padding-20 core-content text-center" style="margin-left:50%">
                           <h1 style="font-size:2.3em;line-height:0; margin-bottom:20px">
                              0
                           </h1>
                           <span class="subtitle">Desmarcados</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding ">
               <div class="panel panel-default panel-white core-box " style="height:175px;">
                  <div class="panel-body">
                     <div class="easy-pie-chart">
                        <span class="bounce number appear" data-percent="0" data-plugin-options='{"barColor": "#0175b0"}'> <span class="percent"></span> </span>
                        <div class="label-chart">
                           <h4 class="no-margin" style="font-size:1em!important">Pacientes Novos</h4>
                        </div>
                     </div>
                     <div class="text-center space15">
                        <span class="block">Mês passado</span><span class="label label-primary vertical-align-bottom">0%</span>
                     </div>
                  </div>
               </div>
            </div>

            <!-- start : CAPTIVE PATIENTS -->
            <div class="hidden-md col-lg-12 col-sm-12 col-xs-12 nopadding">
               <div class="panel panel-white nopadding " style="height:125px">
                     <h5>Você tem</h5>
                     <h4 class="middleText" style="font-size:2em;">0</h4>
                     <h5>pacientes cativos</h5>
               </div>
            </div>
            <!-- end : CAPTIVE PATIENTS -->

         </div>

         <div class="col-md-6 hidden-lg hidden-sm hidden-xs nopadding">
            <div class="panel panel-white nopadding " style="height:125px">
                  <h5>Você tem</h5>
                  <h4 class="middleText" style="font-size:2em;">0</h4>
                  <h5>Registrados no seu nome</h5>
            </div>
         </div>

      </div>

      <div class="row">
         <!-- start : PATIENTS BOOKED PER MONTH -->
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
               <div class="panel-heading border-light">
                  <h5 style="margin-bottom:0;">Fluxo de Pacientes</h5>
               </div>
               <div class="panel-body">
                  <div class="convas-container">
                     <canvas  id="barChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <!-- end : PATIENTS BOOKED PER MONTH -->

         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalSecondRow">
               <div class="panel-heading border-light">
                  <h5 style="margin-bottom:0;">Renda (Convênio X Particular)</h5>
               </div>
               <div class="panel-body" style="width:100%">
                  <div class="convas-container">
                     <canvas  id="canvas1"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-7 col-lg-8 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalThisRow">
               <div class="panel-heading border-light">
                  <h5 style="margin-bottom:0;">Fluxo de Pacientes (Convênio X Particular)</h5>
               </div>
               <div class="panel-body" >
                  <div class="convas-container">
                     <canvas  id="canvas2"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white panel-calendar equalThisRow on-mobile">
               <div class="panel-heading border-light">
                  <h4 class="panel-title">Reminder</h4>
               </div>
               <div class="panel-body">
                  <div class="height-300">
                     <div class="row">
                        <div class="col-xs-6">
                           <div class="actual-date">
                              <span class="actual-day middleText">23</span>
                              <span class="actual-month middleText" >February</span>
                           </div>
                        </div>
                        <div class="col-xs-6">
                           <div class="row">
                              <div class="col-xs-12">
                                 <div class="clock-wrapper">
                                    <div class="clock">
                                       <div class="circle">
                                          <div class="face">
                                             <div style="transform: rotate(434.842deg);" id="hour"></div>
                                             <div style="transform: rotate(178.1deg);" id="minute"></div>
                                             <div style="transform: rotate(246deg);" id="second"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12">
                                 <div class="weather text-light">
                                    <i class="wi-day-sunny"></i>
                                    <span class="middleText">25°</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="row">
                              <div class="appointments border-top border-bottom border-light space15">
                                 <a class="btn btn-sm owl-prev text-light">
                                    <i class="fa fa-chevron-left"></i>
                                 </a>
                                 <div style="opacity: 1; display: block;" class="e-slider owl-carousel owl-theme" data-plugin-options="{&quot;transitionStyle&quot;: &quot;goDown&quot;, &quot;pagination&quot;: false}">
                                    <div class="owl-wrapper-outer"><div style="width: 1566px; left: 0; display: block; transition: all 0ms ease 0s; transform: translate3d(-522px, 0px, 0px); perspective-origin: 652px 50%;" class="owl-wrapper"><div style="width: 261px;" class="owl-item"><div class="item">
                                       <div class="inline-block padding-10 border-right border-light">
                                          <span class="bold-text text-small"><i class="fa fa-clock-o"></i> 17:00</span>
                                          <span class="text-light text-extra-small">1 hour</span>
                                       </div>
                                       <div class="inline-block padding-10">
                                          <span class="bold-text text-small">NETWORKING</span>
                                          <span class="text-light text-small ">Out to design conference</span>
                                       </div>
                                    </div></div><div style="width: 261px;" class="owl-item"><div class="item">
                                       <div class="inline-block padding-10 border-right border-light">
                                          <span class="bold-text text-small"><i class="fa fa-clock-o"></i> 18:30</span>
                                          <span class="text-light text-extra-small">30 mins</span>
                                       </div>
                                       <div class="inline-block padding-10">
                                          <span class="bold-text text-small">BOOTSTRAP SEMINAR</span>
                                          <span class="text-light text-small ">Problem Solving</span>
                                       </div>
                                    </div></div><div style="width: 261px;" class="owl-item"><div class="item">
                                       <div class="inline-block padding-10 border-right border-light">
                                          <span class="bold-text text-small"><i class="fa fa-clock-o"></i> 20:00</span>
                                          <span class="text-light text-extra-small">2 hour</span>
                                       </div>
                                       <div class="inline-block padding-10">
                                          <span class="bold-text text-small">Lunch with Nicole</span>
                                          <span class="text-light text-small additional">Next on Tuesday</span>
                                       </div>
                                    </div></div></div></div>
                                 </div>
                                 <a class="btn btn-sm owl-next text-light"><i class="fa fa-chevron-right"></i> </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="pull-right">
                              <a  class="btn btn-sm test btn-transparent-green new-event"><i class="fa fa-plus"></i> New Event </a>
                              <a href="" class="btn test btn-sm btn-transparent-green show-calendar"><i class="fa fa-calendar-o"></i> Calendar </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>

      <div class="row">
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalThirdRow">
               <div class="panel-heading border-light" style="padding-bottom:0;">
                  <h5 style="margin-bottom:0;">Últimos agendamentos marcados</h5>
               </div>

               <div class="panel-body ">
                  <table class="table table-striped table-hover" style="color: #383838;margin-bottom:0;">
                     <tbody style="background:#fff;">
                        <tr >
                           <td class="lsub" style="border-top:none!important">...</td>
                           <td class="lsub" style="border-top:none!important"><i class="fa fa-clock-o"></i> 1 Jan</td>
                        </tr>
                        <tr>
                           <td class="lsub">...</td>
                           <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                        </tr>
                        <tr>
                           <td class="lsub">...</td>
                           <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                        </tr>
                        <tr>
                           <td class="lsub">...</td>
                           <td class="lsub"><i class="fa fa-clock-o"></i> 1 Jan</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- start: THE CHECK REMINDER -->
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white equalThirdRow">
               <div class="panel-body " style="padding:0;">
                  <div class="tabbable  no-margin no-padding partition-dark">
                     <ul class="nav nav-tabs" id="myTab2">
                        <li class="">
                           <a aria-expanded="false" data-toggle="tab" href="#todo_tab_example1">
                              To-do
                           </a>
                        </li>
                        <li class="">
                           <a aria-expanded="false" data-toggle="tab" href="#todo_tab_example2">
                              Next Week
                           </a>
                        </li>
                        <li class="active">
                           <a aria-expanded="true" data-toggle="tab" href="#todo_tab_example3">
                              Next Month
                           </a>
                        </li>
                     </ul>
                     <div class="tab-content  partition-white">
                        <div id="todo_tab_example1" class="tab-pane padding-bottom-5 ">
                           <div class="panel-scroll height-180  ps-container">
                              <ul class="todo">
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> today</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">New frontend layout</span><span class="label label-danger"> today</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Hire developers</span><span class="label label-warning"> tommorow</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-success"> this week</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-success"> this week</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-success"> this week</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           <div style="left: 0; bottom: 3px; width: 320px; display: none;" class="ps-scrollbar-x-rail"><div style="left: 0px; width: 0px;" class="ps-scrollbar-x"></div></div><div style="top: 0px; right: 3px; height: 180px; display: inherit;" class="ps-scrollbar-y-rail"><div style="top: 0px; height: 128px;" class="ps-scrollbar-y"></div></div></div>
                        </div>
                        <div id="todo_tab_example2" class="tab-pane padding-bottom-5">
                           <div class="panel-scroll height-180 ps-container ">
                              <ul class="todo">
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Hire developers</span><span class="label label-success"> Monday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Lunch with Nicole</span><span class="label label-danger"> Wednesday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">New frontend layout</span><span class="label label-warning"> Wednesday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           <div style="left: 0; bottom: 3px; width: 0px; display: none;" class="ps-scrollbar-x-rail"><div style="left: -10px; width: 0px;" class="ps-scrollbar-x"></div></div><div style="top: 0px; right: 3px; height: 180px; display: inherit;" class="ps-scrollbar-y-rail"><div style="top: 0px; height: 0px;" class="ps-scrollbar-y"></div></div></div>
                        </div>
                        <div id="todo_tab_example3" class="tab-pane padding-bottom-5 active">
                           <div class="panel-scroll height-180 ps-container">
                              <ul class="todo">
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Lunch with Boss</span><span class="label label-warning"> 01 monday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 12:00 AM this week</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Bootstrap Seminar</span><span class="label label-success"> 05 wednesday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 20:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">New frontend layout</span><span class="label label-warning"> 05 Wednesday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 7:00 AM Tomorrow</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> 07 Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> 07 Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="todo-actions">
                                       <i class="fa fa-square-o"></i>
                                       <div class="padding-horizontal-5">
                                          <div class="block space5">
                                             <span class="desc">Staff Meeting</span><span class="label label-danger"> 07 Friday</span>
                                          </div>
                                          <div class="block">
                                             <span class="desc text-small text-light"><i class="fa fa-clock-o"></i> 13:00 PM Today</span>
                                             <div class="btn-group btn-group-sm todo-tools">
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn" href="javascript:;">
                                                   <i class="fa fa-trash-o"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           <div style="left: 0px; bottom: 3px; width: 0px; display: none;" class="ps-scrollbar-x-rail"><div style="left: -10px; width: 0px;" class="ps-scrollbar-x"></div></div><div style="top: 0px; right: 3px; height: 180px; display: inherit;" class="ps-scrollbar-y-rail"><div style="top: 0px; height: 0px;" class="ps-scrollbar-y"></div></div></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end: THE CHECK REMINDER -->
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="col-md-12 col-lg-12 col-sm-12 nopadding">
               <div class="panel panel-white nopadding halfEqual">
                  <div class="panel-body">
                        <h5>Seu intervalo hoje é das</h5><br>
                        <span style="font-size:2em;color:#35B6D2 !important">00:00</span>
                        <span style="font-size:1.8em;">á</span>
                        <span style="font-size:2em;color:#35B6D2 !important">00:00</span>
                  </div>
               </div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 nopadding">
               <div class="panel panel-white halfEqual nopadding">
                  <div class="panel-body">
                        <h5>Melhor mês para ferias</h5><br>
                        <span style="font-size:2em;color:#35B6D2 !important">...</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white nopadding equalForthRow">
                  <h5>Existem <strong class="middleText" >0</strong> pacientes com pagamentos em aberto.</h5>
                  <span><i class="fa fa-search middleText" style="font-size:1.8em;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-print middleText" style="font-size:2em; "></i></span>
               <br>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white nopadding equalForthRow">
                  <h5 style="line-height:45px">Você tem <h4 class="middleText" style="font-size:2em; ">R$0</h4> pacientes com pagamentos em aberto.</h5>
            </div>
         </div>
         <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12 nopadding">
            <div class="panel panel-white nopadding equalForthRow">
                  <h5 style="line-height:45px">Media de renda por dia<h4 class="middleText" style="font-size:2em;">R$0</h4></h5>
            </div>
         </div>
      </div>
      <!-- end: PAGE CONTENT-->

   </div>

   <div class="subviews">
      <div class="subviews-container"></div>
   </div>

</div>

@endsection
