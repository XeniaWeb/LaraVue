<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use App\Models\User;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param UserRole $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, UserRole $role): mixed
    {
        /** @var User $user */
        $user = Auth::guard()->user();

        if ($user->role != $role) {
            return redirect('/');
        }

        return $next($request);
    }
}
