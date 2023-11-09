<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute; //Agrego esta linea para poder usar el mutador

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    protected function name(): Attribute{ //La funcion se debe llamar como el campo del formulario a modificar
        return new Attribute(
            //ACCESOR, Funcion para transformar primera letra de cada palabra a mayusculas, no modifica la base de datos
            get: fn($value) => ucwords($value), //Esta funcion es la misma que la de abajo solo que mas compacta
            
            // get:function($value){ //$value hace referencia a lo que se escriba en el input
            //     return ucwords($value); //ucwords es una funcion php que conviertir primera letra de cada palabra a mayusculas
            // },

            // MUTADOR, Funcion para transforma a minusculas, modifica la base de datos
            set:function($value){ //$value capturo lo que se escriba en el input name
                return strtolower($value); //strtolwer es una funcion php que convierte todo a minusculas
            }
        );        
    }

    // //En versiones anteriores de Laravel los atributos y mutadores se definian de esta manera
    // //ACCESOR
    // public function getNameAttribute($value){
    //     return ucwords($value);
    // }

    // //MUTADOR
    // public function setNameAttribute($value){
    //     $this->atributes['name'] = strtolower($value);
    // }
}
