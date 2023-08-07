<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cartDeleteController extends Controller
{
    public function cartDelete(Request $request){
    $remove = DB::table('cart')->where('id_cart','=',$request->card_id)->delete();
    return redirect('cart');
    }

}
