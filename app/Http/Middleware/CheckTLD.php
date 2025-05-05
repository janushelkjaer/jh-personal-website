<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CheckTLD
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $urlHost = request()->getHttpHost();
        $tld = pathinfo(request()->getHost(), PATHINFO_EXTENSION);

        $parsedUrl = parse_url($urlHost);

        $host = explode('.', $parsedUrl['path']);

        $subdomain = $host[0];

        #   dd($subdomain);

        Config::set('app.url', request()->getHost());
        if (
            $tld == 'dk' || $subdomain == 'dk'
        ) {
            Config::set('example.lang', 'da');
            Config::set('example.currency', 'DKK');
            app()->setLocale('da');
            #app()->setDefaultLocale('da');
            session()->put('locale', 'da');
            LaravelLocalization::setLocale('da');
        }
        if (
            $tld == 'com' || $subdomain == 'en'
        ) {
            Config::set('example.lang', 'en');
            Config::set('example.currency', 'USD');
            app()->setLocale('en');
            #app()->setDefaultLocale('en');
            session()->put('locale', 'en');
            LaravelLocalization::setLocale('en');
        }

        #dd(LaravelLocalization::getCurrentLocale(), app()->getLocale());

        return $next($request);
    }
}
