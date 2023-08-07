<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class admUsersController extends Controller
{
    public function userViewer(){
        $users = User::all();
    }
}
