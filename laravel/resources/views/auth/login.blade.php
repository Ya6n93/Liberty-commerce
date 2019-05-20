@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <h2>Login !</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <fieldset>
            <div>
             <label for="Mail">Your adress mail :</label>
             <input id="mail"type="mail" name="email" placeholder=" exemple@exemple.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            </br>
            <div>
             <label for="password">Password:</label>
             <input id="pswd" type="password" id="password" name="password" minlength="8" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            </br>
            <div>
                <a><button id="logbut" type="submit"><img id="logimg" src="https://loinhacviet.info/images/button-clipart-login-4.png"></button></a>
                </br>
                </br>
                <a href="{{ url('register') }}"  target="_blank">Create your account</a>
                <a href="{{ route('password.request') }}"  target="_blank">Forgot your password ?</a>
            </div>
        </fieldset>
    </form>
@endsection
