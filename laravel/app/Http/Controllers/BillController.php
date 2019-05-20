<?php

namespace App\Http\Controllers;
use App\Model\bill;
use App\Model\cart;
use App\Model\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
   public function addbill(Request $request)
   {
       $panier_user = Auth::user();


       $buyed = new bill();
       $buyed->bill = $request->commande;
       $buyed->users_Id_users = $panier_user->id;
       $buyed->save();

       return response()->json(['success'=>'Data added']);
   }
}
