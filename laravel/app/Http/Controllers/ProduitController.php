<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use App\Model\product;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view('layouts.produit');
    }

    public function show(product $id)
    {
        $user = Auth::user()->id;
        $userdroit = Auth::user()->right;
        $count = DB::table('cart')->where('users_Id_users',$user)->count();
        return view('layouts.produit', ['products' => $id, 'count' => $count, 'userdroit' => $userdroit]);
    }

    public function editstock(Request $request)
    {
        $id = $request->input('idproduit');
        $quantity = $request->input('stock');
        DB::update('update product set stock = ? where id = ?', [$quantity, $id]);
        return redirect()->action('ProduitController@show', ['id' => $id]);
    }
}
