@extends('layouts.plantilla') <!--me traigo lo que halla en la plantilla blade-->

@section('title', 'Curso Edit') <!--Le agrego un valor al campo llamdo title-->
@section('content') <!--agrego lo que quiero que aparezca en en el campo llamdo content-->
<style>
.ircursos{
    color: white;
    background-color: #007bff;
    padding: 10px;
    border-radius: 6px;
    text-decoration: none;    
}
.ircursos:hover{
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
            <h1 class="text-center">Editar Curso</h1>
            <div class="col-xs-12 col-lg-6  mt-3">
                <p><a class="ircursos" href="{{route('cursos.index')}}">Ir a cursos</a></p>
    
    {{--El formulario recibe la variable $curso mediante la llamada a la vista desde el controlador en su metodo edit--}}
    {{--cursos.update es el name de la ruta en el web.php, le pasamos la variable curso para poder hacer uso de sus propiedades--}}
            <form action="{{route('cursos.update', $curso)}}" method="POST"> {{--Aqui ponemos la ruta que se encargara de actualizar el registro y le pasamos la variable como parametro--}}
                @csrf {{--Esta directiva se encarga de generar un token de manera oculta, es un sistema de seguridad de laravel--}}
                @method('put') {{--Como html solo entiende el metodo get y post le especificamos el metodo put mediante esta directiva, asi sabra que hara uso de la ruta tipo put en el web.php--}}
                <div class="row">
                    <div class="col-xs-12 col-lg-6 mt-4 d-flex justify-content-center">
                        <label>
                            Nombre: <br>
                            <input class="form-control" type="text" name="name" value="{{old('name', $curso->name)}}"> {{--De esta forma si old no encuentra el valor del name tomara el de la variable--}}
                        </label>
                        @error('name')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                        <br><br>
                    </div>                
                    <div class="col-xs-12 col-lg-6 mt-4 d-flex justify-content-center">
                        <label>
                            Categoria: <br>
                            <input class="form-control" type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
                        </label>
                        @error ('categoria')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                        <br><br>
                    </div>                
                    <div class="col-xs-12 d-flex justify-content-center mt-3">
                        <label>
                            Descripcion: <br>
                            <textarea class="form-control" name="description"rows="3" cols="61">{{old('description', $curso->description)}}</textarea>
                        </label>
                        @error('description')
                            <br>
                            <small>*{{$message}}</small>
                        @enderror
                        <br><br>        
                    </div>
                </div>
                <div class="col-xs-12 d-flex justify-content-center mt-4">
                    <button class="guardar" type="submit">Guardar</button> 
                </div>
            </form>
        </div>
    </div>
</div>

@endsection