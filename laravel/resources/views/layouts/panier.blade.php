@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>TechTool Shop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/panier.css') }}" />
    <link rel="icon" type="image/gif" href="http://image.noelshack.com/fichiers/2018/44/5/1541148669-animated-favicon1.gif">
      <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body onload="prodgetstorage({{Auth::user()->id}})">
    <h2>Cart</h2>
    <button id="buybut" onclick="delcart({{Auth::user()->id}})">buy</button>
    </form>
  </body>
 </html>
