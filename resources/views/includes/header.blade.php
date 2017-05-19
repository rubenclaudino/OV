<header class="topbar navbar navbar-default navbar-fixed-top inner">
    <!-- start: TOPBAR CONTAINER -->
    <div class="container">

        <row>
            <div class="col-xs-2 col-sm-4 col-md-4">
                <div class="top_menu_toggle" style="float:left;">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="user_role hidden-xs">
				<span class="label label-info"
                      style="margin-top:9px;margin-left:10px;display:inline-block;opacity: 0.9">
                    {{Auth::user()->roles->first()->display_name}}
				</span>
                </div>
            </div>

            <!-- start: LOGO -->
            <div class="hidden-xs col-sm-3 col-md-4">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{ url('/images/logo.png')}}" alt="Odontovision" style="width:45px;height:25px;"/>
                    </a>
                </div>
            </div>
            <!-- end: LOGO -->

            <div class="col-xs-10 col-sm-5 col-md-4">
                <div class="topbar-tools">
                    <div class="navbar-tools">
                        <ul>
                            <!-- start: REPORT BUG -->
                            <li class="pull-left hidden-xs">
                                <a data-toggle="modal" data-placement="bottom"
                                   title="Relatar Problema" href="#" data-target="#myModalbug" tyle="opacity: 0.85;">
                                    <i class="fa fa-bug"></i>
                                </a>
                            </li>
                            <!-- end: REPORT BUG -->

                            <!-- start: BOOK APPOINTMENT -->
                            <li class="pull-left">
                                <a href="{{ url('/calendar')}}" data-toggle="tooltip" data-placement="bottom"
                                   title="Agendar" style="opacity: 0.85;">
                                    <i class="fa fa-calendar"></i>
                                </a>
                            </li>
                            <!-- end: BOOK APPOINTMENT -->

                            <!-- start: REGISTER NEW PATIENT -->
                            <li class="pull-left">
                                <a href="{{ route('patients.create') }}" data-toggle="tooltip"
                                   data-placement="bottom"
                                   title="Cadastrar Paciente" style="opacity: 0.8">
                                    <i class="fa fa-user-plus"></i>
                                </a>
                            </li>
                            <!-- end: REGISTER NEW PATIENT -->

                            <li class="pull-left menu-search" style="position:relative;">
                                <a data-toggle="tooltip" data-placement="bottom" title="Busca" style="opacity: 0.8">
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
                                          <button class="btn btn-main-color" type="button">
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

                    <ul class="nav navbar-right">

                        <!-- start: USER DROPDOWN OPTIONS -->
                        <li class="dropdown current-user">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle"
                               data-close-others="true"
                               href="#">
                                <img src="
                               @if(Auth::user()->gender == 0)
                                {{ url('/images/user/male.png')}}
                                @else
                                {{ url('/images/user/female.png')}}
                                @endif
                                        " class="img-circle" alt=""> <span
                                        class="username hidden-xs" style="margin-right: 0px">
								&nbsp;{{Auth::user()->fullName()}}
							</span> <i class="fa fa-caret-down "></i>
                            </a>
                            <ul class="dropdown-menu dropdown-dark">
                                <li>
                                    <a href="{{ url('/user/profile') }}">
                                        <i class='fa fa-user fa-fw'></i>
                                        &nbsp;Meu Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/agenda') }}">
                                        <i class='fa fa-calendar fa-fw'></i>
                                        &nbsp;Configurar Agenda
                                    </a>
                                </li>
                                @if(Auth::user()->isAdmin() /* dentist admin */ )
                                    <li class="hide">
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
        </row>
    </div>
    <!-- end: TOPBAR CONTAINER -->

    <!-- start: BUG REPORT MODAL -->
    <div class="modal fade" id="myModalbug" role="dialog">

        <div class="modal-dialog modal-xs">

            <!-- Modal content-->
            <div class="modal-content" style="border-radius: 1px">

                <div class="modal-header" style="background: whitesmoke">
                    <h3 class="modal-title center" style="font-weight: lighter">
                        Relatar Erros ou Fazer Sugestões
                    </h3>
                </div>


                {{ Form::open(array('route' => 'bugs.store', 'class' => 'form')) }}

                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-body">


                    <!-- start: TYPE OF REPORT -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <p style="font-size: 1.3em">Tipo de Relato ?</p>
                            <select class="form-control" id="type" name="type">
                                <option value="0">Problema</option>
                                <option value="1">Sugestão</option>
                            </select>
                        </div>
                    </div>
                    <!-- end: TYPE OF REPORT -->

                    <!-- start: OBSERVATION -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <p style="font-size: 1.3em">Descrição</p>
                            <input cols="2" id="report" class="form-control" name="report" type="text">
                        </div>
                    </div>
                    <!-- end: OBSERVATION -->

                    <br>

                    <div class="center">


                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-submit"
                            style="padding: 5px; width: 70px">Enviar
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                            style="padding: 5px; width: 70px">Cancelar
                    </button>

                </div>

                {{ Form::close() }}
                <!-- end: FORM -->

                </div>

        </div>

    </div>
    <!-- end: BUG REPORT MODAL -->


</header>
