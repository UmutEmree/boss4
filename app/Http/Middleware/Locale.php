<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Locale
{
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('locale')  ) {
            $locale = $request->session()->get('locale');
            \App::setLocale($locale);
        }
        return $next($request);
    }
}