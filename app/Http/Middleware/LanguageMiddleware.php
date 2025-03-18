<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    protected $validLocales = ['en', 'id', 'ar'];

    public function handle(Request $request, Closure $next)
    {
        $locale = $request->session()->get('locale', config('app.locale'));

        if (in_array($locale, $this->validLocales)) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        } else {
            $locale = Session::get('locale', 'en');
            App::setLocale($locale);
        }

        return $next($request);
    }
}
