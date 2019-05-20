<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TechTool Shop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link rel="icon" type="image/gif" href="http://image.noelshack.com/fichiers/2018/44/5/1541148669-animated-favicon1.gif">

</head>
<body onload="checkCookie()">
<header>
    <h1>
        <a  href="{{ url('catalogue') }}" title="Home"><img id="logo" src="http://fotomelia.com/wp-content/uploads/edd/2015/12/images-clipart-photos-gratuites-libres-de-droits-creative-commons-CCO6-1560x1553.png"/>  TechTool Shop</a>
    </h1>
    <div class="buttonnav">

        @if (Auth::user() != NULL)
            <a href="{{ url('catalogue') }}" title="Home"><img class="menuimg" src="http://image.noelshack.com/fichiers/2018/44/2/1540892375-acceuil.png" width="50px" height="100px"/></a>
            <a href="{{ url('catalogue')}}"  title="Catalog"><img class="menuimg" src="http://image.noelshack.com/fichiers/2018/44/2/1540892375-catalogue.png" width="50px" height="100px"/></a>
            <a href="{{ url('panier') }}" title="Cart"><img class="menuimg" src="http://image.noelshack.com/fichiers/2018/44/2/1540892375-panier.png" width="50px" height="100px"/>  {{$count}}</a>
        @endif
    </div>
    <ul>
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><img class="navigation" src="http://image.noelshack.com/fichiers/2018/44/1/1540842505-login.png" width="100" height="45"/></a>
        @if (Route::has('register'))
        <a href="{{ url('register') }}" title="register"><img class="navigation" src="http://image.noelshack.com/fichiers/2018/44/1/1540842513-register.png" width="100" height="45"/></a>
        @endif
    </ul>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
                </form>
            </div>
        </li>
    @endguest
</header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
<footer>
    <p id="pfoot">
        <a class="afoot" href="https://www.facebook.com/" title="Facebook" target="_blank"><img class="footimg" src="https://images.sftcdn.net/t_optimized,f_auto/p/8a6eafba-96d2-11e6-b334-00163ec9f5fa/77332936.png" width="50px" height="50px"/></a>
        <a class="afoot" href="https://twitter.com/?lang=fr" title="Twitter" target="_blank"><img class="footimg" src="https://i1.wp.com/www.team-ever.com/wp-content/uploads/2015/07/twitter.png?f\it=300%2C300&ssl=1"  width="50px" height="50px"/></a>
        Copyright LATRACH.Y & DJENNAH.M.
    </p>
</footer>
</body>
</html>
