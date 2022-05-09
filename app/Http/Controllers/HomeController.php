<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request) {

        session_start();
        $profile = [
            'profile_type' => $_SESSION['profile_type'],
            'conectado' => $_SESSION['conectado']
        ];

        return view('home', $profile);
    }

    public function adminPage() {
        return view('admin');
    }
}
