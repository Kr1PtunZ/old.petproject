<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admDelController extends Controller
{
    public function index(Request $request){

        $posts = DB::table('shop')->where('id','=',$request->card_id)->delete();
        return redirect('adminPanel/delete');
    }
}
