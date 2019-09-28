<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function swap($locale)
    {
        if (array_key_exists($locale, config('locale.languages'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
