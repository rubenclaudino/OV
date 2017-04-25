@extends('layouts.page')
@section('content')

   <div class="main-content">

      <div class="container">

         <!-- start: MAIN INFORMATION PANEL -->
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

            <!-- start: PANEL HEADING -->
            <div class="panel-heading header_t1" style="margin-bottom: 0px">
               <h2 class="table_title">{{ $title }}<br>
                  <small style="color: #dddddd">Customização da sua agenda</small>
               </h2>
               <hr class="custom_sep" style="padding: 0;margin: 0">
            </div>
            <!-- end: PANEL HEADING -->

            <!-- start: PANEL BODY -->
            <div class="panel-body" style="margin-top: 0px">

               <!-- start: APPOINTMENT CONFIGURATIONS -->
               <div class="col-xs-12 col-sm-6 col-md-6">

                     <!-- start: FORM -->
                     <form id="saveAgendaSettings" method="POST" action="#">

                        <!-- start: DIV -->
                        <div class="form-horizontal">

                           <!-- start: WORKING HOURS -->
                           <div class="form-group">
                              <label class="col-sm-4 control-label">Expediente</label>
                              <div class="col-sm-3">
                                 <input class="form-control timepicker" id="start_hours" name="start" type="text" placeholder="Start Hours" value="@if(isset($agenda)) {{ $agenda->start }} @else 08:00 @endif">
                              </div>
                              <div class="col-sm-1">
                                 <label class="control-label">á</label>
                              </div>
                              <div class="col-sm-3">
                                 <input class="form-control timepicker" id="end_hours" name="end" type="text" placeholder="End Hours" value="@if(isset($agenda)) {{ $agenda->end }} @else 16:00 @endif">
                              </div>
                           </div>
                           <!-- end: WORKING HOURS -->

                           <!-- start: LUNCH TIME -->
                           <div class="form-group">
                              <label class="col-sm-4 control-label">Horario de Almoço</label>
                              <div class="col-sm-3">
                                 <input class="form-control timepicker" id="lunch_start_hours" name="lunch_start_hours" type="text" placeholder="Start Hours" value="@if(isset($agenda)) {{ $agenda->lunch_start_hours }} @else 13:00 @endif">
                              </div>
                              <div class="col-sm-1">
                                 <label class="control-label">á</label>
                              </div>
                              <div class="col-sm-3">
                                 <input class="form-control timepicker" id="lunch_end_hours" name="lunch_end_hours" type="text" placeholder="End Hours" value="@if(isset($agenda)) {{ $agenda->lunch_end_hours }} @else 13:30 @endif">
                              </div>
                           </div>
                           <!-- end: LUNCH TIME -->

                           <!-- start: MINIMUM APPOINTMENT SLOT -->
                           <div class="form-group">
                              <label class="col-sm-8 control-label text-left">Agendamento minimo de </label>
                              <div class="col-sm-3">
                                 <input class="form-control" id="internal" name="interval" type="text" placeholder="Interval" value="@if(isset($agenda)) {{ $agenda->interval }} @else 15 @endif">
                              </div>
                           </div>
                           <!-- end: MINIMUM APPOINTMENT SLOT -->

                           <!-- start: PICK DAYS ACTIVE -->
                           <div class="form-group">

                              <label class="col-sm-4 control-label text-left">Dias Trabalhados</label>

                              <!-- start: MONDAY TOO FRIDAY -->
                              <div class="col-sm-4">

                                 <div class="checkbox">

                                    <label style="padding-top: 10px;color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(1, $agenda->days)) checked @endif  @endif value="1"> Segunda</label>
                                    <div class="clearfix"></div>
                                    <label style="color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(2, $agenda->days)) checked @endif  @endif value="2"> Terça</label>
                                    <div class="clearfix"></div>
                                    <label style="color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(3, $agenda->days)) checked @endif  @endif value="3"> Quarta</label>
                                    <div class="clearfix"></div>
                                    <label style="color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(4, $agenda->days)) checked @endif  @endif value="4"> Quinta</label>
                                    <div class="clearfix"></div>
                                    <label style="color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(5, $agenda->days)) checked @endif  @endif value="5"> Sexta</label>
                                    <div class="clearfix"></div>

                                 </div>

                              </div>
                              <!-- end: MONDAY TOO FRIDAY -->

                              <!-- start: SAT , SUNDAY -->
                              <div class="col-sm-4">

                                 <div class="checkbox">

                                    <label style="padding-top: 10px;color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(6, $agenda->days)) checked @endif  @endif value="6"> Sabado</label>
                                    <div class="clearfix"></div>
                                    <label style="color: #3d3d3d !important">
                                       <input name="days" class="grey" type="checkbox" @if(isset($agenda->days)) @if (in_array(0, $agenda->days)) checked @endif  @endif value="0"> Domingo</label>
                                    <div class="clearfix"></div>

                                 </div>

                              </div>
                              <!-- end: SAT , SUNDAY -->

                           </div>
                           <!-- end: PICK DAYS ACTIVE -->

                           <!-- start: SAVE BUTTON -->
                           <div class="form-group">
                              <div class="col-md-12">
                                 <hr class="custom_sepg">
                                 <button class="btn btn-success" type="submit">Salvar Alterações</button>
                              </div>
                           </div>
                           <!-- end: SAVE BUTTON -->

                        </div>
                        <!-- end: DIV -->

                     </form>
                     <!-- end: FORM -->

               </div>
               <!-- end: APPOINTMENT CONFIGURATIONS -->

               <!-- start: HOLIDAY PRESETS -->
               <div class="col-xs-12 col-sm-6 col-md-6" style="background: #EDEDED;padding: 0px 35px;opacity: 0.85">

                  <!-- start: 1st ROW -->
                  <div class="row">

                     <div class="form-horizontal">

                        <h3 style="font-weight: normal">Programação de Férias</h3>

                        <hr class="custom_sep">

                        <!-- start: HOLIDAYS PROGRAMMED -->
                        <div id="holiday_periods">
                           @if(!empty($holidays))
                              @foreach($holidays as $data)
                                 <div class="well well-sm">
                                    <span class='label label-info'>Férias</span> {{ date('M d, Y h:m A' , strtotime($data->start_date)) }} - {{ date('M d, Y h:m A' , strtotime($data->end_date)) }}
                                    <i class="fa fa-times pull-right deleteHolidayPeriod" data-id="{{$data->id}}"></i>
                                 </div>
                              @endforeach
                           @endif
                        </div>
                        <!-- end: HOLIDAYS PROGRAMMED -->

                        <br>

                        <!-- start: HOLIDAY PERIOD SELECTOR -->
                        <form id="addHolidayPeriod" method="POST" action="#">
                           <div class="row">
                              <div class="form-group" style="margin-left:0;margin-right:0;">
                                 <div class="col-sm-6">
                                    <div class="input-group">
                                       <span class="input-group-addon"  style="opacity: 0.6" id="basic-addon1">De</span>
                                       <input class="form-control dtimepicker" id="start_hours" name="start_time" type="text" placeholder="Iníciou">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="input-group">
                                       <span class="input-group-addon" style="opacity: 0.6" id="basic-addon2">Até</span>
                                       <input class="form-control dtimepicker" id="end_hours" name="end_time" type="text" placeholder="Fim">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group" style="margin-left:0;margin-right:0;">
                                 <div class="col-md-12">
                                    <button class="btn btn-primary btn-block" type="submit">Programar férias</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <!-- end: HOLIDAY PERIOD SELECTOR -->

                     </div>
                  </div>
                  <!-- end: 1st ROW -->

               </div>
               <!-- end: HOLIDAY PRESETS -->

            </div>
            <!-- end: PANEL BODY -->

         </div>
         <!-- end: MAIN INFORMATION PANEL -->

      </div>

   </div>

@endsection
