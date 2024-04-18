<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1); // Get the first segment of the URL

        // Check if the locale is supported
        if (in_array($locale, ['en'])) {
            app()->setLocale($locale); // Set the application locale
        }elseif((!in_array($locale, ['en']) && strlen($locale) > 2) || $locale==null){
            app()->setLocale('ar');
        }else{
            abort(404);
        }
        
        return $next($request);
    }
}
