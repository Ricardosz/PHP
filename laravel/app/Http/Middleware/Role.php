<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$Premission)
    {
        $uid=session("AdminUserInfo.id");
        $role=\App\Http\Service\Com\LoginService::CheckUserRole($uid);
        if ($role->name==$Premission)
        {
            return $next($request);
        }
        else
            {
                return response()->view('errors.403', ['result' => "权限不足"]);
            }
    }
}
