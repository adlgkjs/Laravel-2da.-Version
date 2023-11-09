<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//Importo mi controlador
use App\Http\Controllers\CursoController; //Importo el nuevo controlador
use App\Http\Controllers\MusicaController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;

Route::get('/', HomeController::class)->name('home'); //Uso la clase HomeController para ejecutar la ruta, es ahi donde esta definida la funcion
//Con esta sola ruta puedo resumir todas las anteriores, comando para consultar rutas php artisan r:l
Route::resource('cursos', CursoController::class);
//El primer nosotros es el nombre de la url, el segundo es el nombre de la vista
Route::view('nosotros', 'nosotros')->name('nosotros'); //Este tipo de rutas solo se usa cuando se quiere mostrar contenido estatico, sin conexion a base de datos
//Ruta del formulario de contactanos
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
//Ruta para enviar formulario de contactanos
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

// Route::get('contactanos', function (){
//     Mail::to('cesar.salazar@gmail.com')
//     ->send(new ContactanosMailable); //Esto es una nueva instancia de nuestro archivo para enviar correo que creamos en app>Mail
//     return "Mensaje enviado";
// })->name('contactanos');

//Esta es otra forma de agrupar las rutas por controlador
// Route::controller(MusicaController::class)->group(function(){
//     Route::get('musica', 'index');
//     Route::get('musica/create', 'create');
//     Route::get('musica/{genero}', 'show');

// });

// Route::get('/', function () {
//     return view('welcome');
//     return "Pagina Principal";
// });

//Entre comillas despues del get debe de ir el nombre de la ruta
// Route::get('cursos', function(){
//     return "Pagina de cursos";
// });

// Route::get('/', [CursoController::class, 'index'])->name('cursos.index'); //name me permite ponerle un nombre a las rutas y si la ruta cambia solo la tengo que modificar aqui y no en todos los lugares donde la puse
// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
// Route::post('cursos/store', [CursoController::class, 'store'])->name('cursos.store');
// Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
// //{curso} es toda la instancia nueva(nuevo registro) junto con su ide que capta el metodo edit en el CursoController.php mediante la variable $curso
// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
// //Ruta para actualizar registros, capta la variable curso que le pasamos desde el action del formulario
// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
// //Ruta para eliminar un registro
// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');

//Hago una ruta mas especifica
// Route::get('cursos/create', function () {
//     return "Pagina de creacion de curso";
// });



//Puedo pasar una variable por la url, para esto se declara entre llaves y se pasa por parametro en la funcion
//Las rutas con variables se delcaran al ultimo ya que si se hace antes, una ruta especifica puede interpretarse como una variable y no como una ruta 
// Route::get('cursos/{curso}', function($curso){
//     return "Entraste al curso: $curso";
// });



//Puedo pasar mas de una variable mediante la ruta
// Route::get('cursos/{curso}/{categoria}', function($curso, $categoria){
//     return "Entraste al curso: $curso, de la categoria: $categoria";
// });
//Para no tener tantas rutas puedo hacer una sola con 2 variables siendo una de ellas opcional
//Para eso se pone un ? al final del nombre de la ruta y en la funcion se declara nula
//Asi si la variable no se pasa por la url se declarara nula 
// Route::get('musica/{genero}/{categoria?}', function($genero, $categoria = null){    

//     if($categoria){
//         return "Tegusta el genero: $genero, de la categoria: $categoria";
//     }else{
//         return "Te gusta el genero: $genero";
//     };

    //Quise establecer las dos variables como opcionales pero no logre que se leyera el tercer condicional
    // if (!$genero) {
    //     return "Vista de generos musicales";
    // }else if($genero){
    //     return "Te gusta el genero: $genero";
    // }else if($genero and $categoria){
    //     return "Tegusta el genero: $genero, de la categoria: $categoria";
    // };
// });



