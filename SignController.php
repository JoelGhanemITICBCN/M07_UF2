<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
   public function signin($dato1, $dato2, $dato3, $dato4) {
    $titol = "";
    $titol =  $dato1 . " " . $dato2 . " " . $dato3 . " " . $dato4;
    return view('signin')->with('titol',$titol);
   }
   public function signup($dato1, $dato2, $dato3) {
    $titol = "";
    $titol =  $dato1 . " " . $dato2 . " " . $dato3;
    return view('signup')->with('titol',$titol);
   }
}
