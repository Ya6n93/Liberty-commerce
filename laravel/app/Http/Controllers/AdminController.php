<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function admin(Request $request)
    {
        $product = new product();

        $product->title = $request->get('title');
        $product->category = $request->get('category');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->link = $request->get('link');
        $product->description = $request->get('description');

        $product->save();

        return redirect()->action('AdminController@show');

    }

    public function show()
    {
        if(Auth::user() != NULL) {
            $userdroit = Auth::user()->right;
            if ($userdroit == 1)
                {
                $product = product::all();
                    $user = Auth::user()->id;
                    $count = DB::table('cart')->where('users_Id_users',$user)->count();
                    $countuser = DB::table('users')->count();
                    $countprod = DB::table('bill')->count();

                    return view('layouts.admin', ['products' => $product, 'count' => $count, 'countusers' => $countuser, 'countprod' => $countprod ]);
                }
            else
                {
                return redirect()->action('CatalogueController@show');
                }
        }
        else
            {
            return redirect()->action('HomeController@index');
            }
    }

}