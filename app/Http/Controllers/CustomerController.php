<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Users;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $users = Users::paginate(5);
        return view('admin.listUser', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.createUser');
    }

    public function store(Request $request)
    {
        $code = Users::orderby('code', 'desc')->first();
        $users = new Users ([
            'code' => $code->code + 1,
            'fullname' => $request->input('fullname'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
        $users->save();
        session()->flash('success', 'User created successfully');
        return redirect('/listUser');
    }


    public function show($code)
    {
        $users = Users::where('code',(int)$code)->first();
        return view('customer.show', ['user'=>$users]);
    }

    public function edit($code)
    {
        $route = "/profile/update/$code";
        $user = Users::where('code', (int)$code)->first();
        $flag = "modify";
        return view('customer.edit', ['route'=>$route, 'flag'=>$flag, 'user'=>$user]);
    }

    public function update(Request $request, $code)
    {
        $user = Users::where('code', (int)$code)->first();
        $user->username = $request->get('username');
        $user->fullname = $request->get('fullname');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
        $user = Users::all();
        return view('customer.show', ['user'=>$user]);
    }

    public function destroy($code)
    {
        Users::where('code',(int)$code)->delete();
        return redirect('/listUser');
    }

}
