<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index() {
        /* Verificar se tem pelo menos 1 usuário */

        $user = User::all()->count() == 0 ? true : false;   

        return view('Auth.login', ['userCount' => $user]);
    }

    public function authenticate(Request $request) {
        $dados = $request->except('_token');

        if(Auth::attempt(['SIAPE' => $dados['siape'], 'password' => $dados['password']])) {
            return redirect()->route('motivos.admin');
        } else {
            return redirect()->route('login')->with('warning', 'E-mail e/ou Senha inválidos');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('motivos');
    }
}
