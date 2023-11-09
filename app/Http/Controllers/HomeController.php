<?php

namespace App\Http\Controllers; //el namespace es la ruta donde se encuentra el controlador

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Esta funcion es para la ruta de la pagina principal
    public function __invoke(){ //__invoke se usa cuando el controlador administra una sola ruta
        return view('home'); //escribo la ruta de la vista partiendo desde la carpeta view
    }
}
