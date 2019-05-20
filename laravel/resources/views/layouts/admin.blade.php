@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>[A]TechTool Shop</title>
      <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="icon" type="image/gif" href="http://image.noelshack.com/fichiers/2018/44/5/1541148669-animated-favicon1.gif">
  </head>
  <body>
  <form method="POST" action="{{ action('AdminController@admin') }}">
    <h4>Add a product</h4>
    <button id="update" type="button" onclick="refresh()">REFRESH (click 2 times)</button>
    <script>
        function refresh() {
            $("#update").click(function () {
                $("#count").load(" #count");

            });
        }
    </script>
    <div id="all">
      <div id="admindiv">
        {{csrf_field()}}
      <p>Title of product :</p>
      <input id="np" type="text" name="title"  placeholder=" Title"/>
      <p>Category :</p>
      <select name="category">
	<option value="valeur1" id="category">-------------Choose category-------------</option>
	<option value="Desktop">Desktop</option>
	<option value="Laptop">Laptop</option>
	<option value="Printer">Printer</option>
	<option value="Phone">Phone</option>
	<option value="Accessory">Accessory</option>
      </select>
      <p>Price :</p>
      <input type="number" name="price"/> EUR
        <p>Stock</p>
        <input type="number" name="stock"/>
        <p>Picture Link</p>
        <input id="np" type="text" name="link"  placeholder="Link"/>
        <p>Description :</p>
      <textarea name="description" id="Content" rows="10" cols="50"></textarea>
        </br>
	   </br>
      <a><button id="addbut" type="submit"><img src="http://www.clker.com/cliparts/J/N/5/l/n/k/add-button-blue-hi.png" width="150px" height="58.5px"/></button></a>
	   </br>
	  </br>
    </div>
      <div id="count">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/WLM_logo.svg/2000px-WLM_logo.svg.png" width="150px" height="150px">
      <p> Number of registered : {{$countusers}}  </p>
      <img src="https://openclipart.org/image/2400px/svg_to_png/201508/Download-box.png" width="150px" height="150px">
          <p> Total number of purchases : {{$countprod}}  </p>
          <img src="https://sg.fiverrcdn.com/photos/104150405/original/b33df30fa7581f4c23c110e04e7b066b80eb0f9b.png?1510304258" width="200px" height="200px">
          <p> The biggest order :  EUR</p>
      </div>
    </div>

  </form>
  </body>
 </html>
