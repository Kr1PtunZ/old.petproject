<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class admProdInsertController extends Controller
{
    public function index(){
        $posts = DB::table('shop')->get();
        return view('insert', compact('posts'));
    }
}
