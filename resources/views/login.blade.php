

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                <div class="login">

                    @if(session('registration_success'))
                        <div class="alert alert-success">{!! session('registration_success') !!}</div>
                    @endif

                    <h3 class="authTitle">Login</h3>

               
                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">

                            <form action="" class="loginForm" method="post" autocomplete="off"> @csrf

                                <div class="input-group {{ $errors->has('email')? 'has-error':'' }}">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email address">

                                </div>
                                {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                <span class="help-block"></span>

                                <div class="input-group {{ $errors->has('password')? 'has-error':'' }}">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                {!! $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':'' !!}

                                <span class="help-block"></span>
                               
                                <a href="{{ route('teacher') }}"> LOGIN  </a><br>
                                <a href="{{ route('student') }}"> LOG IN  </a>
                            </form>
                        </div>
                    </div>
                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me">Remember Me
                                </label>
                            </div>
                              <div class="col-xs-12 col-sm-4">
                                <p class="forgotPassword">
                                    <a href="{{ route('signup') }}"> Not Registered?  </a>
                                </p>
                            </div>
                            
            </div>
        </div>
    </div>


