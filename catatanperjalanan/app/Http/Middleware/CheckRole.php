<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $roles = array_slice(func_get_args(), 2);

        // Periksa apakah pengguna sudah terautentikasi
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            foreach ($roles as $role) {
                if ($userRole == $role) {
                    return $next($request);
                }
            }
        }

        // Jika pengguna tidak terautentikasi atau tidak memiliki peran yang sesuai
        return redirect('/')->with('error', 'Anda tidak memiliki akses untuk halaman ini.');
    }
}
