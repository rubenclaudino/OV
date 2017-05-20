@extends('layouts.page')
@section('title', 'User Invoices')
@section('content')

    <!-- TOOLBAR -->
    <div class="toolbar row">
        <div class="col-sm-6 hidden-xs">
            <div class="page-header">
                <h1>User Invoices
                    <small>Download All User Invoices</small>
                </h1>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="toolbar-tools pull-right">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                <!-- <li>
   						<a href="{{ url('/users/create')}}" class="new-event MyToolbar">
   							<i class="fa fa-user"></i> Add New
   						</a>
   					</li> -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- TOOLBAR -->

    <div class="panel panel-white" style="margin-top:8px;">
        <div class="panel-body">
            <!-- DISPLAYING Invoices -->
            @if(!empty($invoices))
                <table class="table">
                    @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                            <td>{{ $invoice->total() }}</td>
                            <td><a href="/user/invoice/{{ $invoice->id }}">Download</a></td>
                        </tr>
                    @endforeach
                </table>
        @endif
        <!-- DISPLAYING invoices -->

        </div>
    </div>

@endsection
