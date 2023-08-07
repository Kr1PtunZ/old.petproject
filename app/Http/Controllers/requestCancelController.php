<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class requestCancelController extends Controller
{
    public function cancelReq(Request $request){
        $reqId = $request->reqId;
        DB::table('requests')->where('idR','=', $reqId)->delete();
        return view('dashboard');
    }
}

