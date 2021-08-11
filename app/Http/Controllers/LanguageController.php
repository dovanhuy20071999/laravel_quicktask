<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($language)
    {
        Session()->put('language',$language);
        return redirect()->back();
    }
}
