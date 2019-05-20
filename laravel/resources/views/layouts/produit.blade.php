@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>TechTool Shop</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/produit.css') }}" />
    <link rel="icon" type="image/gif" href="http://image.noelshack.com/fichiers/2018/44/5/1541148669-animated-favicon1.gif">
  </head>
  <body>
  <h5>Product!</h5>
      <div id="blockprod">
      <p class="pdiv">{{$products->title}}</p>
      </br>
          <p><img id="imgprod" src="{{$products->link}}"/></P>
      </br>
          <p id="pdes">----------------------------------------Description---------------------------------------</p>
      <div id="blockcarac">
	  <p class="carac"> Category :{{$products->category}}</p>
	  <p class="carac"> Price :{{$products->price}}.EUR</p>
          @if($userdroit == 1)
              <form action="{{action('ProduitController@editstock')}}" method="post">
              {{ csrf_field() }}
               <p class="carac"> In stock :{{$products->stock}}<input type="hidden" name="idproduit" value="{{$products->id}}"/><input type="number" name="stock"/><button>Edit</button></p>
              </form>
              @else
              <p class="carac"> In stock :{{$products->stock}}</p>
          @endif
      <p class="carac">{{$products->description}}</p>
      <p class="carac"> (1 year parts and labor warranty.)</p>
      </div>
          </br>
      <a href="/panier/{{$products->id}}"><button class="buy">Add in the cart</button></a>
       </br>
       </br>
    </div>
  </body>
 </html>
