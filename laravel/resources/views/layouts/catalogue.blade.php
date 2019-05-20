@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>TechTool Shop</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalogue.css') }}" />
<link rel="icon" type="image/gif" href="http://image.noelshack.com/fichiers/2018/44/5/1541148669-animated-favicon1.gif">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<form method="POST" action="{{ action('CatalogueController@show') }}">
<h3>Catalog</h3>
</br>
    @foreach($products as $prod)
<div id="block">
	<div class="rectangle">
		<p class="pdiv">{{$prod->title}}</p>
		</br>
		<p><img class="imgcata" src="{{$prod->link}}"/></P>
		</br>
        <a id="aproduit" href="/produit/{{$prod->id}}">Technical Sheet</a>
		</br>
		</br>
		<a id="apanier" href="/panier/" onclick="prodsetstorage( {{$prod->id}}, '{{$prod->title}}', '{{$prod->link}}', {{$prod->price}}, {{Auth::user()->id}} )">Buy It !</a>
	</div>
</div>
	@endforeach
</form>
</body>
</html>