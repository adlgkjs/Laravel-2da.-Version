<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //Este metodo crea la tabla
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //string permite almacenar hasta 255 caracteres en el campo de la columna, text permite almacenar mas de 255
            $table->string('email')->unique(); //unique() indica que el registro tiene que ser unico, no se puede repetir
            $table->timestamp('email_verified_at')->nullable(); //timestampo se usa para guardar fechas, nullable indica que puede quedar vacio o puede ser null
            $table->string('password');
      
            $table->rememberToken(); //rememberToken crea un una columna de tipo varchar de tamaño 100, en esta columna se almacena un token cada vez que el usuario marque que quire mantener su secion iniciada
            $table->timestamps(); //timestamps crea dos columnas (created_at updated_at) en created_at se almacena fecha y hora cuando se inserta un nuevo registro, en updated_at fecha y hora de cuando se actualiza un registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); //Este metodo elimina la tabla users
    }
};
