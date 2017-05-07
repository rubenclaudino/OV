@extends('layouts.page', ['title' => 'Usuários', 'activeClass' => "users"])
@section('content')

    <div class="main-content">

        <div class="container">

            <!-- start: MAIN PANEL INFORMATION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 10px">

                <style>
                    .image_cont {
                        width: 30px;
                        height: 30px;
                        overflow: hidden;
                    }

                    .image_cont img {
                        border-radius: 100px;
                        width: 100%;
                        height: auto;
                    }
                </style>

                <!-- start: TABLE HEADER -->
                <div class="panel-heading header_t1" style="background: whitesmoke;padding: 0px !important;">

                    <div class="toolbar row" style="min-height: 100px;background: whitesmoke;border: none;opacity:0.8;">

                        <div class="col-sm-6 hidden-xs">
                            <div class="table-header">
                                <h2 style="font-weight: lighter">Usuários</h2>
                                <p style="font-size: large;">Todos os usuários</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="toolbar-tools pull-right" style="padding-top: 10px;">
                                <!-- start: TOP NAVIGATION MENU -->
                                <ul class="nav navbar-right" style="opacity: 1">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-filter"></i> Filtros
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="print" data-id="mainInfo">
                                            <i class="fa fa-print"></i> Imprimir
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/users/create') }}">
                                            <i class="fa fa-user"></i> Registrar
                                        </a>
                                    </li>
                                </ul>
                                <!-- end: TOP NAVIGATION MENU -->
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end: TABLE HEADER -->

                <!-- start: TABLE BODY -->
                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <!-- DISPLAYING USERS -->
                    <table class="table datatable">

                        <thead style="background: whitesmoke">
                        <tr>
                            <th class="center">#</th>
                            <th>Clínica</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Tipo Usuário</th>
                            <th>Data Cadastrado</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(!empty($users))
                            @foreach($users as $user)
                                <tr>
                                    <td class="hidden-print">
                                        <div class="image_cont" style="opacity: 0.8;">
                                            @if($user->profile_url != '')
                                                {{ Html::image(url($user->profile_url), '', ['width' => 60, 'height' => 60]) }}
                                            @else
                                                {{ Html::image(url('/images/anonymous.jpg'), '', ['width' => 60, 'height' => 60]) }}
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $user->clinic->name }}</td>
                                    <td>{{ $user->first_name . ' ' . $user->last_name}}</td>
                                    <td><span style="color: #0a91ff">{{ $user->email }}</span></td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            <span class="label label-default"
                                                  style="background: {{$role->color}} !important;opacity: 0.8"> {{$role->display_name}} </span>
                                        @endforeach
                                    </td>
                                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                                    <td class="hidden-print">
                                        <div class="btn-group">
                                            <button type="button"
                                                    class="btn btn-primary btn-sm dropdown-toggle"
                                                    style="opacity: 0.9" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Opções &nbsp;<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" style="opacity:0.9;">
                                                <li><a href="{{ URL::route('users.show', $user->id) }}">
                                                        <small><i class="fa fa-user fa-fw"></i>&nbsp; Perfil</small>
                                                    </a></li>
                                                <li><a href="#">
                                                        <small><i class="fa fa-eye fa-fw"></i>&nbsp; Atividades</small>
                                                    </a></li>
                                                <li><a href="#">
                                                        <small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small>
                                                    </a></li>
                                                <li><a href="#">
                                                        <small><i class="fa fa-check fa-fw"></i>&nbsp; Permissões
                                                        </small>
                                                    </a></li>
                                                <li><a href="#" class="hidden">
                                                        <small><i class="fa fa-unlock-alt fa-fw"></i>&nbsp; Make Admin
                                                        </small>
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a id="delete_user" href="#"
                                                       data-href="{{ url('users', $user->id) }}">
                                                        <small><i class="fa fa-ban fa-fw"></i>&nbsp; Desativar</small>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <!-- DISPLAYING USERS -->

                </div>
                <!-- end: TABLE BODY -->

            </div>
            <!-- end: MAIN PANEL INFORMATION -->

        </div>

    </div>

@endsection

@section('extra_scripts')
    <script>
        $('a#delete_user').on('click', function () {
            var url = $(this).attr("data-href");
            swal({
                    title: "Delete user?",
                    text: "Submit to delete",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete!"
                },
                function () {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            _method: 'DELETE',
                            _token: csrf_token
                        },
                        success: function (data) {
                            if (data) {
                                swal("Deleted!", "User has been deleted", "success");
                                location.reload();
                            }
                            else
                                swal("cancelled", "User has not been deleted", "error");
                        }
                    })
                });
        })
    </script>
@endsection