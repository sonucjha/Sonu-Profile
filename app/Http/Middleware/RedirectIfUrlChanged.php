<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfUrlChanged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Define a list of allowed URLs or patterns
        
        $allowedUrls = [
            'admin-dashboard'
            // Add other allowed URLs here
        ];
         
        // Check if the current URL is not in the allowed URLs
        if (!in_array($request->path(), $allowedUrls)) {
            // Redirect to home page
            return redirect('/admin-dashboard');
        }

        return $next($request);
    }
}
