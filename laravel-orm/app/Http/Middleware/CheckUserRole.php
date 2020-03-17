<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-16 15:26:36
 * @LastEditTime : 2020-01-16 17:59:19
 * @Description: file content
 */

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->role!=='admin') {
            return redirect('/');
        }
        return $next($request);
    }
}
