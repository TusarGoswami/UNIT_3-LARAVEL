<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CM
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->query('age');
        $country = $request->query('country');
        $user = $request->query('user');

        if (!$age || $age < 18) {
            return response("NOT Allowed: Age restriction");
        }

        if (!$country || strtolower($country) !== 'india') {
            return response("NOT Allowed: Only for India");
        }
        if(!$user || strtolower($user) !== 'tusar'){
            return response("NOT Allowed: Only for Tusar");
        }

        return $next($request);
    }
}