@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
<style>
    .ancho{
        width: 400px;
    }
    .enviar{
    color: white;
    background-color: #007bff;
    padding: 10px;
    border-radius: 6px;
    border: none           
}
.enviar:hover{
    color: white;
    background-color: #006cdf;
    padding: 10px;
    border-radius: 6px;
}    
</style>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <h1 class="text-center">Contactanos</h1>
        <div class="col-xs-12 col-lg-6">
            <form action="{{route('contactanos.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 mt-4 d-flex justify-content-center">
                        <label for="name">
                            Nombre:
                            <br>
                            <input class="form-control ancho" type="text" id="name" value="{{old('name')}}">
                        </label>
                        @error('name')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-4 d-flex justify-content-center">
                        <label for="correo">
                            Correo:
                            <br>
                            <input class="form-control ancho" type="text" id="correo" name="correo" value="{{old('correo')}}">
                        </label>
                        @error('correo')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-4 d-flex justify-content-center">
                        <label for="mensaje">
                            Mensaje:
                            <br>
                            <textarea class="form-control" cols="50" name="mensaje" id="mensaje" rows="4">{{old('mensaje')}}</textarea>
                        </label>
                        @error('mensaje')
                            <p><strong>{{$message}}</strong></p>
                        @enderror
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-4 d-flex justify-content-center">
                        <button class="enviar ps-4 pe-4" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
{{--Si existe una variable de sssion se ejecutara el script--}}
    @if (session('info')) {{--Esta es una variable de sesion que declare en ContactanosController en su metodo store--}}
        <script>
            alert("{{session('info')}}") //Esto es codigo JS mostrando la variable de sesion llamada info
        </script>
    @endif
@endsection
