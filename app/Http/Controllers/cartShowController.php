<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cartShowController extends Controller
{
    public function cartShow(){
        $id = Auth::id();
//        $users = DB::table('cart')
//            ->where('userid', '=', $id)
//            ->get();

       $cartPosts = DB::table('cart')->join('shop', 'cart.productId','=', 'shop.id')->join('users','users.id','=','cart.userId' )
        ->get();
        $i=1;
        return view('cart', compact('cartPosts','i'));

    }
}
