<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Login;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function checklogout(){
        session()->forget('user');

        return view('login');
    }

}
