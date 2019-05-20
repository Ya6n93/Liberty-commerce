@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <h3>Get your account back!</h3>
    <form>
        <fieldset>
            <p>
                <label for="Mail">Your adress mail :</label>
                <input type="mail" name="Mail" id="Mail" placeholder=" exemple@exemple.com"/>
            </p>
        </br>
            <p>You will receive an email with a provisional password.</p>
            <div>
                </br>
                <a id="areset"><img id="resbut" src="http://www.clker.com/cliparts/r/w/3/2/9/N/reset-button-blue-hi.png"></a>
            </div>
        </fieldset>
    </form>
@endsection
