<?php

namespace App\Http\Middleware;


class RedirectIfAuthenticated{
    
    public function handle($request, Closure $next, ...$guards){
    if ($request->expectsJson()) {
        return response()->json(['message' => 'Already authenticated'], 403);
    }

    return $next($request);
}
}