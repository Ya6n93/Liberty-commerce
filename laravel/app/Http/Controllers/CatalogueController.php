<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Model\cart;
use App\Model\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends Controller
{
    public function show()
    {
        if (Auth::user() != null) {
            $user = Auth::user()->id;
            $product = product::all();
            $count = DB::table('cart')->where('users_Id_users', $user)->count();
            return view('layouts.catalogue', ['products' => $product, 'count' => $count]);
        }
        return redirect()->action('HomeController@index');
    }
}