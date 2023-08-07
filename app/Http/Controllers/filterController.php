<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filterController extends Controller
{
    public function filterConfirm(Request $request){
        if (isset($request->filter)){
        $prods = [];
            foreach ($request->filter as $item) {
                $prods[] = DB::table('shop')->where('category',  '=',$item)->get();
            }
       return view('shop', compact('prods'));
        }
        else{
            return redirect('/shop');
        }
    }
}
