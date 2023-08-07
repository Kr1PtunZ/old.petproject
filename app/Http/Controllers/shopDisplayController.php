<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use app\models\Shop;
use Illuminate\Http\Request;

class shopDisplayController extends Controller
{
    public function shopDisplay() {
        $posts = DB::table('shop')->where('amount','>','0')->simplePaginate(6);
        return view('shop', compact('posts'));
    }
    public function filter(Request $request){
            $dad = DB::table('shop')->where('category' ,'==' ,'$request')->where('amount','>','0')->simplePaginate(8);
            return view('shop', compact('dad'));
    }
}
