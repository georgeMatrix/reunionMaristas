
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
    </tr>
    </thead>
    <tbody>

    @foreach($datosPerson as $dato)
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
    </tr>
    @endforeach

    </tbody>
</table>