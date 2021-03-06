<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function index ($num1,$operator,$num2){
        $total='error';
        if($operator == 'addition' ){    
            $total = $num1 + $num2;
        }
        elseif($operator == 'subtraction' ){
            $total = $num1 - $num2;
        }
        elseif($operator == 'multiplication' ){
            $total = $num1 * $num2;
        }
        elseif($operator == 'division' ){
            $total = $num1 / $num2;
        }
        return view('result/index',['total'=> $total]);
    }
}