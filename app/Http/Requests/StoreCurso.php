<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    //Aqui se debe colocar la logica necesaria para verificar si el usuario tiene los permisos necesarios para agregar datos, ejemplo permiso de administrador, etc. 
    public function authorize(): bool
    {
        return true; //True si tiene permisos, false no tiene permisos
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:20', //Puedo declarar la regla de validacion de esta manera
            'description' => ['required', 'max:100', 'min:5'], //o de esta manera
            'categoria' => 'required|min:3|max:20'
                                
        ];
    }   

    //De esta forma personalizo los mensajes de las validaciones del formulario
    public function messages(){
        return [
            //Ingeso al campto description y la validacion en la que aparecera el mensaje
            'name.required' => 'Debe ingresar un nombre',
            'name.min' => 'El nombre puede ser minimo de 3 caracteres',
            'name.max' => 'El nombre puede ser maximo de 20 caracteres',

            'description.required' => 'Debe ingresar una descripcion',
            'description.max' => 'La descripcion puede ser de maximo 100 caracteres',
            'description.min' => 'La descripcion puede ser minimo de 5 caracteres',

            'categoria.required' => 'Debe ingresar un categoria',
            'categoria.min' => 'La categoria puede ser minimo de 3 caracteres',
            'categoria.max' => 'La categoria puede ser maximo de 20 caracteres'
        ];
    }   
    
     //Funcion para cambiar el nombre de names de inputs
     public function attributes(){
        return[
            'name' => 'nombre del curso' //De esta forma puedo personalizar los names de los inputs en un formulario
        ];
    }
}
