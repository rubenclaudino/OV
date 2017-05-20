@extends('layouts.page')
@section('title', 'Bugs')
@section('content')

    <!-- start: MAIN TABLE PANEL -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 15px">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-header" style="color: #aaaaaa !important;">
                <h2 style="font-weight: lighter">
                    Relato de Bugs e Sugestões <br>
                    <small style="color: #bbbbbb">linha de tempo de todos relatos</small>
                </h2>
                <hr class="custom_sep">
            </div>
        </div>

        @foreach($bugs as $bug)

            <div style="margin-bottom: 15px;padding: 5px">

                <h5 style="padding: 5px;opacity: 0.9">{{ $bug->created_at->format('d/m/Y H:i') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small
                            class="label label-info pull-right" style="color: white;opacity: 0.8">Postado
                        á {{ $bug->created_at->diffForHumans() }}</small>
                </h5>

                <div class="panel"
                     style="border-radius: 0px;padding: 10px;opacity: 0.95;background: whitesmoke;padding-left: 25px;border-left: 4px lightskyblue solid">

                    <table>

                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Tipo de Reláto : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td>
                                <h5 style="color: #3d3d3d;font-size: 1.1em">
                                    @if($bug->type == 0)
                                        Problem / Bug
                                    @else
                                        Suggestão
                                    @endif
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Reláto : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td>
                                <h5 style="color: #3d3d3d;font-size: 1.1em">
                                    {{ $bug->report }}
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Usuário : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td><h5 style="color: #3d3d3d;font-size: 1.1em">{{ $bug->user }} </h5></td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Status : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td>
                                <h5 style="color: #3d3d3d;font-size: 1.1em">
                                    @if($bug->status == null)
                                        <span class="label" style="background: firebrick;opacity: 0.8"> Pendente</span>
                                    @else
                                        <span class="label"
                                              style="background: forestgreen;opacity: 0.8"> Completo</span>
                                    @endif
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Data Completo : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td>
                                <h5 style="color: #3d3d3d;font-size: 1.1em">
                                    @if($bug->date_fix != null)
                                        {{ $bug->date_fix }}
                                    @else
                                        n/d
                                    @endif
                                </h5>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

        @endforeach

    </div>
    <!-- end: MAIN TABLE PANEL -->

@endsection
