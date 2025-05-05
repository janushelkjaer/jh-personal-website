<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

        #dd($request->route('locale'));
        $host = $request->getHttpHost();

        $locale = $request->getPreferredLanguage(['en', 'da']);
        if (str_contains($host, 'dk.') || str_contains($host, '.dk')) {
            $locale = 'da';
        }
        if (str_contains($host, 'en.') || str_contains($host, '.en')) {
            $locale = 'en';
        }
        #$locale = $request->route('locale');
        app()->setLocale($locale);
        LaravelLocalization::setLocale($locale);


        return $next($request);
    }
}
