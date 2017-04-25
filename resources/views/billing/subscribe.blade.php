 @extends('layouts.stripe')
@section('content')
   <?php $user = Auth::user();?>
   @if($user->hasRole('dentistadmin'))
      <div class="main-content">
         <div class="container">
            <div class="panel panel-white" style="margin-top:15px;">
               <div class="panel-body">
                  <h2 style="font-weight: lighter">Subscription Payment Details</h2>

                   <hr style="margin-top: 15px;margin-bottom: 20px;border: 0;border-top: 1px solid lightskyblue">

                  {!! Form::open(['url' => route('billing.store'), 'data-parsley-validate', 'id' => 'payment-form']) !!}
                      @if ($message = Session::get('success'))

                      <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                              <strong>{{ $message }}</strong>
                      </div>
                      @endif
                      <div class="form-group" id="product-group">
                          {!! Form::label('plan', 'Select Plan') !!}
                          {!! Form::select('plan', ['Monthly' => 'Monthly ($9.99)', 'Yearly' => 'Yearly ($99.99)'], 'Book', [
                              'class'                         => 'form-control',
                              'required'                      => 'required',
                              'data-parsley-class-handler'    => '#product-group'
                              ]) !!}
                      </div>
                      <div class="form-group" id="cc-group">
                          {!! Form::label(null, 'Card Number') !!}
                          {!! Form::text(null, null, [
                              'class'                         => 'form-control',
                              'required'                      => 'required',
                              'data-stripe'                   => 'number',
                              'data-parsley-type'             => 'number',
                              'maxlength'                     => '16',
                              'placeholder'                   => '0000 0000 0000 0000',
                              'data-parsley-trigger'          => 'change focusout',
                              'data-parsley-class-handler'    => '#cc-group'
                              ]) !!}
                      </div>
                      <div class="form-group" id="ccv-group">
                          {!! Form::label(null, 'CVC (3 or 4 digits):') !!}
                          {!! Form::text(null, null, [
                              'class'                         => 'form-control',
                              'required'                      => 'required',
                              'data-stripe'                   => 'cvc',
                              'data-parsley-type'             => 'number',
                              'placeholder'                   => '000 or 0000',
                              'data-parsley-trigger'          => 'change focusout',
                              'maxlength'                     => '4',
                              'data-parsley-class-handler'    => '#ccv-group'
                              ])!!}
                      </div>
                      <div class="row" >
                        <div class="col-md-2">
                          <div class="form-group" id="exp-m-group">
                              {!! Form::label(null, 'Month Exp.') !!}
                              {!! Form::selectMonth(null, null, [
                                  'class'                 => 'form-control',
                                  'required'              => 'required',
                                  'data-stripe'           => 'exp-month'
                              ], '%m') !!}
                          </div>
                          <div class="form-group" id="exp-y-group">
                              {!! Form::label(null, 'Year Exp.') !!}
                              {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                                  'class'             => 'form-control',
                                  'required'          => 'required',
                                  'data-stripe'       => 'exp-year'
                                  ]) !!}
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                            {!! Form::submit('Make Payment', ['class' => 'btn btn-squared btn-lg btn-block btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;border-radius:1px']) !!}
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                              <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                          </div>
                        </div>
                    {!! Form::close() !!}

               </div>
            </div>

         </div>
      </div>
   @else
   <div class="main-content">
      <div class="container">
         <div class="panel panel-white" style="margin-top:15px;">
            <div class="panel-body">
               Please Contact Site admin to make payments.
            </div>
         </div>
      </div>
   </div>
   @endif;

@endsection
