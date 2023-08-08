<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if ($request->user() && $request->user()->type_user) {
            // Verificar si el usuario tiene un rol asociado
            if ($request->user()->type_user->type) {
                // Verificar si el rol del usuario coincide con el rol requerido
                if ($request->user()->type_user->type === $type) {
                    return $next($request);
                }
            }
        } else {
            abort(403, "Acceso no autorizado");
        }
        abort(403, "Acceso no autorizado");
    }
}
