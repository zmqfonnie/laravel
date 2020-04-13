<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * 中间件
 * Class AdminMiddleware
 * @package App\Http\Middleware
 */
class AdminMiddleware
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

        //使用admin下登录验证
        if(!Auth::guard('admin')->check()){
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
