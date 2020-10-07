<?php

namespace App\Http\Middleware;

use App\Models\Enum\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    protected $languages;

    protected $default;

    public function __construct()
    {
        $this->languages = config('localization.supported_locales');
        $this->default = config('localization.default_locale');
    }

    public function handle(Request $request, Closure $next)
    {
        if ($request->route()->hasParameter('localization')) {
            $subdomain = $request->route()->parameter('localization');

            if (in_array($subdomain, $this->languages)) {
                App::setLocale($subdomain);
            } else {
                App::setLocale(Language::RUSSIAN);
            }
        } else {
            App::setLocale(Language::RUSSIAN);
        }

        return $next($request);
    }
}
