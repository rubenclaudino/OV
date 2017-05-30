<a class="closedbar inner hidden-sm hidden-xs" href="#"></a>
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
                                <img src="
                                @if(Auth::user()->gender == 0)
                                {{ url('/images/user/male.png')}}
                                @else
                                {{ url('/images/user/female.png')}}
                                @endif
                                        " alt="" style="opacity: 0.85">
                            </div>
                            <div class="profile_information">
                                <!-- start: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h5 class="no-margin">
                                </h5>
                                <!-- end: DEPENDING HOUR SEND GOOD MORNING - GOOD AFTERNOON - GOOD NIGHT -->
                                <h4>
                                    {{ Auth::user()->full_name }}
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

                <li class="@if(\Route::current()->getName() == 'home.index') {{'active'}}@endif">
                    <a href="{{ url('/home')}}"><i class="fa fa-home fa-fw"></i> <span class="title"> Resumo </span></a>
                </li>
                <!-- start: AGENDA -->
                <li class="@if(\Route::current()->getName() == 'calendar.index') {{'active'}}@endif">
                    <a href="{{ url('/calendar') }}">
                        <i class="fa fa-calendar fa-fw"></i>
                        <span class="title">Agenda</span></a>
                </li>
                <!-- end: AGENDA -->

            @role('admin')
            <!-- start: TYPES OF APPOITMENTS -->
                <li class="@if(\Route::current()->getName() == 'calendar.appointment_types') {{'active'}}@endif">
                    <a href="{{ url('/calendar/appointmentTypes') }}">
                        <i class="fa fa-bookmark-o fa-fw"></i>
                        <span class="title">Tipos de Agendamentos</span></a>
                </li>
                <!-- end: TYPES OF APPOITMENTS -->

                <!-- start: CLINICS -->
                <li class="@if(\Route::current()->getName() == 'clinic.index') {{'active'}}@endif">
                    <a href="{{ route('clinic.index') }}"><i class="fa fa-id-badge fa-fw"></i> <span
                                class="title"> Clientes </span></a>
                </li>
                <!-- end: CLINICS -->
            @endrole

            @role('local_admin' | 'admin')
            <!-- start: USER MANAGEMENT -->
                <li class="@if(\Route::current()->getName() == 'users.index') {{'active'}}@endif">
                    <a href="{{ route('users.index') }}"><i class="fa fa-user fa-fw"></i> <span
                                class="title"> Gerenciamento </span></a>
                </li>
                <!-- end: USER MANAGEMENT -->
            @endrole

            <!-- start: PATIENTS -->
                <li class="@if(\Route::current()->getName() == 'patients.index') {{'active'}}@endif">
                    <a href="{{ route('patients.index') }}"><i class="fa fa-users fa-fw"></i> <span
                                class="title"> Pacientes </span></a>
                </li>
                <!-- end: PATIENTS -->

                <!-- start: PROCEDURES -->
                @role('admin')
                <li class="@if(\Route::current()->getName() == 'procedures.index') {{'active'}}@endif">
                    <a href="{{ route('procedures.index') }}"><i class="fa fa-briefcase fa-fw"></i> <span
                                class="title"> Procedimentos </span></a>
                </li>
                @endrole
            <!-- end: PROCEDURES -->

                <!-- start: SPECIALTIES -->
                @role('admin')
                <li class="@if(\Route::current()->getName() == 'specialties') {{'active'}}@endif">
                    <a href="{{ route('specialties.index') }}"><i class="fa fa-tag fa-fw"></i> <span
                                class="title"> Especialidades </span></a>
                </li>
                @endrole
            <!-- end: SPECIALTIES -->

                <!-- start: DENTAL PLANS -->
                <li class="@if(\Route::current()->getName() == 'dentalplans.index') {{'active'}}@endif">
                    <a href="{{ route('dentalplans.index') }}"><i class="fa fa-folder-open fa-fw"></i> <span
                                class="title"> Convênios </span></a>
                </li>
                <!-- end: DENTAL PLANS -->

                <!-- start: REMINDERS -->
                @role('admin')
                <li class="@if(\Route::current()->getName() == 'reminders.index') {{'active'}}@endif">
                    <a href="{{ url('/reminders')}}"><i class="fa fa-bell fa-fw"></i> <span
                                class="title"> Lembretes </span>
                        <span class="badge badge-info reminderCount">{{ Auth::user()->reminderCount }}</span></a>
                </li>
                <!-- end: REMINDERS -->

                <!-- start: PERMISSION SETTINGS -->
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-folder-open fa-fw"></i> <span
                                class="title"> Permissões </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="@if(\Route::current()->getName() == 'permissions.index') {{'active'}}@endif">
                            <a href="{{ url('/permissions') }}">
                                <span class="title"> Função de Permissões </span>
                            </a>
                        </li>
                        <li class="@if(\Route::current()->getName() == 'permissions.create') {{'active'}}@endif">
                            <a href="{{ url('/permissions/create') }}">
                                <span class="title"> Registrar Permissão </span>
                            </a>
                        </li>
                        <li class="@if(\Route::current()->getName() == 'permissions.assign_permissions') {{'active'}}@endif">
                            <a href="{{ url('/permissions/assignPermissions') }}">
                                <span class="title"> Atribuir Permissions </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
            <!-- end: PERMISSION SETTINGS -->

                <!-- start: STOCK CONTROL -->
                @role('admin')
                <li class="@if(\Route::current()->getName() == 'stockcontrol.index') {{'active'}}@endif">
                    <a href="{{ route('stockcontrol.index') }}"><i class="fa fa-cog fa-fw"></i> <span
                                class="title"> Controle de Estoque </span></a>
                </li>
                <!-- end: STOCK CONTROL -->

                <!-- start: CONSULTATION -->
                <li class="@if(\Route::current()->getName() == 'consultation.index') {{'active'}}@endif">
                    <a href="{{ route('consultation.index') }}"><i class="fa fa-briefcase fa-fw"></i> <span
                                class="title"> Consultoria </span></a>
                </li>
                @endrole
            <!-- end: CONSULTATION -->

                <!-- start: CONTACTS -->
                <li class="@if(\Route::current()->getName() == 'contacts.index') {{'active'}}@endif">
                    <a href="{{ route('contacts.index') }}"><i class="fa fa-phone fa-fw"></i> <span
                                class="title"> Contatos </span></a>
                </li>
                <!-- end: CONTACTS -->

                <!-- start: SELECT LISTS AVIALBLE -->
                @role('admin')
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-bars fa-fw"></i> <span class="title"> Listas </span><i
                                class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="@if(\Route::current()->getName() == 'diseases.index') {{'active'}}@endif">
                            <a href="{{ url('/diseases') }}">
                                <span class="title">Diseases</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
            <!-- end: SELECT LISTS AVIALBLE -->

                <!-- start: INVESTORS -->
                @role('admin' | 'investor')
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-address-book-o fa-fw"></i><span
                                class="title"> Investidores </span><i class="icon-arrow"></i> </a>
                    <ul class="sub-menu">
                        <li class="">
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('investorscontroller.show')){ ?>
                            <a href="{{ url('investors/show') }}">
                                <span class="title">Meu Perfíl</span>
                            </a>
                            <?php } ?>
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('potentialclientscontroller.index')){ ?>
                            <a href="{{ url('/potentialclients') }}">
                                <span class="title">Lista de Clientes</span>
                            </a>
                            <?php } ?>
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('devupdatescontroller.index')){ ?>
                            <a href="{{ url('/devupdates') }}">
                                <span class="title">Desenvolvimento</span>
                            </a>
                            <?php } ?>
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('potentialclientscontroller.newclients')){ ?>
                            <a href="{{ url('/newclients') }}">
                                <span class="title">Novos Clientes</span>
                            </a>
                            <?php } ?>
                            <?php if(Auth::user()->isAdmin() || Auth::user()->hasPermission('devupdatescontroller.create')){ ?>
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
                <li class="@if(\Route::current()->getName() == 'contacts.index') {{'active'}}@endif">
                    <a href="{{ route('payments.index') }}"><i class="fa fa-money fa-fw"></i> <span
                                class="title"> Financeiro </span></a>
                </li>
                @endrole
            <!-- end: FINANCE -->

                <!-- start: FEEDBACK -->
                @role('admin')
                <li class="@if(\Route::current()->getName() == 'bugs.index') {{'active'}}@endif">
                    <a href="{{ route('bugs.index') }}"><i class="fa fa-bug fa-fw"></i> <span
                                class="title"> User Feedback </span></a>
                </li>
            @endrole
            <!-- end: FEEDBACK -->

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