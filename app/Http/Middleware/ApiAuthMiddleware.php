<?php
namespace App\Http\Middleware;

use Illuminate\Http\Request;

class ApiAuthMiddleware
{
    public function handle(Request $request, \Closure $next)
    {
        $apiKey = $request->header('Api-Key');

        // Zamiast poniższego sprawdzenia, można zaimplementować logikę autoryzacji z własnym mechanizmem kluczy API
        if ($apiKey !== '2add8320-1315-4bfc-8a40-09c9ecce482a') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
