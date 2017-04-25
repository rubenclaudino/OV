@extends('layouts.page')
@section('content')
<div class="main-content">
   <div class="container">

      <div class="panel" style="@if(isset($myReminders[0])) display:none; @endif;opacity: 0.7;border-radius: 1px;background-color: White;margin-top: 15px">
         <span style="display: inline"><p style="padding: 25px;font-size: large;color: #737373"><i class="fa fa-warning fa-lg fa-fw" style="color: Gold!important;"></i>&nbsp;&nbsp;&nbsp;You may have payments pending. <a href="{{ url('/billing/subscribe') }}">Pay Here</a></p></span>
      </div>

   </div>
</div>
@endsection
