<a class="closedbar inner hidden-sm hidden-xs" href="#"></a>

<?php $user = Auth::user();?>

<!-- start: NAVBAR OPTIONS -->
<nav id="pageslide-left" class="pageslide inner">

    <!-- start: NAVBAR CONTENT -->
    <div class="navbar-content">

        <!-- start: SIDEBAR -->
        <div class="main-navigation left-wrapper transition-left">

            <!-- start: USER INTERACTIONS -->
            <div class="user-profile border-top padding-horizontal-10 block">

                <div class="padding-vertical-20">
                    <div class="">
                        <div class="profile_block">
                            <div class="profile_image">
                                <img src="{{ url('/') }}/images/user/female.png" alt="" style="opacity: 0.85">
                            </div>
                            <div class="profile_information">
                                <!-- start: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h5 class="no-margin">

                                </h5>

                                <!-- end: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h4>
                                    @if(Auth::user()->cro != "")
                                    {{ Auth::user()->fullName() }}
                                        @else
                                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                    @endif
                                </h4>

                                <a class="btn user-options sb_toggle hide" data-toggle="tooltip" data-placement="bottom"
                                   title="Dados da Clinica">
                                    <i style="font-size:1.0em!important" class="fa fa-cog"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end: USER INTERACTIONS -->

            <!-- start: MAIN NAVIGATION MENU -->
            <ul class="main-navigation-menu">

                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'dashboard') {
                        echo 'active open';
                    }
                }?>">

                    <a href="{{ url('/home')}}"><i class="fa fa-home fa-fw"></i> <span class="title"> Resumo </span> </a>

                <!-- start: AGENDA -->
                <li>
                    <a href="{{ url('/calendar') }}">
                        <i class="fa fa-calendar fa-fw"></i>
                        <span class="title">Agenda</span></a>
                </li>
                <!-- end: AGENDA -->

                <!-- start: TYPES OF APPOITMENTS -->
                @role('admin')
                <li>
                    <a href="{{ url('/calendar/appointmentTypes') }}">
                        <i class="fa fa-user fa-fw"></i>
                        <span class="title">Tipos de Agendamentos</span></a>
                </li>
                @endrole
                <!-- end: TYPES OF APPOITMENTS -->

                <!-- start: CLINICS -->
                @role('admin')
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'clinic') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('clinic.index') }}"><i class="fa fa-h-square fa-fw"></i> <span
                                class="title"> Clientes </span></a>
                </li>
                @endrole
            <!-- end: CLINICS -->

                <!-- start: USER MANAGEMENT -->
                @role('admin')
                <li>
                    <a href="{{ route('users.index') }}"><i class="fa fa-user fa-fw"></i> <span
                                class="title"> Gerenciamento </span></a>
                </li>
                @endrole
            <!-- end: USER MANAGEMENT -->

                <!-- start: PATIENTS -->
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'patients') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('patients.index') }}"><i class="fa fa-users fa-fw"></i> <span
                                class="title"> Pacientes </span></a>
                </li>
            <!-- end: PATIENTS -->

                <!-- start: TREATMENTS -->
                @role('admin')
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'treatmenttypes') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-folder-open fa-fw"></i> <span
                                class="title"> Procedimentos </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/')}}/treatmenttypes">
                                <span class="title"> Procedimentos </span>
                            </a>
                        </li>
                        <?php if($user->isAdmin() || $user->hasPermission('treatmenttypescontroller.create')){ ?>
                        <li>
                            <a href="{{ url('/')}}/treatmenttypes/create">
                                <span class="title"> Registrar Procedimento </span>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if($user->isAdmin() ){ ?>
                        <li>
                            <a href="{{ url('/')}}/specialities">
                                <span class="title"> Especialidades </span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                @endrole
            <!-- end: TREATMENTS -->

                <!-- start: DENTAL PLANS -->
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'dentalplans') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('dentalplans.index') }}"><i class="fa fa-folder-open fa-fw"></i> <span
                                class="title"> Convênios </span></a>
                </li>
            <!-- end: DENTAL PLANS -->

                <!-- start: REMINDERS -->
                @role('admin')
                <li class="hide <?php if (isset($activeClass)) {
                    if ($activeClass == 'reminders') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ url('/')}}/reminders"><i class="fa fa-bell fa-fw"></i> <span class="title"> Lembretes </span>
                        <span class="badge badge-info reminderCount">{{ Auth::user()->reminderCount }}</span></a>
                <!-- <ul class="sub-menu">
						<li>
							<a href="{{ url('/')}}/reminders">
								<span class="title">Reminders</span>
							</a>
						</li>
					</ul> -->
                </li>
                @endrole
            <!-- end: REMINDERS -->

                <!-- start: PAYMENTS -->
                @role('admin')
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'payments') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('payments.index') }}"><i class="fa fa-money fa-fw"></i> <span
                                class="title"> Financeiro </span></a>
                </li>
                @endrole
            <!-- end: PAYMENTS -->

                <!-- start: PERMISSION SETTINGS -->
                @role('admin')
                <li class="hide <?php if (isset($activeClass)) {
                    if ($activeClass == 'permissions') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-folder-open fa-fw"></i> <span
                                class="title"> Permissões </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/') }}/permissions">
                                <span class="title"> Função de Permissões </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}/permissions/create">
                                <span class="title"> Registrar Permissão </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}/permissions/assignPermissions">
                                <span class="title"> Atribuir Permissions </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
            <!-- end: PERMISSION SETTINGS -->

                <!-- start: STOCK CONTROL -->
                @role('admin')
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'stockcontrol') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('stockcontrol.index') }}"><i class="fa fa-cog fa-fw"></i> <span
                                class="title"> Controle de Estoque </span></a>
                </li>
                @endrole
            <!-- end: STOCK CONTROL -->

                <!-- start: STOCK CONTROL -->
                @role('admin')
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'consultation') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('consultation.index') }}"><i class="fa fa-briefcase fa-fw"></i> <span
                                class="title"> Consultoria </span></a>
                </li>
                @endrole
                <!-- end: STOCK CONTROL -->

                <!-- start: CONTACTS -->
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'contacts') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('contacts.index') }}"><i class="fa fa-phone fa-fw"></i> <span
                                class="title"> Contatos </span></a>
                </li>
                <!-- end: CONTACTS -->

                <!-- start: SELECT LISTS AVIALBLE -->
                @role('admin')
                <li class="hide <?php if (isset($activeClass)) {
                    if ($activeClass == 'settings') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-bars fa-fw"></i> <span class="title"> Listas </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/diseases') }}">
                                <span class="title">Diseases</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
            <!-- end: SELECT LISTS AVIALBLE -->

                <!-- start: INVESTORS -->
                @role('admin')
                <li class="hide <?php if (isset($activeClass)) {
                    if ($activeClass == 'potentialclients') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-address-book-o fa-fw"></i><span
                                class="title"> Investidores </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <?php if($user->isAdmin() || $user->hasPermission('investorscontroller.show')){ ?>
                            <a href="{{ url('investors/show') }}">
                                <span class="title">Meu Perfíl</span>
                            </a>
                            <?php } ?>
                            <?php if($user->isAdmin() || $user->hasPermission('potentialclientscontroller.index')){ ?>
                            <a href="{{ url('/potentialclients') }}">
                                <span class="title">Lista de Clientes</span>
                            </a>
                            <?php } ?>
                            <?php if($user->isAdmin() || $user->hasPermission('devupdatescontroller.index')){ ?>
                            <a href="{{ url('/devupdates') }}">
                                <span class="title">Desenvolvimento</span>
                            </a>
                            <?php } ?>
                            <?php if($user->isAdmin() || $user->hasPermission('potentialclientscontroller.newclients')){ ?>
                            <a href="{{ url('/newclients') }}">
                                <span class="title">Novos Clientes</span>
                            </a>
                            <?php } ?>
                            <?php if($user->isAdmin() || $user->hasPermission('devupdatescontroller.create')){ ?>
                            <a href="{{ url('devupdates/create') }}">
                                <span class="title">Registrar Atualização</span>
                            </a>
                            <?php } ?>
                        </li>
                    </ul>
                </li>
                @endrole
            <!-- end: INVESTORS -->

                <!-- start: FINANCE -->
                @role('admin')
                <li style="display:none;" class="hide <?php if (isset($activeClass)) {
                    if ($activeClass == 'finances') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-money fa-fw"></i> <span class="title"> Financeiro </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="admin_finance_stats.php">
                                <span class="title"> Estatísticas </span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_finance_in.php">
                                <span class="title"> Entradas </span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_finance_out.php">
                                <span class="title"> Saídas </span>
                            </a>
                        </li>
                        <li>
                            <a href="dentist_payment_search.php">
                                <span class="title"> Pendentes </span>
                            </a>
                        </li>
                        <li>
                            <a href="orto_simulator.php">
                                <span class="title"> Ortocal </span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endrole
            <!-- end: FINANCE -->

                <!-- <li>
                    <a href="javascript:void(0)"><i class="fa fa-bell"></i> <span class="title"> Reminders </span><i class="icon-arrow"></i> </a>

                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-money"></i> <span class="title"> Supplies </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="title"> Order List</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="admin_statistics.php"><i class="fa fa-line-chart"></i> <span class="title"> Statistics </span><i class="icon-arrow"></i> </a>

                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-building"></i> <span class="title"> Consultations </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="dentist_consultation_search.php">
                                <span class="title"> Search</span>
                            </a>
                        </li>
                        <li>
                            <a href="dentist_ask_a_pro_edit.php">
                                <span class="title"> Request</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> <span class="title"> Labs </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="admin_labs_search.php">
                                <span class="title"> Search</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="title"> Orders </span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->

        </div>
        <!-- end: SIDEBAR -->

    </div>
    <!-- end: NAVBAR CONTENT -->

    <!-- start: USER CHAT INTERACTIONS -->
    <div class="slide-tools">

        <!-- start: USER CHAT STATUS -->
        <div class="col-xs-6 text-left no-padding">
            <a class="btn btn-sm status" href="#">
                Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
            </a>
        </div>
        <!-- end: USER CHAT STATUS -->

        <!-- start: LOGOUT -->
        <div class="col-xs-6 text-right no-padding">
            <a class="btn btn-sm log-out text-right" href="{{ url('/logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i> Sair
            </a>
        </div>
        <!-- end: LOGOUT -->

    </div>
    <!-- end: USER CHAT INTERACTIONS -->

</nav>
<!-- end: NAVBAR OPTIONS -->