<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.email' => 'O e-mail informado é inválido!',
            'senha.required' => 'Senha obrigatória!'  
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuario: $email | Senha: $password <br>";

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)){
            echo 'Usuario existe';
        } else {
            echo 'Usuario nao existe';
        }
    }
}
