<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage($language){
        session()->put('local',$language);
        return redirect()->back();
    }
}
