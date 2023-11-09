<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    public function index(){
        return view('musica.index');
    }

    public function create(){
        return view('musica.create');
    }

    public function show($genero){
        return view('musica.show', ['genero' => $genero]); //En genero guardo lo que se pase por parametro en la funcion
    }
}

