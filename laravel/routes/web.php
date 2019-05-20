<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
    });*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/catalogue','CatalogueController@show')->name('catalogue');
Route::get('/panier','PanierController@index')->name('panier');
Route::get('/panier/{id}','PanierController@buy')->name('panier');
Route::get('/delpanier/{id}','PanierController@deldata')->name('panier');
Route::get('/panier','PanierController@showpanier')->name('panier');
Route::get('/admin','AdminController@show')->name('admin');
Route::post('/admin','AdminController@admin')->name('admin');
Route::get('/produit/{id}','ProduitController@show')->name('produit');
Route::post('/produit','ProduitController@editstock')->name('sotckedit');
Route::post('/bill','BillController@addbill')->name('addtobill');
