<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reqUpdController extends Controller
{
    public function reqUpd(Request $request){
        if ($request->status == 'Отменён'){
            DB::table('requests')->where('idR','=',$request->postId)->delete();
            return view('adminPanel');
        }
        else{
        DB::table('requests')->where('idR','=',$request->postId)->update(['status'=>$request->status]);
        return view('adminPanel');}
    }
}
