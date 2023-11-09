@extends('layouts.plantilla')

@section('title', 'Curso Index')
@section('content')
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center">Cursos</h1>  
            <div class="col-xs-12 col-lg-8">
                <div>
                    <p class="text-end"><a href="{{route('cursos.create')}}" class="text-decoration-none crear-curso">Crear Curso</a></p>
                </div>
                <ul> <!--Uso un ciclo foreach para recorrer los elementos de la pase de datos y mostrarlos en una lista-->
                    @foreach ($cursos as $curso) {{--$cursos hace referencia a la coleccion de nuestros datos y $curso a la variable donde se almacenara cada dato--}}
                        <li>                  {{--Paso el id de cada curso por la url--}}
                            <a href="{{route('cursos.show', $curso->id)}}" class="text-decoration-none fs-5 cursos-element">
                                {{$curso->name}} {{--Imprimo la varible que se esta iterando como un elemento de la lista--}}
                            </a> 
                        </li>
                    @endforeach
                </ul>
           
        
            </div>          
        </div>
    </div>
@endsection

