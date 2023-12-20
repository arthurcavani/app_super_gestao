<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil, $param3, $param4)
    {   
        echo $metodo_autenticacao . ' - ' . $perfil . '<br>';

        if ($metodo_autenticacao == 'padrao'){
            echo 'Verificar user e senha no banco<br>' . $perfil;
        }

        if ($metodo_autenticacao == 'ldap'){
            echo 'Verificar user e senha no AD<br>' . $perfil;
        }

        if ($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos para visitante';
        } else {
            echo 'Carregar o perfil no BD';
        }

        if (false){
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticação!');
        }
    }
}
