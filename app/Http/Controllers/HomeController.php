<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        
        /* if(($_SESSION['conectado'] == 1)) {
            return view('home');

        } else {
            echo 'Chegamos aqui';
            return redirect('/motivos/erro/userNotConnected');
        } */
        return view('home');

    }

    public function adminPage() {
        return view('admin');
    }
}
