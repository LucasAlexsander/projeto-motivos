<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {
        $data = [
            'erro' => $request->erro
        ];
        return view('login', $data); 
    }
}
