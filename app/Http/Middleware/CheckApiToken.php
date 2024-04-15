<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiToken
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->bearerToken() != env('API_TOKEN')) {
            return response()->json([
                'error_message' => 'Unauthorized',
            ], 401);
        } 

        return $next($request);
    }
}