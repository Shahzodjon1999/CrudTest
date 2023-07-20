<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;
use Hash;

class LoginController extends Controller
{
    public function RegisterLog(Request $request)
    {
        LoginModel::create([
            'UserName' => $request->username,
            'Email' => $request->email,
            'Login' => $request->login,
            'Password' => $request->password
        ]);

        return redirect()->back();
    }

    public function  CheckLog(Request $request)
    {
        $login = LoginModel::where('Login', $request->username)->first();

        return redirect()->back();
    }
}
