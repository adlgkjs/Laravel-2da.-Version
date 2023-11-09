<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);
        Mail::to('cesar.salazar@gmail.com')
        ->send(new ContactanosMailable($request->all())); //Le paso al constructor todo lo que he recibido del formulario
        
        //1° forma de enviar una variable de sesion a la vista, info es el nombre de la variable
        // session()->flash('info', 'Mensaje enviado'); //session es un helper, con flash deigo que quiero una variable de sesion flash(temporal)

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado'); //with es otra forma de enviar una variable de sesion
    }
}
