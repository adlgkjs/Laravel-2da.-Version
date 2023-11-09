@extends('layouts.plantilla')

@section('title', 'Curso Show '.$curso->name)

@section('content')
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
.editarcurso{
    color: white;
    background-color: #28a745;
    padding: 10px;
    border-radius: 6px;
    text-decoration: none;       
}

.editarcurso:hover{
    color: white;
    background-color: #2a8f42;
    padding: 10px;
    border-radius: 6px;
}
.eliminar{
    color: white;
    background-color: #e22e40;
    padding: 10px;
    border-radius: 6px;
    border: none;       
}

.eliminar:hover{
    color: white;
    background-color: #c02f3d;
    padding: 10px;
    border-radius: 6px;
}
</style>
   <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center h2 mt-4 mb-3">Bienvenido al curso: {{$curso->name}}</h1>
                <div class="col-xs-12 col-lg-8 mt-3">
                    <a class="ircursos" href="{{route('cursos.index')}}">Ir a cursos</a> &nbsp;    
                    <a class="editarcurso" href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
                    <h2 class="fs-4 mt-5">Categoria: {{$curso->categoria}}</h2>
                    <h2 class="fs-4 mt-4 mb-5">Descripcion: {{$curso->description}}</h2>
                    <form class="d-flex justify-content-end" action="{{route('cursos.destroy', $curso)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="eliminar" type="submit">Eliminar</button>
                    </form>
                </div>
        </div>
   </div>
@endsection
