<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCurso; //De esta manera declaro que quiero usar la validacion del formulario que cree en otro archivo

class CursoController extends Controller
{
    public function index(){
//Con orderBy organizo los registro de manera decendente mediate su id
        $cursos = Curso::orderBy('id','desc')->get(); // ->paginate() Con paginate pagino los registros de manera que no se ven todos en la primera pantalla
        // $cursos = Curso::all(); //Consulto todos los registros de la base de datos y los guardo en una variable        

        return view('cursos.index', compact('cursos')); //Con compact puedo pasar la variable a la vista
    }

    //Este metodo envia al formulario de creacion 
    public function create(){
        return view('cursos.create');
    }

    //El formulario llama a esta funcion para guardar el nuevo registro que a su vez nos dirige a otra vista
    //Con $request recibo la informacion de los inputs del formulario y con StoreCurso es el FormRequest en Http>Requests>StoreCurso.php, ahi estan declaradas las validaciones
    public function store(StoreCurso $request){ //$request es un objeto donde almaceno lo recibido por el formulario, StoreCurso hace referencia al StoreCurso.php dentro de Requests donde se hace la validacion del formulario
        // 1. De esta forma se puede hacer un registro en la BD si el formulario no tiene muchos campos
        // Si esta validacion falla se deja de ejecutar el codigo
        // Estas reglas de validacion las paso a Http>Requests>StoreCurso.php para no ensuciar el codico de los metodos
        // $request->validate([
        //     'name' => 'required|min: 3', //Puedo declarar la regla de validacion de esta manera
        //     'description' => ['required', 'max:100'], //o de esta manera
        //     'categoria' => 'required|min:3'
        // ]);
        // $curso = new Curso();
        // $curso->name = $request->input('name'); //Asigno el valor del input mediante su nombre
        // $curso->description = $request->input ('description');
        // $curso->categoria = $request->input('categoria');
        // $curso->save();

        //2. De esta forma puedo hacer un registro en la BD si el formulario tiene muchos campos
        //Si quiero guardar registros de esta manera tengo que declarar los campos aceptados o protegidos en su modelo
        //Llamo al modelo curso a su metodo create, guarda el nuevo registro automaticamente
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'description'=> $request->description,
        //     'categoria'=> $request->categoria
        // ]);

        //3. ASIGNACION MASIVA. De esta forma se puede hacer un registro en la BD con un formulario que tiene muchos campos
        //Se tienen que declarar los campos aceptados o rechazados en el model Curso
        //Llamo al modelo curso a su metodo create, es igual que crear una nueva instancia de la clase curso
        $curso = Curso::create($request->all()); //Se guardan todos los campos recibidos del formulario en la variable $curso y en el nuevo objeto            
        return redirect()->route('cursos.show', $curso->id); //Al pasarle la variable por la ruta puede ir sin especificar el id, laravel sabra que debe tomar su id   
        //return view('cursos.show', compact('curso')); //De esta forma tambien se puede
    } 

    public function show($id){

        $curso = Curso::find($id); //Con esto busco el elemento mediante su id

        return view('cursos.show', compact('curso')); //Con conpact envio la variable curso a la vista
        //return view('cursos.show', ['curso'=>$curso]); //En curso guardo lo que se pase por parametro curso
    }

    //Esta es la funcion que se ejecuta cuando doy clic sobre el enlace editar
    public function edit(Curso $curso){ //De esta manera Laravel entiene que $curso es una nueva instancia (nuevo registro), de la clase curso cuyo id es el que le pasamos por la url en el web.php
        
        return view('cursos.edit', compact('curso')); //Meditante compact puedo enviar la variable por la url
    }

    //$curso es la instancia que capto el formulario ene l edit.blade.php para llenar los campos y que lo envia mediante su action
    //SotoreCurso es el archivo donde estan declaradas las reglas de validacion, lo especifico para usarlo
    public function update(StoreCurso $request, Curso $curso){//Con request recibo los datos actualizados del formulario, con $curso recibo el objeto con todas sus propiedades que se envio desde el action del formulario en edit.php, que a su vez se paso por la url tipo put del web.php
        //Con esto hago la validacion de los campos del formulario
        // Estas reglas de validacion las paso a Http>Requests>StoreCurso.php para no ensuciar el codico de los metodos
        // $request->validate([
        //     'name' => 'required|min: 3', //Puedo declarar la regla de validacion de esta manera
        //     'description' => ['required', 'max:100'], //o de esta manera
        //     'categoria' => 'required|min:3'
        // ]);
        
        //1. Lo que halla en cada campo de la instancia sera igual a lo que se envio en cada campo del formulario
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->update();

        //2. ASIGNACION MASIVA. De esta forma se puede actualizar un registro recibiendo la informacion de un formulario que tiene muchos campos
        //Puedo hacer esto gracias a que declare los campos permitidos en el Modelo Curso
        $curso->update($request->all()); //De esta forma recibo todos los campos de formulario y los asigno a los campos de objeto $curso
        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){ //Este es un objeto de la clase Curso que se envia mediante la url de la ruta
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}

