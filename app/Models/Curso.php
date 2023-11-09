<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model //Con Model podemos acceder a muchos de sus metodos, entre ellos update, delete, create, etc.
{
    use HasFactory;    
    //protected $table = "users"; //Por defecto este modelo administra la tabla cursos, pero pedo decirle que administre a una tabla distinta de esta forma
    
    protected $fillable = ['name', 'description', 'categoria']; //Estos son los campos permitidos para insertar un registro en la BD

    //Si el formulario tiene muchos campos tendria que declarar todos esos campo aqui, sin embargo
    //puedo aceptarlos todos y solo proteger algunos como en este caso el campo status
    //asi recibira todo los demas menos el que yo especifique
    //protected $guarded = ['status']; //Los campos que ponga dentro de $guarded seran ignorados o no seran permitidos para crear un nuevo registro
}




