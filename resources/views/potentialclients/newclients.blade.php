@extends('layouts.page')
@section('title', 'Timeline de Potenciais Clientes')
@section('content')

    <!-- start: MAIN TABLE PANEL -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel" style="background: white;margin-top: 15px">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-header" style="color: #aaaaaa !important;">
                <h2 style="font-weight: lighter">
                    Timeline de Potenciais Clientes <br>
                    <small style="color: #CCCCCC">Vejá em ordem de mais recente os clientes cadastrados.</small>
                </h2>
                <hr class="custom_sep">
            </div>
        </div>

        @foreach($clients as $client)

            <div style="margin-bottom: 15px;padding: 5px">

                <h5 style="padding: 5px;opacity: 0.8">{{ $client->created_at->format('d/m/Y H:i') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small
                            class="label label-info pull-right" style="color: white;opacity: 0.8">Postado
                        á {{ $client->created_at->diffForHumans() }}</small>
                </h5>

                <div class="panel"
                     style="border-radius: 0px;padding: 10px;opacity: 0.95;background: whitesmoke;padding-left: 25px;border-left: 4px lightskyblue solid">

                    <table>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Nome :
                                    &nbsp;&nbsp;&nbsp;</h5></td>
                            <td>
                                <h5 style="color: #3d3d3d;font-size: 1.1em">{{ $client->first_name }} {{ $client->last_name }}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Nome do Estabeleciamento :
                                    &nbsp;&nbsp;&nbsp;</h5></td>
                            <td><h5 style="color: #3d3d3d;font-size: 1.1em">{{ $client->estab_name }}</h5></td>
                        </tr>
                        <tr>
                            <td><h5 style="color: #3d3d3d;font-weight: bold;font-size: 1.1em">Quem Cadastrou : &nbsp;&nbsp;&nbsp;</h5>
                            </td>
                            <td><h5 style="color: #3d3d3d;font-size: 1.1em">{{ $client->created_by }} </h5></td>
                        </tr>
                    </table>

                </div>

            </div>

        @endforeach

    </div>
    <!-- end: MAIN TABLE PANEL -->

@endsection
