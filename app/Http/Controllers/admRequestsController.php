<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use http\Env\Request;
use http\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;

class admRequestsController extends Controller
{
    public function index()
    {
        $requests = Requests::all();

//        foreach ($requests as $request=>$key) {
//            $prodId = $key -> productsB;
//            $prodName = DB::table('shop')->select('nameProduct')->where('id','=', $prodId)->get();
//
//        }
        $posts = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->join('users', 'users.id', '=', 'requests.idUser')->get();
        $sum = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->join('users', 'users.id', '=', 'requests.idUser')->get();
        $prods = DB::table('requests')->join('shop', 'requests.ProductsB', '=', 'shop.id')->join('users', 'users.id', '=', 'requests.idUser')->where('users.id','=','requests.idUser');
        return view('admRequests', compact('posts', 'sum','prods'));
    }
}
