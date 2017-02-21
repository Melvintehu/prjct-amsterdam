@extends('layouts.app')

@section('content')
    <div class="login-box-body">
        <div class="login-box-msg">Reset Password</div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control" placeholder='Emailadres' name="email" value="{{ $email or old('email') }}" required autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"  style='padding-right: 30px;' ></span>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <div class="col-md-12">
                        <input id="password" type="password" placeholder='Wachtwoord' class="form-control" name="password" required>
                        <span class="glyphicon glyphicon-pencil form-control-feedback"  style='padding-right: 30px;' ></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="col-md-12">
                        <input id="password-confirm" type="password" placeholder='Herhaal wachtwoord' class="form-control" name="password_confirmation" required>
                         <span class="glyphicon glyphicon-pencil form-control-feedback"  style='padding-right: 30px;' ></span>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>
                </div>

            </form>
        </div>
@endsection
