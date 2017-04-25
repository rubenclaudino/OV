<header class="topbar navbar navbar-default navbar-fixed-top inner">

    <!-- start: TOPBAR CONTAINER -->
    <div class="container">

        <div class="col-sm-4 col-md-4">

            <div class="top_menu_toggle" style="float:left;">
                <i class="fa fa-bars"></i>
            </div>

            <div class="user_role">

				<span class="label label-info"
                      style="margin-top:9px;margin-left:10px;display:inline-block;opacity: 0.9">
					<?php
                    use App\Role;$user = Auth::user();

                    // get user role
                    $role = DB::table('role_user')->where('user_id', '=', $user->id)->first();
                    $roles = DB::table('roles')->get();

                    if (!empty($role)) {
                        foreach ($roles as $data) {
                            if ($role->role_id == $data->id) {
                                if ($data->id == 2) {
                                    echo "Admin Account";
                                } else if ($data->id == 1) {
                                    echo "Super Admin Account";
                                } else if ($data->id == 8) {
                                    echo "Investidor";
                                } else {
                                    echo "Limited Account";
                                }
                            }
                        }
                    }
                    ?>
				</span>

            </div>

        </div>

        <div class="col-sm-3 col-md-4">

            <div class="navbar-header">

                <!-- start: LOGO -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ url('/') }}/images/logo.png" alt="Odontovision" style="width:45px;height:25px;"/>
                </a>
                <!-- end: LOGO -->

            </div>

        </div>

        <div class="col-sm-5 col-md-4">

            <div class="topbar-tools">

                <?php
                // get user role
                $role = $user->roles->first();
                $roles = Role::all();

                if($role->id != 8){ ?>

                <div class="navbar-tools">

                    <ul class="">

                        <li class="pull-left">
                            <a href="{{ url('/') }}/calendar" data-toggle="tooltip" data-placement="bottom"
                               title="Agendar" style="opacity: 0.85;">
                                <i class="fa fa-calendar"></i>
                            </a>
                        </li>

                        <li class="pull-left">
                            <a href="{{ URL::route('patients.create') }}" data-toggle="tooltip" data-placement="bottom"
                               title="Cadastrar Paciente" style="opacity: 0.8">
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>

                        <li class="menu-search" style="position:relative;">

                            <a style="opacity: 0.8" data-toggle="tooltip" data-placement="bottom" title="Busca"
                               style="opacity: 0.8">
                                <i class="fa fa-search"></i>
                            </a>

                            <!-- start: SEARCH POPOVER -->
                            <div class="popover bottom search-box transition-all"
                                 style="opacity: 0; display: none; transform: scale(0.9);right:-30px;">
                                <div class="arrow"></div>
                                <div class="popover-content">

                                    <!-- start: SEARCH FORM -->
                                    <form class="" id="searchform" action="#">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Nome ou Telefone" type="text"
                                                   style="min-height:34px;">
                                            <span class="input-group-btn">
                                          <button class="btn btn-main-color btn-squared" type="button">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                        </div>
                                    </form>
                                    <!-- end: SEARCH FORM -->

                                </div>
                            </div>
                            <!-- end: SEARCH POPOVER -->

                        </li>


                    </ul>

                </div>

                <?php } ?>

                <ul class="nav navbar-right">

                    <!-- start: USER DROPDOWN OPTIONS -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true"
                           href="#">
                            <img src="{{ url('/images/user/male.png')}}" class="img-circle" alt=""> <span
                                    class="username hidden-xs" style="margin-right: 0px">
								&nbsp;
                                <?php
                                $user = Auth::user();
                                echo $user->name;
                                ?>
							</span> <i class="fa fa-caret-down "></i>
                        </a>
                        <ul class="dropdown-menu dropdown-dark">
                            <li>
                                <a href="{{ url('/user/profile') }}">
                                    <i class='fa fa-user fa-fw'></i>
                                    &nbsp;My Profile
                                </a>
                            </li>

                            @if($user->hasRole('Admin') /* dentist admin */ )
                                <li>
                                    <a href="{{ url('/user/invoices') }}">
                                        <i class='fa fa-money fa-fw'></i>
                                        &nbsp;My Invoices
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                                    <i class='fa fa-power-off fa-fw'></i>&nbsp;
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER DROPDOWN OPTIONS -->

                    <!-- start: CLINIC CHAT MODAL -->
                    <!-- <li class="right-menu-toggle">
                        <a href="#" class="sb-toggle-right">
                            <i class="fa fa-globe toggle-icon"></i> <i class="fa fa-caret-right"></i> <span class="notifications-count badge badge-default hide"> 3</span>
                        </a>
                    </li> -->
                    <!-- end: CLINIC CHAT MODAL -->
                </ul>

            </div>

        </div>

    </div>
    <!-- end: TOPBAR CONTAINER -->
</header>
