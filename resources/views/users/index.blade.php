@extends('layouts.page')
@section('title', 'Usuários')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

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

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-6 col-md-6">

                    <h2 class="table_title">Usuários<br>
                        <small style="color: #dddddd">Lista de usuários</small>
                    </h2>

                </div>

                <div class="col-lg-6 col-md-6" style="margin-top: 30px">

                    <div class="pull-right">

                        <a class="btn" href="#" style="background: whitesmoke">
                            <i class="fa fa-filter"></i> Filtros
                        </a>

                        <a class="btn" href="{{ url('/users/create') }}"
                           style="background: whitesmoke">
                            <i class="fa fa-user"></i> Novo Contato
                        </a>

                        <a class="btn" href="#" class="print" data-id="mainInfo" style="background: whitesmoke">
                            <i class="fa fa-print"></i> Imprimir
                        </a>

                    </div>

                </div>

            </div>
            <!-- end: PANEL HEAD -->

            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- start: TABLE BODY -->
            <div class="panel-body">

            <!-- start: DISPLAYING USERS -->
                <table class="table table-hover table-responsive">

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
                                            <li>
                                                <a href="{{ URL::route('users.show', $user->id) }}">
                                                    <small><i class="fa fa-user fa-fw"></i>&nbsp; Perfil</small>
                                                </a></li>
                                            <li>
                                                <a href="{{ URL::route('users.edit', $user->id) }}">
                                                    <small><i class="fa fa-pencil fa-fw"></i>&nbsp; Editar</small>
                                                </a></li>
                                            <li>
                                                <a href="#">
                                                    <small><i class="fa fa-eye fa-fw"></i>&nbsp; Atividades
                                                    </small>
                                                </a></li>
                                            <li>
                                                <a href="#">
                                                    <small><i class="fa fa-info fa-fw"></i>&nbsp; Log</small>
                                                </a></li>
                                            <li>
                                                <a href="#">
                                                    <small><i class="fa fa-check fa-fw"></i>&nbsp; Permissões
                                                    </small>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a id="delete_user" href="#"
                                                   data-href="{{ url('users', $user->id) }}">
                                                    <small><i class="fa fa-ban fa-fw"></i>&nbsp; Desativar
                                                    </small>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
                <!-- end: DISPLAYING USERS -->

            </div>
            <!-- end: TABLE BODY -->

        </div>
        <!-- end: PANEL -->

    </div>
    <!-- end: DIV -->

@endsection

@section('extra_scripts')
    <script>
        $('a#delete_user').on('click', function () {
            var url = $(this).attr("data-href");
            swal({
                    title: "Excluir usuário?",
                    text: "Confirmar exclusão",
                    type: "warning",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Excluir!"
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
                                swal("Excluído", "Usuário excluído com sucesso!", "success");
                                //location.reload();
                            }
                            else
                                swal("Cancelado", "Exclusão cancelada!", "error");
                        }
                    })
                });
        })
    </script>
@endsection