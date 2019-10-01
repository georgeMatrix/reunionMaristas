
@extends('layouts.layout')
@section('contenido')
    <div class="container">
    <div class="row">

    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <img width="400px" src="{{asset('img/logotipos_maristas02.png')}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="text-center text-dark">Gracias por participar en el registro de la Reunión de Directivos, septiembre 20-21 de 2019</h1>
            <div class="text-center">
                <a href="{{route('registro.create')}}" style="color: white; background-color: #003560"  class="btn btn-success mt-5">Click para registrarse</a>
            </div>
        </div>
    </div>
</div>
@endsection


