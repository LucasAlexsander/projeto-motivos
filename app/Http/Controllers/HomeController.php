<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request) {

        $profile = [
            'profile_type' => session()->get('profile_type')
        ];

        return view('home', $profile);
    }

    public function adminPage() {
        return view('admin');
    }
}
