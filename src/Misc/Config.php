<?php

namespace Pmochine\LaravelTongue\Misc;

class Config
{
    public static function subdomains()
    {
        return config('localization.subdomains', []);
    }

    public static function beautify()
    {
        return config('localization.beautify_url');
    }

    public static function fallbackLocale()
    {
        return config('app.fallback_locale');
    }

    public static function supportedLocales()
    {
        return config('localization.supportedLocales');
    }

    public static function acceptLanguage()
    {
        return config('localization.acceptLanguage');
    }

    public static function cookieLocalization()
    {
        return config('localization.cookie_localization');
    }

    public static function preventRedirect()
    {
        return config('localization.prevent_redirect', false);
    }
}
