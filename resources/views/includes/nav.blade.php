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
                                <img src="{{ url('/') }}/images/user/male.png" alt="" style="opacity: 0.85">
                            </div>
                            <div class="profile_information">
                                <!-- start: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h5 class="no-margin">
                                    <?php

                                    /* This sets the $time variable to the current hour in the 24 hour clock format */
                                    $time = date("H");
                                    /* If the time is less than 1200 hours, show good morning */
                                    if ($time < "5") {
                                        echo "Bom dia";
                                    } else
                                        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
                                        if ($time >= "16" && $time < "21") {
                                            echo "Boa tarde";
                                        } else
                                            /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                                            if ($time >= "21" && $time < "23") {
                                                echo "Boa Noite";
                                            } else
                                                /* Finally, show good night if the time is greater than or equal to 1900 hours */
                                                if ($time >= "19") {
                                                    echo "Boa Noite";
                                                }
                                    ?>
                                </h5>
                                <!-- end: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h4>
                                  @if(Auth::user()->cro != null)  @if(Auth::user()->gender == 0) Dr. @else Dra. @endif @endif {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </h4>
                                <a class="btn user-options sb_toggle" data-toggle="tooltip" data-placement="bottom"
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
                }?>" style="margin-top:1px;">


                    <a href="{{ url('/home')}}"><i class="fa fa-home"></i> <span class="title"> Resumo </span>

                        <!-- start: AGENDA -->
                <?php if($user->hasPermission('calendarcontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'appointments') {
                        echo 'active open';
                    }
                }?>">

                    <a href="javascript:void(0)"><i class="fa fa-calendar"></i><span class="title"> Agenda </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">

                        <?php if($user->hasPermission('calendarcontroller.index')){ ?>
                        <li class="">
                            <a href="{{ url('/calendar') }}">
                                <span class="title">Agendar</span>
                            </a>
                        </li>
                    <!-- <li class="">
							<a href="{{ url('/holidays') }}">
								<span class="title"> Holiday Slots</span>
							</a>
						</li> -->
                        <?php } ?>
                        <li class="">
                            <a href="{{ url('/agenda') }}">
                                <span class="title">Configurar Agenda</span>
                            </a>
                        </li>

                        <?php if($user->isAdmin() || $user->hasPermission('appointmenttypesrcontroller.index')){ ?>
                        <li>
                            <a href="{{ url('/calendar/appointmentTypes') }}">
                                <span class="title">Tipo Agendamentos</span>
                            </a>
                        </li>
                        <?php } ?>

                    </ul>
                </li>
                <?php } ?>
            <!-- end: AGENDA -->

                <!-- start: CLINICS -->
                <?php  if($user->isAdmin()){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'clinic') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-h-square"></i><span class="title"> Clientes </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{ url('/clinic') }}">
                                <span class="title">Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/clinic/create') }}">
                                <span class="title"> Registrar Client </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: CLINICS -->

                <!-- start: MANAGEMENT -->
                <?php if($user->hasRole('admin')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'users_management') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ url('/users/manage') }}"><i class="fa fa-users"></i><span
                                class="title"> Gerenciamento </span></a>
                </li>
                <?php } ?>
            <!-- end: MANAGEMENT -->

                <!-- start: USERS -->
                <?php if($user->isAdmin()){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'users') {
                        echo 'active open';
                    }
                }?>" style="display:none;">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i><span class="title"> Usuários </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{ url('/users') }}">
                                <span class="title"> Usuários </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/users/create') }}">
                                <span class="title"> Registrar Usuário </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: USERS -->

                <!-- start: DENTISTS -->
                <?php if($user->isAdmin() || $user->hasPermission('dentistscontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'dentists') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-user-md"></i><span class="title"> Dentistas </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{ url('/dentists') }}">
                                <span class="title"> Dentistas </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/dentists/create') }}">
                                <span class="title"> Registerar Dentista </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: DENTISTS -->

                <!-- start: PATIENTS -->
                <?php if($user->isAdmin() || $user->hasPermission('patientscontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'patients') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-users"></i><span class="title"> Pacientes </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <?php if($user->hasRole('admin')){ ?>
                        <li class="">
                            <a href="{{ url('/patients/stats') }}">
                                <span class="title"> Estatísticas </span>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="">
                            <a href="{{ url('/patients') }}">
                                <span class="title"> Lista de Pacientes </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/patients/create') }}">
                                <span class="title"> Cadastrar Paciente </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: PATIENTS -->

                <!-- start: RECEPTIONISTS -->
                <?php if($user->hasPermission('recepnistscontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'recepnists') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i><span class="title"> Recepcionistas </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="{{ url('/recepnists') }}">
                                <span class="title"> Recepcionistas </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/recepnists/create') }}">
                                <span class="title"> Registrar Recepcionista</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: RECEPTIONISTS -->

                <!-- start: TREATMENTS -->
                <?php if($user->isAdmin() || $user->hasPermission('treatmenttypescontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'treatmenttypes') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-folder-open"></i> <span
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
                <?php } ?>
            <!-- end: TREATMENTS -->

                <!-- start: DENTAL PLANS -->
                <?php if($user->isAdmin() || $user->hasPermission('dentalplanscontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'dentalplans') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-folder-open"></i> <span
                                class="title"> Convênios </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/')}}/dentalplans">
                                <span class="title"> Convênios </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/')}}/dentalplans/create">
                                <span class="title"> Registrar Convênio </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: DENTAL PLANS -->

                <!-- start: REMINDERS -->
                <?php if($user->isAdmin() || $user->hasPermission('remindercontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'reminders') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ url('/')}}/reminders"><i class="fa fa-bell"></i> <span class="title"> Lembretes </span>
                        <span class="badge badge-info reminderCount">{{ Auth::user()->reminderCount }}</span></a>
                <!-- <ul class="sub-menu">
						<li>
							<a href="{{ url('/')}}/reminders">
								<span class="title">Reminders</span>
							</a>
						</li>
					</ul> -->
                </li>
                <?php } ?>
            <!-- end: REMINDERS -->

                <!-- start: PAYMENTS -->
                <?php if($user->isAdmin() || $user->hasPermission('paymentcontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'payments') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-money"></i> <span class="title"> Financeiro </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/')}}/payments">
                                <span class="title"> Balanço </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/')}}/payments/in">
                                <span class="title"> Entradas </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/')}}/payments/in">
                                <span class="title"> Saídas </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: PAYMENTS -->

                <!-- start: PERMISSION SETTINGS -->
                <?php  if($user->isAdmin()){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'permissions') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-folder-open"></i> <span
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
                <?php } ?>
            <!-- end: PERMISSION SETTINGS -->

                <!-- start: STOCK CONTROL -->
                <?php if($user->isAdmin() || $user->hasPermission('stockcontrolcontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'stockcontrol') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-cog"></i> <span
                                class="title"> Controle de Estoque </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/stockcontrol') }}">
                                <span class="title"> Lista de Itens </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('stockcontrol.create') }}">
                                <span class="title"> Registrar Item </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/quoteitems') }}">
                                <span class="title"> Gerar Orçamento </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'contacts') {
                        echo 'active open';
                    }
                }?>">
                    <a href="{{ route('contacts.index') }}"><i class="fa fa-cog"></i> <span
                                class="title"> Contatos </span></a>
                </li>
                <?php } ?>
            <!-- end: STOCK CONTROL -->

                <!-- start: SELECT LISTS AVIALBLE -->
                <?php if($user->isAdmin()){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'settings') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-bars"></i> <span class="title"> Listas </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/diseases') }}">
                                <span class="title">Diseases</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php } ?>
            <!-- end: SELECT LISTS AVIALBLE -->

                <!-- start: INVESTORS -->
                <?php if($user->isAdmin() || $user->hasPermission('potentialclientscontroller.index')){ ?>
                <li class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'potentialclients') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-address-book-o"></i><span
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
                <?php } ?>
            <!-- end: INVESTORS -->

                <!-- start: FINANCE -->
                <?php if($user->isAdmin() || $user->hasPermission('paymentcontroller.index')){ ?>
                <li style="display:none;" class="<?php if (isset($activeClass)) {
                    if ($activeClass == 'finances') {
                        echo 'active open';
                    }
                }?>">
                    <a href="javascript:void(0)"><i class="fa fa-money"></i> <span class="title"> Financeiro </span><i
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
            <?php } ?>
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