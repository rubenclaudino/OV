@extends('layouts.dentist')
@section('content')

   <!-- START:: NEW MODAL FOR NEW PATIENT REGISTRATION WHILE DOING APPOINTMENT -->
      <div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <form id="registerPatient" method="post">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                     &times;
                  </button>
                  <h4 class="modal-title">Create New Paitent</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group">
                             <label for="fname">First Name</label>
                             <input class="form-control" id="fname" name="fname" required="" type="text">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group">
                             <label for="sname">Surname</label>
                             <input class="form-control" id="sname" name="sname" type="text">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group">
                             <label for="email">Email</label>
                             <input class="form-control" id="email" name="email" required="" type="text">
                           </div>
                        </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                     Close
                  </button>
                  <button class="btn btn-primary btn-save-createnew" type="submit">
                     Save changes
                  </button>
               </div>
            </form>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
   <!-- END:: NEW MODAL FOR NEW PATIENT REGISTRATION WHILE DOING APPOINTMENT -->


   <!-- start: PAGE -->
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
      <!-- /.modal -->
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      <div class="container">

         <div class="toolbar row">
				<div class="col-sm-6 hidden-xs">
					<div class="page-header">
						<h1>{{ $title }} <small>{{ $subtitle }}</small></h1>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<a href="#" class="back-subviews">
						<i class="fa fa-chevron-left"></i> BACK
					</a>
					<a href="#" class="close-subviews">
						<i class="fa fa-times"></i> CLOSE
					</a>
					<div class="toolbar-tools pull-right">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- <li>
								<a href="#newFullEvent" class="new-event MyToolbar">
									<i class="fa fa-user-plus"></i>
								</a>
							</li> -->
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
			</div>


         <!-- end: PAGE HEADER -->
         <!-- start: PAGE CONTENT -->
         <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 nopadding">
               <!-- start: FULL CALENDAR PANEL -->
               <div class="panel panel-white" style="margin-top:0px;margin-left:-8px!important">
                  <div class="panel-body">
                     <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                        <div id='full-calendar'></div>
                     </div>
                  </div>
               </div>
               <!-- end: FULL CALENDAR PANEL -->
            </div>
            <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12 nopadding">
               <div class="col-sm-8 col-lg-8 col-md-12 col-xs-12 "  style="margin-top:0px;margin-left:-8px!important">
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label label-info" style="display:block!important;">
                        Booked
                     </span>
                  </div>
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label label-success" style="display:block!important;">
                        Confirmed
                     </span>
                  </div>
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label label-warning" style="display:block!important;">
                        Canceled
                     </span>
                  </div>
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label label-danger" style="display:block!important;">
                        Missed
                     </span>
                  </div>
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label" style="display:block!important;background-color:#20124d">
                        Unavailable
                     </span>
                  </div>
                  <div class="col-sm-2 col-lg-2 col-md-12 col-xs-12 nopadding">
                     <span class="label" style="display:block!important;background-color:#5e5e5e">
                        Completed
                     </span>
                  </div>
               </div>
               <div class="col-sm-4 col-lg-4 col-md-12 col-xs-12">
               </div>
            </div>
         </div>
         <!-- end: PAGE CONTENT-->
      </div>
      <div class="subviews">
         <div class="subviews-container"></div>
      </div>

      <!-- start: SUBVIEW FOR CALENDAR PAGE -->
      <div id="newFullEvent">
      	<div class="panel panel-white" >
      		<div class="panel-body">
      			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      				<form class="form-full-event">
      					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      						<div class="row">
      							<div class="col-md-12">
      								<div class="form-group">
      									<input class="event-id hide" type="text">
      									<span class="input-icon input-icon-right">
      										<input name="eventName" type="text" placeholder="Patient Name..." class="event-name form-control patient_name_dropdown">
      										<i class="fa fa-user"></i>
      									</span>
      								</div>
      								<input type="hidden" name="patient_id" class="getted_patient_id">
      							</div>
      							<div class="col-md-12">
      								<div class="panel panel-white accepted_plan">
      									<div class="panel-body">
      										<div class="row">
      											<div class="col-md-4 hidden">
      												<div class="form-group">
      													<input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
      												</div>
      											</div>
      											<div class="col-md-1">
      												<i class="fa fa-calendar-o" style="font-size:2.2em;"></i>
      											</div>
      											<div class="no-all-day-range">
      												<div class="col-md-11">
      													<div class="form-group">
      														<div class="form-group">
      															<span class="input-icon">
      																<input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
      																<i class="fa fa-clock-o"></i> </span>
      														</div>
      													</div>
      												</div>
      											</div>
      											<div class="all-day-range hidden">
      												<div class="col-md-8">
      													<div class="form-group">
      														<div class="form-group">
      															<span class="input-icon">
      																<input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
      																<i class="fa fa-calendar"></i> </span>
      														</div>
      													</div>
      												</div>
      											</div>
      											<div class="col-md-1">
      												<i class="fa fa-phone" style="font-size:2.2em;"></i>
      											</div>
      											<div class="col-md-11">
      												<div class="form-group">
      													<input name="phone" type="text" class="form-control">
      												</div>
      											</div>
      											<div class="col-md-1">
      												<i class="fa fa-mobile" style="font-size:2.2em;"></i>
      											</div>
      											<div class="col-md-11">
      												<div class="form-group">
      													<input name="mobile" type="text" class="form-control">
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      								<br>
      							</div>
      							<div class="hide">
      								<input type="text" class="event-start-date" name="eventStartDate"/>
      								<input type="text" class="event-end-date" name="eventEndDate"/>
      							</div>
      							<div class="col-md-4" style="line-height:30px;">
      								Appointment Type
      							</div>
      							<div class="col-md-8">
      								<div class="form-group">
      									<select class="form-control selectpicker event-categories" name="appointment_type_id">
      										<?php
      											//foreach($getAppointmentType as $data){?>
      												<!-- <option data-content="<span class='event-category event-cancelled'><?php //echo $data['appointment_type_title'];?></span>" value="<?php //echo $data['id'];?>"><?php //echo //$data['appointment_type_title'];?></option> -->
      											<?php //}
      										?>
      									</select>
      								</div>
      							</div>
      							<div class="col-md-4" style="line-height:30px;">
      								Treatment Type
      							</div>
      							<div class="col-md-8">
      								<div class="form-group">
      									<select class="form-control selectpicker" name="treatment_type_id">
      										<?php
      											//foreach($getTreatmentType as $data){?>
      												<option data-content="<span class='event-category event-cancelled'><?php //echo $data['treatment_type_title'];?></span>" value="<?php //echo $data['treatment_type_id'];?>"><?php //echo $data['treatment_type_title'];?></option>
      											<?php //}
      										?>
      									</select>
      								</div>
      							</div>
      							<div class="col-md-4" style="line-height:30px;">
      								Appointment Status
      							</div>
      							<div class="col-md-8">
      								<div class="form-group">
      									<select class="form-control selectpicker" name="appointment_status">
      										<option data-content="<span class='event-category event-booked'>Booked</span>" value="1">Booked</option>
      										<option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="2">Cancelled</option>
      										<option data-content="<span class='event-category event-missed'>Missed</span>" value="3">Missed</option>
      										<option data-content="<span class='event-category event-completed'>Finished</span>" value="4" selected="selected">Finished</option>
      									</select>
      								</div>
      							</div>
      							<div class="col-md-4" style="line-height:30px;">
      								Dental Plan
      							</div>
      							<div class="col-md-8">
      								<div class="form-group">
      									<select class="form-control selectpicker" name="dental_plan_id">
      										<option value="1" data-content="<span class='event-category event-cancelled'>Private</span>" value="event-private">Private</option>
      										<option value="2" data-content="<span class='event-category event-home'>Dental Insurance</span>" value="event-dental_insurance">Dental Insurance</option>

      									</select>
      								</div>
      							</div>
      							<div class="col-md-12" style="line-height:30px;margin-top:-20px!important;">
      								Appointment Observations
      							</div>
      							<div class="col-md-12">
      								<div class="form-group">
      									<input name="app_obs" type="text" placeholder="Observation..." class=" form-control">
      								</div>
      							</div>
      						</div>
      					</div>
      					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      						<div class="row">
      							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
      								<button class="btn btn-primary btn-block" id="arrived">
      									Arrived
      								</button>
      								<br class="hidden-lg hidden-sm">
      							</div>
      							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
      								<a href="app_details.php" class="btn btn-primary btn-block">
      									Register Event
      								</a>
      								<br class="hidden-lg hidden-sm">
      							</div>
      						</div>
      						<div class="panel panel-white accepted_plan " style="margin-top:15px;margin-bottom:15px!important;">
      							<div class="panel-body">
      								<div class="row">
      									<div class="col-md-12 hidden">
      										<h2>Appointment Resume</h2>
      									</div>
      									<div class="col-md-12">
      										<div class="panel panel-white">
      											<div class="panel-body">
      												<i class="fa fa-envelope-o" style="font-size:1.3em;"></i>
      												&nbsp;&nbsp;Absent Later Issued
      												<span class="pull-right">15/04/2015</span>
      											</div>
      										</div>
      									</div>
      									<div class="col-md-12 ">
      										<div class="panel panel-white" style="margin-top:10px;">
      											<div class="panel-body" style="padding:10px 0px 10px 0px!important;">
      												<div class="col-md-12">
      													<i class="fa fa-money" style="font-size:1.3em;"></i>
      													&nbsp;&nbsp;Payment
      													<span class="pull-right">15/04/2015</span>
      												</div>
      												<div class="col-md-12">
      													<style>
      														.table th, .table td {
      															border-top: none !important;
      														}
      													</style>
      													<table class="table" >
      														<tbody>
      															<tr>
      																<td class="text-bold">
      																	R$80
      																</td>
      																<td>
      																	Cash
      																</td>
      																<td>
      																	Extraction
      																</td>
      															</tr>
      															<tr>
      																<td class="text-bold">
      																	R$70
      																</td>
      																<td>
      																	Debit
      																</td>
      																<td>
      																	Cleaning
      																</td>
      															</tr>
      														</tbody>
      													</table>
      												</div>
      												<div class="col-md-12">
      													<span class="pull-right text-bold">Total R$150</span>
      												</div>
      											</div>
      										</div>
      									</div>
      									<br>
      									<div class="col-md-12 ">
      										<div class="panel panel-white" style="margin-top:10px;">
      											<div class="panel-body" style="padding:10px 0px 10px 0px!important;">
      												<div class="col-md-12">
      													<i class="fa fa-camera" style="font-size:1.3em;"></i>
      													&nbsp;&nbsp;Documented Photos
      													<span class="pull-right">15/04/2015</span>
      												</div>
      												<div class="col-md-12" style="margin-top:10px;">
      													<div class="row">
      														<div class="col-md-4">
      															<img style="width:100px; height:100px" src="images/anonymous.jpg"/>
      														</div>
      														<div class="col-md-4">
      															<img style="width:100px; height:100px" src="images/anonymous.jpg"/>
      														</div>
      														<div class="col-md-4">
      															<img style="width:100px; height:100px" src="images/anonymous.jpg"/>
      														</div>
      													</div>
      												</div>
      											</div>
      										</div>
      									</div>
      								</div>
      							</div>
      						</div>
      						<br>
      						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px!important; margin-top:10px;">
      							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
      								<a href="#" class="btn btn-grey btn-block close-subview-button" style="width:100%;">
      									Close
      								</a>
      							</div>
      							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 nopadding">
      								<button class="btn btn-success btn-block save-new-event" type="submit" style="width:100%;">
      									Save
      								</button>
      							</div>
      						</div>
      					</div>
      				</form>
      			</div>
      		</div>
      	</div>
      </div>
      <div id="readFullEvent">
      	<div class="noteWrap col-md-8 col-md-offset-2">
      		<div class="row">
      			<div class="col-md-12">
      				<h2 class="event-title"></h2>
      				<div class="btn-group options-toggle pull-right">
      					<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
      						<i class="fa fa-cog"></i>
      						<span class="caret"></span>
      					</button>
      					<ul role="menu" class="dropdown-menu dropdown-light pull-right">
      						<li>
      							<a href="#newFullEvent" class="edit-event">
      								<i class="fa fa-pencil"></i> Edit
      							</a>
      						</li>
      						<li>
      							<a href="#" class="delete-event">
      								<i class="fa fa-times"></i> Delete
      							</a>
      						</li>
      					</ul>
      				</div>
      			</div>
      			<div class="col-md-6">
      				<span class="event-category event-cancelled">Cancelled</span>
      				<span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
      			</div>
      			<div class="col-md-12">
      				<div class="event-start">
      					<div class="event-day"></div>
      					<div class="event-date"></div>
      					<div class="event-time"></div>
      				</div>
      				<div class="event-end"></div>
      			</div>
      			<div class="col-md-12">
      				<div class="event-content"></div>
      			</div>
      		</div>
      	</div>
      </div>
      <!-- *** NEW NOTE *** -->
			<div id="newNote">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new note</h3>
					<form class="form-note">
						<div class="form-group">
							<input class="note-title form-control" name="noteTitle" type="text" placeholder="Note Title...">
						</div>
						<div class="form-group">
							<textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
							<textarea class="summernote" placeholder="Write note here..."></textarea>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-note" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** READ NOTE *** -->
			<div id="readNote">
				<div class="barTopSubview">
					<a href="#newNote" class="new-note button-sv"><i class="fa fa-plus"></i> Add new note</a>
				</div>
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="panel panel-note">
						<div class="e-slider owl-carousel owl-theme">
							<div class="item">
								<div class="panel-heading">
									<h3>This is a Note</h3>
								</div>
								<div class="panel-body">
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
									<div class="note-options pull-right">
										<a href="#readNote" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="images/avatar-2-small.jpg" alt="">
									</div>
									<span class="author-note">Nicole Bell</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
							<div class="item">
								<div class="panel-heading">
									<h3>This is the second Note</h3>
								</div>
								<div class="panel-body">
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
									<div class="note-options pull-right">
										<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="images/avatar-3-small.jpg" alt="">
									</div>
									<span class="author-note">Steven Thompson</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
							<div class="item">
								<div class="panel-heading">
									<h3>This is yet another Note</h3>
								</div>
								<div class="panel-body">
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
									<div class="note-options pull-right">
										<a href="#" class="read-note"><i class="fa fa-chevron-circle-right"></i> Read</a><a href="#" class="delete-note"><i class="fa fa-times"></i> Delete</a>
									</div>
								</div>
								<div class="panel-footer">
									<div class="avatar-note"><img src="images/avatar-4-small.jpg" alt="">
									</div>
									<span class="author-note">Ella Patterson</span>
									<time class="timestamp" title="2014-02-18T00:00:00-05:00">
										2014-02-18T00:00:00-05:00
									</time>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- *** SHOW CALENDAR *** -->
			<div id="showCalendar" class="col-md-10 col-md-offset-1">
				<div class="barTopSubview">
					<a href="#newEvent" class="new-event button-sv" data-subviews-options='{"onShow": "editEvent()"}'><i class="fa fa-plus"></i> Add new event</a>
				</div>
				<div id="calendar"></div>
			</div>
			<!-- *** NEW EVENT *** -->
			<div id="newEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add Appointment</h3>
					<form class="form-event">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input class="event-id hide" type="text">
									<input class="event-name form-control" name="eventName" type="text" placeholder="Event Name...">
								</div>
							</div>
							<!--div class="col-md-4">
								<div class="form-group">
									<input type="checkbox" class="all-day" data-label-text="All-Day" data-on-text="True" data-off-text="False">
								</div>
							</div-->
							<div class="no-all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-clock-o"></i> </span>
										</div>
									</div>
								</div>
							</div>
							<!--div class="all-day-range">
								<div class="col-md-8">
									<div class="form-group">
										<div class="form-group">
											<span class="input-icon">
												<input type="text" class="event-range-date form-control" name="ad_eventRangeDate" placeholder="Range date"/>
												<i class="fa fa-calendar"></i> </span>
										</div>
									</div>
								</div>
							</div-->
							<div class="hide">
								<input type="text" class="event-start-date" name="eventStartDate"/>
								<input type="text" class="event-end-date" name="eventEndDate"/>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<select class="form-control selectpicker event-categories">
										<option data-content="<span class='event-category event-cancelled'>Cancelled</span>" value="event-cancelled">Cancelled</option>
										<option data-content="<span class='event-category event-home'>Home</span>" value="event-home">Home</option>
										<option data-content="<span class='event-category event-overtime'>Overtime</span>" value="event-overtime">Overtime</option>
										<option data-content="<span class='event-category event-generic'>Generic</span>" value="event-generic" selected="selected">Generic</option>
										<option data-content="<span class='event-category event-job'>Job</span>" value="event-job">Job</option>
										<option data-content="<span class='event-category event-offsite'>Off-site work</span>" value="event-offsite">Off-site work</option>
										<option data-content="<span class='event-category event-todo'>To Do</span>" value="event-todo">To Do</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="summernote" placeholder="Write note here..."></textarea>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-new-event" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** READ EVENT *** -->
			<div id="readEvent">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<h2 class="event-title">Event Title</h2>
							<div class="btn-group options-toggle pull-right">
								<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
									<span class="caret"></span>
								</button>
								<ul role="menu" class="dropdown-menu dropdown-light pull-right">
									<li>
										<a href="#newEvent" class="edit-event">
											<i class="fa fa-pencil"></i> Edit
										</a>
									</li>
									<li>
										<a href="#" class="delete-event">
											<i class="fa fa-times"></i> Delete
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<span class="event-category event-cancelled">Cancelled</span>
							<span class="event-allday"><i class='fa fa-check'></i> All-Day</span>
						</div>
						<div class="col-md-12">
							<div class="event-start">
								<div class="event-day"></div>
								<div class="event-date"></div>
								<div class="event-time"></div>
							</div>
							<div class="event-end"></div>
						</div>
						<div class="col-md-12">
							<div class="event-content"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- *** NEW CONTRIBUTOR *** -->
			<div id="newContributor">
				<div class="noteWrap col-md-8 col-md-offset-2">
					<h3>Add new contributor</h3>
					<form class="form-contributor">
						<div class="row">
							<div class="col-md-12">
								<div class="errorHandler alert alert-danger no-display">
									<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
								</div>
								<div class="successHandler alert alert-success no-display">
									<i class="fa fa-ok"></i> Your form validation is successful!
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="contributor-id hide" type="text">
									<label class="control-label">
										First Name <span class="symbol required"></span>
									</label>
									<input type="text" placeholder="Insert your First Name" class="form-control contributor-firstname" name="firstname">
								</div>
								<div class="form-group">
									<label class="control-label">
										Last Name <span class="symbol required"></span>
									</label>
									<input type="text" placeholder="Insert your Last Name" class="form-control contributor-lastname" name="lastname">
								</div>
								<div class="form-group">
									<label class="control-label">
										Email Address <span class="symbol required"></span>
									</label>
									<input type="email" placeholder="Text Field" class="form-control contributor-email" name="email">
								</div>
								<div class="form-group">
									<label class="control-label">
										Password <span class="symbol required"></span>
									</label>
									<input type="password" class="form-control contributor-password" name="password">
								</div>
								<div class="form-group">
									<label class="control-label">
										Confirm Password <span class="symbol required"></span>
									</label>
									<input type="password" class="form-control contributor-password-again" name="password_again">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label">
										Gender <span class="symbol required"></span>
									</label>
									<div>
										<label class="radio-inline">
											<input type="radio" class="grey contributor-gender" value="F" name="gender">
											Female
										</label>
										<label class="radio-inline">
											<input type="radio" class="grey contributor-gender" value="M" name="gender">
											Male
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										Permits <span class="symbol required"></span>
									</label>
									<select name="permits" class="form-control contributor-permits" >
										<option value="View and Edit">View and Edit</option>
										<option value="View Only">View Only</option>
									</select>
								</div>
								<div class="form-group">
									<div class="fileupload fileupload-new contributor-avatar" data-provides="fileupload">
										<div class="fileupload-new thumbnail"><img src="images/anonymous.jpg" alt="" width="50" height="50"/>
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail"></div>
										<div class="contributor-avatar-options">
											<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
												<input type="file">
											</span>
											<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
												<i class="fa fa-times"></i> Remove
											</a>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label">
										SEND MESSAGE (Optional)
									</label>
									<textarea class="form-control contributor-message"></textarea>
								</div>
							</div>
						</div>
						<div class="pull-right">
							<div class="btn-group">
								<a href="#" class="btn btn-info close-subview-button">
									Close
								</a>
							</div>
							<div class="btn-group">
								<button class="btn btn-info save-contributor" type="submit">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- *** SHOW CONTRIBUTORS *** -->
			<div id="showContributors">
				<div class="barTopSubview">
					<a href="#newContributor" class="new-contributor button-sv"><i class="fa fa-plus"></i> Add new contributor</a>
				</div>
				<div class="noteWrap col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="contributors">
								<div class="options-contributors hide">
									<div class="btn-group">
										<button class="btn dropdown-toggle btn-transparent-grey" data-toggle="dropdown">
											<i class="fa fa-cog"></i>
											<span class="caret"></span>
										</button>
										<ul role="menu" class="dropdown-menu dropdown-light pull-right">
											<li>
												<a href="#newContributor" class="show-subviews edit-contributor">
													<i class="fa fa-pencil"></i> Edit
												</a>
											</li>
											<li>
												<a href="#" class="delete-contributor">
													<i class="fa fa-times"></i> Delete
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	<!-- start: subscription_model -->
	<!-- end: subscription_model -->

<!-- end: SUBVIEW FOR CALENDAR PAGE -->

<div class="subviews">
   <div class="subviews-container"></div>
</div>

   </div>
   <!-- end: PAGE -->
@endsection
