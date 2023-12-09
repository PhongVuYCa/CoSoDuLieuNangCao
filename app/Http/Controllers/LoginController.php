<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function create()
    {
        return view('/login');
    }

    public function checkLogin(Request $request)
    {

        $email = $request->input('exampleInputEmail');
        $password = $request->input('exampleInputPassword');
        $user = Users::where('email', $email)->where('password', $password)->first();
        if ($user)
        {
            session(['user' => $user]);
            if ($user->role === "")
            {
                return redirect('/shop');
            }
            else if ($user->role === "admin")
            {
            return redirect('/admin');
            }
        }
        else
        {
            return redirect('/login')->with('error', 'Thông tin đăng nhập không chính xác');
        }
    }

}
