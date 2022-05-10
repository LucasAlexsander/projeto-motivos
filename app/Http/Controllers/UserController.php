<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /* Verificamos */
    public function userValidation(Request $request) {

        $SIAPE = $request->input('SIAPE');
        $senha = $request->input('senha');
        
        /* Buscando no banco de dados usuarios com o número SIAPE */
        $result = Usuarios::where('SIAPE', $SIAPE)->first();

        if($result && Hash::check($senha, $result->senha)) {
            echo $result->profile_type;
            session(['profileType' => $result->profile_type]);
            session(['conectado' => 1]);

            return redirect()->route('motivos.home');

        } else {
            return redirect('/motivos')->with('warning', 'Senha/usuário invalido');
        }
    }

    /* Logout do Usuário */
    public function userLogout() {
        session()->forget(['conectado', 'profile_type']);

        return redirect('/motivos');
    }
}
