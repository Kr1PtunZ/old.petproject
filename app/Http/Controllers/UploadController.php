<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(Request $request){
    DB::table('shop')->insert(['nameProduct'=>$request->name, 'desc' => $request->desc ,'price'=>$request->cost,'img' => 'beton.jpg', 'category' => $request->category, 'measure' => $request->measure, 'amount' => 1]);
    return redirect('adminPanel');
    }
}
