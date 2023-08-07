<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class requestsViewController extends Controller
{
    public function index(){
        $idUser = Auth::id();
        $reqs = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->where('idUser','=', $idUser)->get();
        $posts = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->join('users', 'users.id', '=', 'requests.idUser')->get();
        $sum = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->sum('price');

        return view('myRequests', compact('reqs'));
    }
}
