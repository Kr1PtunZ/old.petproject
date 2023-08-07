<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class calculatorViewController extends Controller
{
    public function calcView() {
        $names = Shop::all()->where('measure','=','м3');
        return view('calculator', compact('names'));
    }
}
