@extends('layouts.layout')
@section('contenido')
    <div class="form-row mb-3">
        <div class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block d-sm-none text-lg-left text-md-left">
            <h4 class="pb-1"><i class="fas fa-user-lock"></i> Tabla de Resultados</h4>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 text-lg-right">
            <a href="{{url('excel')}}" class="btn btn-success">EXCEL</a>
        </div>
    </div>
    <div class="content-loader">
        <table class="table table-responsive table-hover table-striped">
        <thead class="table-primary">
        <tr>
            <th>NOMBRE_COMPLETO</th>
            <th>COLEGIO</th>
            <th>CORREO_INSTITUCIONAL</th>
            <th>CORREO_ALTERNATIVO</th>
            <th>DIA_Y_HORA_DE_LLEGADA</th>
            <th>DIA_Y_HORA_DE_SALIDA</th>
            <th>REQUIERE_HOSPEDAJE</th>
            <th>REQUIERE_ALIMENTOS</th>
            <th>DESCRIPCIÓN_DE_ALIMENTOS</th>
            <th>NOTAS_ADICIONALES</th>
        </tr>
        </thead>
        <tbody>

    @for($i=0; $i<2; $i++)
        @if($i == 0)
        @else
            @foreach($datos[0] as $dato)
                <tr>
                <td>{{$dato->full_name}}</td>
                <td>{{$dato->campus_name}}</td>
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
                </tr>
            @endforeach
            @endif
        @endfor

        </tbody>
    </table>
    </div>
@endsection