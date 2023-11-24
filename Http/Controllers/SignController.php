<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
   public function signin() {
    $titol = "";
   return view('signin')->with('titol',$titol);
   }
   public function signup() {
    $titol = "";
    return view('signup')->with('titol',$titol);
   }
   public function products(Request $request) {
      $text = $request['product'];
      return view('products')->with(['result'=> $text]);
   }
}
