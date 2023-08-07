<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

    class admProdDelController extends Controller
{
    public function index(Request $request){
        $posts = DB::table('shop')->get();
        return view('delete', compact('posts'));
    }
}
