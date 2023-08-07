<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    class cartTransitController extends Controller
{
    public function test (Request $request){

           $userId = auth::id();
           $cart = DB::table('cart')->insert(['userId'=>$userId, 'productId'=> $request->card_id, 'amount' => 1]);
           $amount = DB::table('cart')->where('amount','>=', '1')->where('productId','=', $request->card_id)->get();
               return redirect(route('shop'));
           }
}
