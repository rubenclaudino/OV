@extends('layouts.page')
@section('title', '')
@section('content')

    <!-- start: MAIN CONTENT -->
    <div class="main-content">

        <!-- start: CONTAINER -->
        <div class="container">

            <!-- start: CLIENT INFORMATION -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 panel panel-white"
                 style="padding: 15px;margin-top: 15px">

                <!-- start: CLIENT INFO -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="row">

                        <!-- start: MAIN INFO TAB -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding"
                             style="border-radius: 3px;background:#fff;">

                            <!-- start: CLIENT MAIN INFO -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">

                                <!-- start: QUICK INFO PANEL -->
                                <div class="panel panel-white">

                                    <!-- start: CLIENT NAME -->
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <h1 class="light_black"
                                            style="margin-top:10px;margin-bottom:5px;font-weight: lighter;opacity: 0.8;text-align:left;float:left;">
                                            {{ $client->first_name }} {{ $client->last_name}}&nbsp;&nbsp;
                                        </h1>
                                    </div>
                                    <!-- end: CLIENT NAME -->

                                    <!-- start: CLIENT OPTIONS BUTTON -->
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
                                        <div class="btn-group pull-right" style="margin-top:10px;">
                                            <button class="btn dropdown-toggle btn-squared" data-toggle="dropdown"
                                                    aria-expanded="false"
                                                    style="border-radius: 1px;background: #dddddd">
                                                Opções &nbsp; <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ URL::route('potentialclients.edit', $client->id) }}"><i
                                                                class="fa fa-pencil fa-fw text-info"
                                                                style="color: #404040"></i>&nbsp;&nbsp;Editar</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-print fa-fw text-info"
                                                                   style="color: #404040"></i>&nbsp; Imprimir</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end: CLIENT OPTIONS BUTTON -->

                                </div>
                                <!-- end: QUICK INFO PANEL -->

                            </div>
                            <!-- end: CLIENT MAIN INFO -->

                        </div>
                        <!-- end: MAIN INFO TAB -->

                    </div>
                    <!-- end: CLIENT INFO RIGHT -->

                    <hr>

                </div>
                <!-- end: CLIENT INFO -->

                <!-- start: LEFT SIDE INFO -->
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Especialidade
                            </td>
                            <td style="font-size:1.1em;opacity: 0.5">
                                @if($client->spec == 0)
                                    <label class="label" style="background: #3d3d3d">Não Informado</label>
                                @elseif($client->spec == 1)
                                    <label class="label" style="background: lightskyblue">Buco-Maxilo Facial</label>
                                @elseif($client->spec == 2)
                                    <label class="label" style="background: lightskyblue">Dentística</label>
                                @elseif($client->spec == 3)
                                    <label class="label" style="background: lightskyblue">Endodontia</label>
                                @elseif($client->spec == 4)
                                    <label class="label" style="background: lightskyblue">Implantodontia</label>
                                @elseif($client->spec == 5)
                                    <label class="label" style="background: lightskyblue">Periodontia</label>
                                @elseif($client->spec == 6)
                                    <label class="label" style="background: lightskyblue">Prótese</label>
                                @elseif($client->spec == 7)
                                    <label class="label" style="background: lightskyblue">Ortodontia</label>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Status</td>
                            <td style="font-size:1.1em;opacity: 0.5">
                                @if($client->status == 0)
                                    <label class="label" style="background: #3d3d3d">Não Informado</label>
                                @elseif($client->status == 1)
                                    <label class="label" style="background: orange">Aguardando Contato</label>
                                @elseif($client->status == 2)
                                    <label class="label" style="background: dodgerblue">Aguardando Lançamento</label>
                                @elseif($client->status == 3)
                                    <label class="label" style="background: purple">Aguardando Visita</label>
                                @elseif($client->status == 4)
                                    <label class="label" style="background: limegreen">Avaliando Proposta</label>
                                @elseif($client->status == 5)
                                    <label class="label" style="background: darkred">Avaliando Opçoes</label>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Tipo da
                                Estabelecimento
                            </td>
                            <td style="font-size:1.1em">@if($client->estab_type == 1)
                                    Clínica @elseif($client->estab_type == 2)Ponto @else N/d @endif</td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Número de
                                Usuários
                            </td>
                            <td style="font-size:1.1em">{{ $client->estab_users }}</td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Data da Ultíma
                                Visita
                            </td>
                            <td style="font-size:1.1em">@if($client->estab_visit_date == 0000-00-00)
                                    N/d @else {{  $client->estab_visit_date }} @endif</td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Referência</td>
                            <td style="font-size:1.1em">{{ $client->created_by }}</td>
                        </tr>
                        <tr>
                            <td style="color: #383838;font-weight:bold;line-height:30px;font-size:1.1em">Relato da
                                visita
                            </td>
                            <td style="font-size:1.1em">@if($client->contact_result){{ $client->contact_result }}@else
                                    - @endif</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end: LEFT SIDE INFO -->

                <!-- start: RIGHT SIDE INFO -->
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                    <style>
                        .table th, .table td {
                            border-top: none !important;
                        }
                    </style>

                    <!-- start: ADDRESS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="panel panel-white accepted_plan">
                            <div class="panel-body" style="">
                                <table class="table table-condensed ">
                                    <tbody>
                                    <tr>
                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Rua / Avendia</td>
                                        <td style="font-size:1.1em">@if( $client->address->street_address ) {{ $client->address->street_address }} @else
                                                - @endif</td>
                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">Número</td>
                                        <td style="font-size:1.1em">@if( $client->address->number ) {{ $client->address->number }} @else
                                                - @endif</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Bairro</td>
                                        <td style="font-size:1.1em">@if( $client->address->borough ) {{ $client->address->borough }} @else
                                                - @endif</td>
                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">CEP</td>
                                        <td style="font-size:1.1em">@if( $client->address->zip ) {{ $client->address->zip }} @else
                                                - @endif</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;font-size:1.1em;width: 25%">Cidade</td>
                                        <td style="font-size:1.1em">@if( $client->address->city ) {{ $client->address->city }} @else
                                                - @endif</td>
                                        <td style="font-weight:bold;font-size:1.1em;width: 15%">Estado</td>
                                        <td style="font-size:1.1em">@if( $client->address->state ) {{ $client->address->state }} @else
                                                - @endif</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: ADDRESS -->

                    <!-- start: CONTACTS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                        <div class="panel panel-white accepted_plan">
                            <div class="panel-body" style="">
                                <table class="table table-condensed ">
                                    <tbody>
                                    <tr>
                                        <td style="font-weight:bold;font-size:1.1em;width: 20%">Telefone Fixo</td>
                                        <td style="font-size:1.1em;width: 20%">@if( $client->contact->phone_landline ) {{ $client->contact->phone_landline }} @else
                                                - @endif</td>
                                        <td class="hidden-xs" style="font-weight:bold;font-size:1.1em;width: 20%">
                                            Telefone
                                        </td>
                                        <td class="hidden-xs"
                                            style="font-size:1.1em;width: 20%">@if( $client->contact->phone_landline ) {{ $client->contact->phone_landline }} @else
                                                - @endif</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:bold;font-size:1.1em;width: 20%">Celular</td>
                                        <td style="font-size:1.1em;width: 20%">@if( $client->contact->celular_1 ) {{ $client->contact->celular_1 }} @else
                                                - @endif</td>
                                        <td style="font-weight:bold;font-size:1.1em;width: 20%">Whatsapp</td>
                                        <td class="hidden-xs"
                                            style="font-size:1.1em;width: 20%">@if( $client->contact->celular_1 ) {{ $client->contact->celular_1 }} @else
                                                - @endif</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: CONTACTS -->

                </div>
                <!-- end: RIGHT SIDE INFO -->

            </div>
            <!-- end: TAB CONTENT -->

        </div>
        <!-- end: CLIENT INFORMATION -->

    </div>
    <!-- end: CONTAINER -->

    </div>
    <!-- end: MAIN CONTENT -->

@endsection
