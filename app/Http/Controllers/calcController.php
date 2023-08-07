<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class calcController extends Controller
{
public function calcV(Request $request){
    $a = $request->width;
    $b = $request->height;
    $c = $request->length;
    $price = $request->price;


    $v = $a*$b*$c;

    $priceV = $v*$price;

    $names = Shop::all()->where('measure','=','м3');
    return view('calculator',compact('v','priceV','names'));
}

}
