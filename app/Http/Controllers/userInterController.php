<?php

namespace App\Http\Controllers;

use App\Models\userInter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class userInterController extends Controller
{
    public function roleViewer()
    {
        $userId = Auth::id();
        if ($userId == 1){
            return view('adminPanel');
        }
        else{
            return redirect('/');
        }
    }

}
