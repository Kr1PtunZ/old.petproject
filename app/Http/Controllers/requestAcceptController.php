<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class requestAcceptController extends Controller
{
    public function index(){
        $cartPosts = DB::table('cart')->join('shop', 'cart.productId','=', 'shop.id')->join('users','users.id','=','cart.userId' )
            ->get();
        return view('requestAccept', compact('cartPosts'));
    }
    public function insert(Request $request){


//        $req = DB::table('requests')->join('cart', 'cart.productId' , '=','productsB' )->join('users','users.id','=','cart.userId' )->insert();
        $idUser = Auth::id();
       $prodB = $cartPosts = DB::table('cart')->where('userId','=', $idUser)->get();
        $currTime = date('Y-m-d');
       foreach ($prodB as $prodB=>$key) {
            $sold = DB::table('requests')->insert(['status' => 'В обработке','idUser' => $idUser, 'summary'=>'1', 'amount'=>'1' , 'productsB'=> $key->productId, 'created_at'=> $currTime]);
       }
     DB::table('cart')->where('userId','=', $idUser)->delete();

       return view('success');
}
}
