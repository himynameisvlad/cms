<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Page;

class DashboardController extends Controller {

    public function getDashboard() {
        $dashboard_menu = Page::all();
        $first_page = Page::first();
        $data = [
            'menu' => $dashboard_menu,
            'first_page' => $first_page
        ];
        return view('dashboard', $data);
    }

}