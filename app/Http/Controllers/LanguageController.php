<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller {

    public function switchLang($lang) {
        /*if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();*/

        $backUrl = back()->getTargetUrl();
        $baseUrl = mob_url('/');

        $segmentsToString = str_replace($baseUrl, '', $backUrl);
        $segments = explode('/', $segmentsToString);

        $backLang = is_array($segments) && isset($segments[1]) ? $segments[1] : null;

        if(array_key_exists($lang, config('languages')) && array_key_exists($backLang, config('languages'))) {
            $segments = array_slice($segments, 2);
            $uriTarget = $baseUrl . '/' . $lang . '/' . implode('/', $segments);

            //session()->put('applocale', $lang);
            session()->forget('link-log');
            return redirect($uriTarget);
        }

        return redirect()->back();
    }
}
