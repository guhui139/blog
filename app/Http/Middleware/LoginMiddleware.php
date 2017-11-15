<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $ip = $request->ip();
        //拼接时间
        $str = '['.date('Y-m-d H:i:s',time()).']::ip地址'.$ip."\r\n";
        //创建cons.txt追加写入(在public里面)
        file_put_contents('cons.txt', $str,FILE_APPEND);
        return $next($request);
    }
}
