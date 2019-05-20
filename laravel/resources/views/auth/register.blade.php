@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <h2>Create an Account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset>
            <p>
                <label for="Nom et prenom">Lastname & Firstname:</label>
                <input id="np" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder=" ex: john lenon"value="{{ old('name') }}" required autofocus />
            </p>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                </br>
            <p>
                <label for="Mail">Your adress mail :</label>
                <input id="mail"type="mail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder=" exemple@exemple.com" value="{{ old('email') }}" required />
            </p>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </br>
            <div>
                <label for="password">Password:</label>
                <input id="pswd" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="8" placeholder=" 8 characters min" required />
            </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </br>
            <div>
                </br>
                <label for="password">Retype the password:</label>
                <input id="pswdr" type="password" class="form-control" name="password_confirmation" name="password" minlength="8" placeholder=" 8 characters min" required />
            </div>
                        </br>
            <div>
                </br>
                <a><button id="regbut"><img id="regimg" src="http://hosa-soccer.org/_uploads/56f946a0626dcd5b72de0713/register-button-blue-hi.png"></button></a>
            </div>
            </br>
            <a id="aregbut"  href="{{ url('login') }}"  target="_blank">Or Login?</a>
        </fieldset>
    </form>
@endsection
