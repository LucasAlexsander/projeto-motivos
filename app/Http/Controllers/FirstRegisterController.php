<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class FirstRegisterController extends Controller
{

    /* Primeiro usuário */
    public function first() {
        $numeroDeUsuarios = User::all()->count();
        return $numeroDeUsuarios != 0 ? redirect()->route('login') : view ('Auth.register');
    }
    
    public function firstRegister(Request $request) {
        $dados = $request->except('_token');

        $validator = $this->validator($dados);

        if($validator->fails()) {
            /* Caso dê errado */
            return redirect()->route('register')->withInput()->withErrors($validator);
        }

        $user = $this->create($dados);
        Auth::login($user);
        return redirect()->route('motivos.admin');
    }

    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'SIAPE' => ['required', 'string', 'max:11', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'SIAPE' => $data['SIAPE'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
