<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /* Verificamos */
    public function userValidation(Request $request) {

        session_start();
        $SIAPE = $request->input('SIAPE');
        $senha = $request->input('senha');

        /* Buscando no banco de dados usuarios com o número SIAPE */
        $result = DB::select('select * from users where SIAPE = :siape', ['siape' => $SIAPE]);

        if($result && $senha === $result[0]->senha) {

            $_SESSION['profile_type'] = $result[0]->profile_type;
            $_SESSION['conectado'] = 1;

            return redirect()->route('motivos.home')->with(['profile_type' => $result[0]->profile_type]);

        } else {

            return redirect('/motivos')->with('warning', 'Usuário invalido');
        }
    }

    /* Logout do Usuário */
    public function userLogout() {
        session_start();
        session_destroy();

        return redirect('/motivos');
    }
}
