@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="d-flex justify-content-center ">
                <h1 >Bienvenido</h1>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{-- Video de Youtube --}}
                <iframe class="rounded-4" width="560" height="315" src="https://www.youtube.com/embed/9Nu9q5Pu_Fo?si=-3AgBx1jREP4kw6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
