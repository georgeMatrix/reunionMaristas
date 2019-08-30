    @foreach($datosRegisters as $index => $dato)
        @if($index == 0)
            <div style="width: 400px; height: 20px; display: inline-block">
                <p style="font-size: 20px;"><b>{{$dato->name}}</b></p>
            </div>

            <div style="width: 400px; height: 20px; display: inline-block">
                <p style="font-size: 20px"><b>{{$dato->name}}</b></p>
            </div>
        @endif
    @endforeach
<hr>
    @foreach($datosPerson as $dato)
        <div style="width: 400px; height: 20px; display: inline-block"><p for="" style="font-size: 25px">{{$dato->full_name}}</p></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="width: 400px; height: 20px; display: inline-block"><p for="">{{$dato->job_email}}</p></div><br>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="width: 400px; height: 20px; display: inline-block"><p for="" style="font-size: 15px">{{$dato->name}}</p></div>
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="width: 400px; height: 20px; display: inline-block"><p for="">{{$dato->campus}}</p></div><div style="width: 400px; height: 20px; display: inline-block">{{$dato->personal_email}}</div>
    @endforeach
