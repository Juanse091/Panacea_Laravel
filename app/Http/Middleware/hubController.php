<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use App\Models\TipoUsuario;
use Symfony\Component\HttpFoundation\Response;

class hubController
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $auth = Auth::user();
        $userType = $auth -> Tipo_Usuario_idTipo_Usuario;
        if($userType == 1){
            return redirect("/admin");
        };
        if($userType == 2){

        };
        if($userType == 3){
            
        };
        if($userType == 4){
            return $next($request);
        };


        return redirect("/");
    }
}
