<?php

namespace App\Http\Controllers;



class LocalizationController extends Controller
{

    public function __invoke($locale)
    {
        if (! in_array($locale, ['en', 'nl'])) {
            abort(404);
        }

        session(['locale' => $locale]);
        return redirect()->back();
    }
}
