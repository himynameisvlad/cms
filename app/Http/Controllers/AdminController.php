<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AdminController extends Controller {

    public function postSignUp(Request $request) {
        $login = $request['login'];
        $password = bcrypt($request['password']);

        $admin = new Admin();
        $admin->login = $login;
        $admin->password = $password;

        $admin->save();

        return redirect()->back();
    }

    public function getDashboard() {
        return view('dashboard');
    }
    
    public function postSignIn(Request $request) {

        if(Auth::attempt(['login' => $request['login'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}