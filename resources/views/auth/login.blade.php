@extends('layouts.auth')
@section('content')

        <!-- start: MAIN BODY -->
<body class="login"
      style="background: linear-gradient(to bottom, #3d3d3d 0%,#3d3d3d 40%,#3d3d3d 100%)no-repeat bottom center fixed">

<div class="row">

    <div class="main-login" style="width: 21%;text-align: center;margin: auto;margin-top: 0px;min-width: 270px">

        <!-- start: LOGIN BOX -->
        <div class="box-login card-panel z-depth-4" style="border-radius: 1px; display: block;">

            <div style="background: white;margin: -20px;padding: 0px">

                <!-- start: LOGO -->
                <div class="logo">
                    <img src="{{ url('/')}}/images/logoxb.png" alt="Odontovision"
                         style="width:100px;margin-top: 10px;opacity: 0.6">
                    <h5 class="z-depth-1"
                        style="letter-spacing: 3px;color: dodgerblue;margin: 0px;margin-top: 10px;font-size: 10px">
                        ODONTOVISION</h5>
                </div>
                <!-- end: LOGO -->

            </div>

            <!-- start: BELOW -->
            <div style="padding: 0px;margin-top:35px">
                <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
										<span class="input-icon">
											<input id="email" style="padding-left: 35px;" type="email"
                                                   class="mdl-textfield__input" name="email" value="{{ old('email') }}"
                                                   placeholder="Email" required autofocus>
										   <i class="fa fa-user" style="margin-top: 3px"></i>
										</span>
                            @if ($errors->has('email'))
                                <span class="help-block">
												  <strong>{{ $errors->first('email') }}</strong>
											 </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
										<span class="input-icon">
											<input class="mdl-textfield__input" style="padding-left: 35px;"
                                                   name="password" placeholder="Senha" type="password">
											<i class="fa fa-lock" style="margin-top: 3px"></i>
										</span>
                            @if ($errors->has('password'))
                                <span class="help-block">
												  <strong>{{ $errors->first('password') }}</strong>
											 </span>
                            @endif
                        </div>

                        <div class="form-group" style="margin-top:0;text-align: left">
                            <input name="remember" type="checkbox" id="remember" checked>
                            <label for="remember">
                                Ficar conectado
                            </label>
                        </div>

                        <!-- start: LOGIN BUTTON -->
                        <button type="submit" name="submit" id="login"
                                style="width: 100%;margin-top: 5px;margin-bottom: 5px;color: white"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Entrar
                        </button>
                        <!-- end: LOGIN BUTTON -->

                    </fieldset>
                </form>

                <!-- start: FORGOT PASSWORD -->
                <div>
                    <a href="#" class="forgot pull-right " style="margin-bottom: 0px;margin-top: 10px;color: grey">
                        Esqueci minha senha
                    </a>
                </div>
                <!-- end: FORGOT PASSWORD -->
            </div>
            <!-- end: BELOW -->

        </div>
        <!-- end: LOGIN BOX -->

        <!-- start: FORGOT BOX -->
        <div class="box-forgot">

            <h3>Forget Password?</h3>

            <p>
                Enter your e-mail address below to reset your password.
            </p>

            <form class="form-forgot">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<i class="fa fa-envelope"></i> </span>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-light-grey go-back">
                            <i class="fa fa-chevron-circle-left"></i> Log-In
                        </a>
                        <button type="submit" class="btn btn-green pull-right">
                            Submit <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>

            <!-- start: COPYRIGHT -->
            <div class="copyright">
                <?php echo date('Y');?> &copy; &copy; Odontovision
            </div>
            <!-- end: COPYRIGHT -->

        </div>
        <!-- end: FORGOT BOX -->

    </div>

</div>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>
<!-- end:MAIN BODY -->

@endsection
