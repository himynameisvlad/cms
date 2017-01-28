<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

//    public function postSignIn(Request $request) {
//        $login = $request['login'];
//        $password = bcrypt($request['password']);
//    }

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