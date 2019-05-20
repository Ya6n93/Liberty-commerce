<?php

namespace App\Http\Controllers;

use App\Model\bill;
use App\Model\cart;
use App\Model\product;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function index()
    {
        return view('layouts.panier');
    }

    public function buy($buy_prod)
    {
        $panier_user = Auth::user()->id;
        $finder = product::find($buy_prod);
        $buy = new cart();
        $buy->users_id_users = $panier_user;
        $buy->name_product = $finder->title;
        $buy->picture = $finder->link;
        $buy->price = $finder->price;

        $buy->save();

        return redirect()->action('PanierController@showpanier');

    }

    public function showpanier()
    {
        if(Auth::user() != null) {
            $user = Auth::user()->id;
            $buy = DB::select("select * from cart where users_id_users = '$user' ");
            $count = DB::table('cart')->where('users_Id_users', $user)->count();
            $total= DB::table('cart')->where('users_id_users', $user)->sum('price');
            return view('layouts.panier', ['buy' => $buy, 'count' => $count, 'total' => $total]);
        }
        return redirect()->action('HomeController@index');
    }

    public function deldata($del_prod)
    {
        cart::where('id', $del_prod)->delete();
        return redirect()->action('PanierController@showpanier');
    }

    public function adddb()
    {
        $user = Auth::user()->id;
        $total= DB::table('cart')->where('users_id_users', $user)->sum('price');
        $finder = cart::where('users_id_users', $user)->get();
        $bill = new bill();
        $bill->users_id_users = $user;
        $bill->title = serialize($finder);
        $bill->price = $total;
        $bill->save();
        DB::table('cart')->where('users_id_users', $user)->delete();
        return redirect()->action('CatalogueController@show');
    }

}