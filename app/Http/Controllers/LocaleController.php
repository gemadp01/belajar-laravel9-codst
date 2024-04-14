<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;

class LocaleController extends Controller
{
    public function set_locale($locale)
    {
        FacadesSession::put('locale', $locale);
        return Redirect::back();
    }
}
