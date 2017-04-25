@extends('layouts.page')
@section('content')
	<div class="main-content">
		<div class="container">

			<?php
			foreach($role as $data){
			if($data->id != '1'){
			?>

                <!-- start: MAIN INFORMATION PANEL -->
			<div class="panel panel-white" style="margin-top:15px;">

                <!-- start: TABLE HEADER -->
                <div class="panel-heading table_tab_color">
                    <h2 class="table_title">
                        <?php
                        if($data->name == 'DentistAdmin')
                        {
                            echo 'Dentist Admin';
                        }
                        else if($data->name == 'Dentist')
                        {
                            echo 'Dentist Limited';
                        }
                        else if($data->name == 'Receptionist')
                        {
                            echo 'Receptionist Admin';
                        }
                        else if($data->name == 'Receptionist')
                        {
                            echo 'Receptionist Limited';
                        }
                        else if($data->name == 'Professor')
                        {
                            echo 'Professor Limited';
                        }
                        else if($data->name == 'Professor')
                        {
                            echo 'Professor Admin';
                        }
                        else if($data->name == 'User')
                        {
                            echo 'Free User';
                        }
                        ?>
                    </h2>
                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: TABLE BODY -->
				<div class="panel-body">
					<!-- start: TABLE OF USER TYPES -->
					<table class="table datatable table-striped">
						<thead>
						<tr>
							<th class="hide">  </th>
							<th>Descrição</th>
							<th>Modelo</th>
							<th>Slug</th>
							<th class="col-md-2">Acesso</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($permissions as $d){?>
						<tr>
							<td class="hide">#</td>
							<td><strong>{{ $d->description }}</strong></td>
							<td>{{ $d->model }}</td>
							<td>{{ $d->slug }}</td>
							<td>
								<?php
								$find = DB::table('permission_role')
										->where('role_id','=',$data->id)
										->where('permission_id','=',$d->id)
										->first();
								?>
								<label><input type="checkbox" class="clickPermissions" name="" data-permissionid="{{ $d->id }}" data-roleid="{{ $data->id }}" <?php if(!empty($find)){?> data-id="{{ $find->id }}" <?php } ?> <?php if(!empty($find)){echo "checked";}?>></label>
							</td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
					<!-- end: TABLE OF USER TYPES -->

				</div>
                <!-- end: TABLE BODY -->

			</div>
                <!-- end: MAIN INFORMATION PANEL -->

			<?php }} ?>

		</div>
	</div>
@endsection
