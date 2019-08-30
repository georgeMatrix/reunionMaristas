@extends('layouts.layout')
@section('contenido')
    <div class="form-row mb-3">
        <div class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block d-sm-none text-lg-left text-md-left">
            <h4 class="pb-1"><i class="fas fa-user-lock"></i> Tabla de Resultados</h4>
        </div>
    </div>
    <div class="content-loader">
        <table class="table table-responsive table-hover table-striped">
        <thead class="table-primary">
        <tr>
            <th>Nombre_Completo</th>
            <th>Colegio</th>
            <th>Cargo</th>
            <th>Correo_Institucional</th>
            <th>Correo_Alternativo</th>
            <th>Dia_y_Hora_de_llegada</th>
            <th>Dia_y_Hora_de_Salida</th>
            <th>Require_Hospedaje</th>
            <th>Require_Alimentos</th>
            <th>Descripción_Alimentos</th>
            <th>Notas_Adicionales</th>
            <th>PDF</th>
        </tr>
        </thead>
        <tbody>

    @for($i=0; $i<2; $i++)
        @if($i == 0)
        @else
            @foreach($datos[0] as $dato)
                <tr>
                <td>{{$dato->full_name}}</td>
                <td>{{$dato->official_name}}</td>
                <td>{{$dato->name}}</td>
                <td>{{$dato->job_email}}</td>
                <td>{{$dato->personal_email}}</td>
                <td>{{$dato->check_in}}</td>
                <td>{{$dato->check_out}}</td>
                <td>@if($dato->is_loading==0)
                        No
                    @else
                        Si
                    @endif</td>
                <td>@if($dato->is_food==0)
                        No
                    @else
                        Si
                    @endif
                </td>
                <td>{{$dato->food_description}}</td>
                <td>{{$dato->notes}}</td>
                <td>
                    <a href="{{route('crearPdf', $dato->id)}}" class="btn btn-info">PDF</a>
                </td>
                </tr>
            @endforeach
            @endif
        @endfor

        </tbody>
    </table>
    </div>
@endsection