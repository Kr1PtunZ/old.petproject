<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class redUpdController extends Controller
{
    public function index(Request $request){
        $postsRed = DB::table('shop')->get();
        return view('update', compact('postsRed'));
    }
}
