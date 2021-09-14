<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    $languages = ['HTML', 'CSS', 'JavaScript'];
    return view('language.index', ['languages' => $languages]);
}
