
    <table class="table table-responsive table-hover table-striped">
    <thead class="table-primary">
    <tr>
        <th>Nombre completo</th>
        <th>Colegio</th>
        <th>Correo institucional</th>
        <th>Correo alternativo</th>
        <th>Dia y hora de llegada</th>
        <th>Dia y Hora de Salida</th>
        <th>Require hospedaje</th>
        <th>Require alimentos</th>
        <th>Descripción alimentos</th>
        <th>Notas adicionales</th>
    </tr>
    </thead>
    <tbody>

    @foreach($datosPerson as $dato)
    <tr>
        <td>{{$dato->full_name}}</td>
        <td>{{$dato->official_name}}</td>
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