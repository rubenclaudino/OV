@extends('layouts.page')
@section('content')
<div class="main-content">
   <div class="container">

      <!-- start: MAIN INFO PANEL -->
      <div class="row" style="margin-top:10px;margin-right: -3px">

         <!-- start: TABLE HEADER -->
         <div class="panel-heading table_tab_color">

            <div class="toolbar row" style="background: transparent;border-bottom: none" >

               <div class="col-sm-6 hidden-xs">
                  <div class="table-header">
                     <h2 style="font-weight: lighter">{{ $title }}</h2>
                  </div>
               </div>

               <div class="col-sm-6 col-xs-12">
                  <div class="toolbar-tools pull-right">
                     <!-- start: TOP NAVIGATION MENU -->
                     <ul class="nav navbar-right">
                        <li>
                           <a href="#" data-toggle="modal" data-target="#addReminderModal" class="new-event MyToolbar">
                              <i class="fa fa-envelope-o" style="color: #707070"></i> Criar Lembrete
                           </a>
                        </li>
                     </ul>
                     <!-- end: TOP NAVIGATION MENU -->
                  </div>
               </div>

            </div>

         </div>
         <!-- end: TABLE HEADER -->

         <div class="col-md-12 reminders" style="background: white;">

            <!-- start: RECEIVED REMINDERS -->
            <h3>Recebidos</h3>
            <hr class="custom_sep">
            <div class="list-group">
               @if(isset($myReminders[0]))
                  @foreach($myReminders as $data)
                     <div class="list-group-item panel">
                        <div style="background: #dddddd;margin: 0px;padding: 15px 15px 1px 15px">
                        <h4 class="list-group-item-heading text-uppercase" style="color: #404040">{{ $data->reminder->title }}
                           <span style="float: right">
                           <button class="btn btn-xs btn-success markDoneReminderUser" style="padding-right: 10px;opacity: 0.8" data-id="{{ $data->id }}"><i class="fa fa-check fa-fw"></i>&nbsp;Marcar Feito</button>
                           </span>
                        </h4>
                        </div>
                        <h5 style="color: #4d4d4d;padding: 15px">
                           <i class="fa fa-calendar fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i> <strong>{{ date('M, d Y h:i A', strtotime($data->reminder->reminder_date)) }}</strong>

                           <i class="fa fa-calendar fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i> Created: <strong>{{ date('M, d Y h:i A', strtotime($data->reminder->created_at)) }}</strong>
                           <i class="fa fa-user fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>
                           <span class="label label-info">{{ $data->reminderUser->name }}</span>
                        </h5>
                        <p class="list-group-item-text" style="color: #4d4d4d;padding: 0px 15px 15px 15px">
                           <i class="fa fa-bell fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>
                           {{ $data->reminder->content }}
                        </p>
                     </div>
                  @endforeach
               @endif
               <!-- start: NO REMINDERS RECEIVED PANEL -->
               <div class="panel" style="@if(isset($myReminders[0])) display:none; @endif;opacity: 0.5;border-radius: 1px;background-color: #07ACC2">
                  <span style="display: inline"><p style="padding: 15px;font-size: large;color: white"><i class="fa fa-info-circle fa-lg" style="color: white!important;"></i>&nbsp;&nbsp;Não existem lembretes recebidos no momento</p></span>
               </div>
                  <!-- end: NO REMINDERS RECEIVED PANEL -->
            </div>
            <!-- end: RECEIVED REMINDERS -->

            <!-- start: SENT REMINDERS -->
            <h3 style="margin: 5px">Enviados</h3>
            <hr class="custom_sep">
            <div class="list-group remindersGroup">
               @if(isset($reminders[0]))
                  @foreach($reminders as $data)
                     <div class="list-group-item panel" style="border-radius: 1px;">
                        <div style="background: #dddddd;margin: 0px;padding: 15px 15px 1px 15px">
                        <h4 class="list-group-item-heading text-uppercase" style="color: #404040">{{ $data->title }}
                           <span style="float: right">
                          <!-- <button class="btn btn-xs btn-success markDoneReminder" style="padding-right: 10px;opacity: 0.8" data-id="{{ $data->id }}"><i class="fa fa-check fa-fw"></i>&nbsp;Marcar Feito</button> -->
                           <button class="btn btn-xs btn-danger deleteReminder" style="padding-right: 10px;opacity: 0.8" data-id="{{ $data->id }}"><i class="fa fa-trash fa-fw"></i>&nbsp;Excluír</button>
                        </span>
                        </h4>
                        </div>
                        <h5 style="color: #4d4d4d;padding: 15px">
                           <i class="fa fa-calendar fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i> <strong>{{ date('M, d Y h:i A', strtotime($data->reminder_date)) }}</strong>
                              <i class="fa fa-calendar fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i> Created: <strong>{{ date('M, d Y h:i A', strtotime($data->created_at)) }}</strong>
                           <i class="fa fa-user fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>
                           @foreach($data->reminderUser as $d)
                              <label class="label label-primary" style="opacity: 0.8">{{ $d->user->name }}</label>
                           @endforeach
                        </h5>
                        <p class="list-group-item-text" style="color: #4d4d4d;padding: 0px 15px 15px 15px">
                           <i class="fa fa-bell fa-fw" style="margin: 5px;color: black;opacity: 0.45"></i>
                           {{ $data->content }}
                        </p>
                     </div>
                  @endforeach
               @else
                  <!-- start: NO REMINDERS SENT PANEL -->
                     <div class="panel" style="@if(isset($reminders[0])) display:none; @endif;opacity: 0.5;border-radius: 1px;background-color: #07ACC2">
                        <span style="display: inline"><p style="padding: 15px;font-size: large;color: white"><i class="fa fa-info-circle fa-lg" style="color: white!important;"></i>&nbsp;&nbsp;Não existem lembretes enviados no momento</p></span>
                     </div>
                     <!-- end: NO REMINDERS SENT PANEL -->
            @endif

         </div>
            <!-- end: SENT REMINDERS -->

         </div>

      <!-- start: NEW REMINDER -->
      <div id="addReminderModal" class="modal fade" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               {{ Form::open(array('route' => 'reminders.store', 'class' => 'form', 'id' => 'addReminder')) }}
                  <div class="modal-header" style="background-color: #ededed">
                     <h3 class="modal-title" style="color: #737373;">Criar Lembrete</h3>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Para</label>
                        {!! Form::select('to_user_id', $users,'',['class' => 'form-control selectpicker', 'multiple' => 'true']) !!}
                     </div>
                     <div class="form-group">
                        <label>Assunto</label>
                        <input type="text" name="title" placeholder="Assunto do Lembrete" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Lembrete</label>
                        <textarea name="content" placeholder="Lembrete" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                        <label>Data do Lembrete</label>
                        <input type="text" name="reminder_date" placeholder="Data do Lembrete Aparecer" class="form-control dtimepicker">
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Enviar Lembrete</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end: MAIN INFO PANEL -->

      <!-- START:: EDIT MODAL -->
      <div id="editReminderModal" class="modal fade" tabindex="-1" role="dialog">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Update Reminder</h4>
               </div>
               <form class="" action="" method="post">
                  <div class="modal-body">
                     <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="Title" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Information</label>
                        <textarea name="content" placeholder="Content" class="form-control"></textarea>
                     </div>
                     <div class="form-group">
                        <label>Reminder Date/Time</label>
                        <input id="" type="text" name="reminder_date" placeholder="Reminder Date" class="form-control dtimepicker">
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-warning" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" class="btn btn-primary">Update Reminder</button>
                  </div>
               </form>
            </div><!-- /.modal-content -->
         </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- END:: EDIT MODAL -->

   </div>
</div>
@endsection
