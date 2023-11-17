<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
public function usuari1($dato1 = '') {
    $textFinal = 'Usuari1: Roger';
    $textFinal .= ($dato1 == '')?'sense cognom':$dato1;
    return view('prueba')->with('nomUsuari', $textFinal);
}
public function usuari2($dato1, $dato2, $dato3) {
    $textFinal = 'Usuari2: Fernanda';
    $textFinal .= $dato1 . " " . $dato2 . " te " . $dato3;
    return view('prueba')->with('nomUsuari',$textFinal);
}
}
