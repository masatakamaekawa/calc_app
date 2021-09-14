<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
     public function index(Request $request)
    {
        $data = $request->equasion;
        return view('calculate', [$data=> $data]);
    }
}