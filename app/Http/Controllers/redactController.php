<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redactController extends Controller
{
    public function index(Request $request){
        $card_id = $request->card_id;
        return view('redact', compact('card_id'));
    }
}
