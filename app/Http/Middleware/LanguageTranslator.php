<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageTranslator {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $lang = $request->segment('1');

        if($lang && array_key_exists($lang, config('languages'))) {
            app()->setLocale($lang);
        }
        else {
            // This is optional as Laravel will automatically set the fallback language if there is none specified
            app()->setLocale(config('app.fallback_locale'));
        }
        return $next($request);


       /* if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), Config::get('languages'))) {
            App::setLocale(Session::get('applocale'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);*/

    }
}
