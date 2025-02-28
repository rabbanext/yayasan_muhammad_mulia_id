<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Read locale from session (default to config app.locale)
        $locale = $request->session()->get('locale', config('app.locale'));

        App::setLocale($locale);

        return $next($request);
    }
}
    