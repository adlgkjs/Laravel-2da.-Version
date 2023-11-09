@extends('layouts.plantilla') <!--me traigo lo que halla en la plantilla blade-->

@section('title', 'Curso Create') <!--Le agrego un valor al campo llamdo title-->

@section('content') <!--agrego lo que quiero que aparezca en en el campo llamdo content-->

<style>
.volver-cursos{
    color: white;
    background-color: #007bff;
    padding: 10px;
    border-radius: 6px;    
}
.volver-cursos:hover{
    color: white;
    background-color: #006cdf;
    padding: 10px;
    border-radius: 6px;    
}
.guardar{
    color: white;
    background-color: #28a745;
    padding: 10px;
    border-radius: 6px;
    border: none    
}

.guardar:hover{
    color: white;
    background-color: #2a8f42;
    padding: 10px;
    border-radius: 6px;    
}
</style> 

<div class="container mt-4">
    <div class="row justify-content-center">
        <h1 class="text-center">Crear curso</h1>
            <div class="col-xs-12 col-lg-6 mt-2">
                <p><a href="{{route('cursos.index')}}" class="text-decoration-none volver-cursos">Volver a cursos</a></p>
        <form action="{{route('cursos.store')}}" method="POST"> {{--Aqui ponemos la ruta que se encargara de crear el nuevo registro--}}
            @csrf {{--Esta directiva se encarga de generar un token de manera oculta, es un sistema de seguridad de laravel--}}
                <div class="row">
                    <div class="col-xs-12 col-lg-6 mt-4 d-flex justify-content-center">
                        <label for="name">
                            Nombre: <br>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"> {{--Old me permite que la informacion de un input no se pierda si ocurre un error, recuperara lo que habia en el campo name, de esta forma el usuario no tienen que llenar todos los campos desde el principio--}}
                        </label>
                        @error('name') {{--esta directiva de blade funciona como un if, verifica si hay un error, si lo hay imprime un mensaje de error--}}
                            <br>
                            <small>{{$message}}</small> {{--Si hay un error se imprime el mensaje de error--}}
                        @enderror 
                        <br><br>                    
                    </div>
                    <div class="col-xs-12 col-lg-6 mt-4 d-flex justify-content-center">
                        <label for="categoria">
                            Categoria: <br>
                            <input class="form-control" id="categoria" type="text" name="categoria" value="{{old('categoria')}}">
                        </label>
                        @error('categoria') {{--esta directiva de blad funciona como un if, verifica si hay un error, si lo hay imprime un mensaje de error--}}
                            <br>
                            <small>{{$message}}</small> {{--Si hay un error se imprime el mensaje de error--}}
                        @enderror
                        <br><br>
                    </div>
                    <div class="col-xs-12 d-flex justify-content-center mt-3">
                        <label for="descripcion">
                            Descripcion: <br>
                            <textarea class="form-control" id="descripcion" name="description"rows="3" cols="61"> {{old('description')}}</textarea> {{--los textarea no tienen value, su valor se debe declarar entre la etiqueta de inicio y cierre--}}
                        </label>
                        @error('description') {{--esta directiva de blad funciona como un if, verifica si hay un error, si lo hay imprime un mensaje de error--}}
                            <br>
                            <small>{{$message}}</small> {{--Si hay un error se imprime el mensaje de error--}}
                        @enderror
                        <br><br>
                    </div> 
                    <div class="col-xs-12 d-flex justify-content-center mt-4">
                        <button class="guardar" type="submit">Guardar</button> 
                    </div>
                </div>
                
            
            
            
            </form>  
            </div>     
        </div>
    </div>
@endsection
