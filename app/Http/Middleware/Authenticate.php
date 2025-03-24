<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        return route('redirect'); // Ensure it redirects to the correct user role dashboard
    }
}
}
