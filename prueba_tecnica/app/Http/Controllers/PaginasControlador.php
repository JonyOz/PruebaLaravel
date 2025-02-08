<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasControlador extends Controller
{
    public function inicio(){
        return view('inicio');
    }//Se encarga de pues ammm que exista la pagina de inicio jaja

    public function acerca(){
        return view('acerca');
    }

    public function contacto(){
        return view('contacto');
    }

    public function portafolio(){
        return view('portafolio');
    }
}
