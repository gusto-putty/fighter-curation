<?php

namespace App\Http\Middleware;

use Closure;
use Log;
use Route;

class ActionLog
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
        Log::info('アクション開始', ['action' => Route::currentRouteAction()]);

        $next = $next($request);

        Log::info('アクション完了', ['action' => Route::currentRouteAction()]);

        return $next;
    }
}
