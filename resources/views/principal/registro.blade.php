@extends('layouts.layout')
@section('contenido')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-row mb-3">
            <div class="col-lg-12 col-md-12 col-sm-12 d-none d-lg-block d-sm-none text-lg-left text-md-left">

                <p class="custom-form-required-fields text-danger">Campos obligatorios *</p>
            </div>
        </div>
            <form action="{{route('registro.store')}}" method="post" id="registroForm">
                {{csrf_field()}}

                <div class="form-row mb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 d-none d-lg-block d-sm-none text-lg-left text-md-left">
                        <label for="">Nombre Completo *</label>
                        <input name="full_name" id="full_name" type="text" class="form-control {{$errors->has('full_name')?'is-invalid':''}}" value="{{old('full_name')}}">
                        <div class="invalid-feedback name">{{$errors->first('full_name')}}</div>

                    </div>
                </div>
                
                <div class="form-row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Colegio *</label>
                        <select  name="campus_id" id="campus_id" class="form-control {{$errors->has('campus_id')?'is-invalid':''}}">
                            <option value="" selected>Seleccione una opción</option>
                            @foreach($campuses->sortBy('name') as $campus)
                                <option value="{{$campus->id}}" {{ old('campus_id') == $campus->id ? 'selected' : ''}}>{{$campus->name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">{{$errors->first('campus_id')}}</div>
                    </div>
                    <!--<div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Cargo *</label>
                        <select name="staff_id" id="staff_id" class="form-control {{$errors->has('staff_id')?'is-invalid':''}}">
                            <option value="">Seleccione una opción</option>
                            @foreach($staffs as $staff)
                                <option value="{{$staff->id}}" {{ old('staff_id') == $staff->id ? 'selected' : ''}}>{{$staff->name}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">{{$errors->first('staff_id')}}</div>
                    </div>-->
                </div>
                <div class="form-row mb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Correo Institucional *</label>
                        <input  type="email" name="job_email" id="job_email" class="form-control {{$errors->has('job_email')?'is-invalid':''}}" value="{{old('job_email')}}">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Correo Alternativo</label>
                        <input type="email" name="personal_email" id="personal_email" class="form-control" value="{{old('personal_email')}}">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Día y Hora de llegada *</label>
                        <input type="text" required readonly name="check_in" id="check_in" class="form-control {{$errors->has('check_in')?'is-invalid':''}}" value="{{old('check_in')}}">
                        <div class="invalid-feedback term-code-id">{{$errors->first('check_in')}}</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Día y Hora de Salida *</label>
                        <input type="text" required readonly name="check_out" id="check_out" class="form-control {{$errors->has('check_out')?'is-invalid':''}}" value="{{old('check_out')}}">
                        <div class="invalid-feedback term-code-id">{{$errors->first('check_out')}}</div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-4 col-md-4 col-sm-12 offset-1">
                        <label for="">¿Requiere hospedaje? *</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 offset-1">
                        <label for="">¿Requiere alimentos? *</label>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-4 col-md-4 col-sm-12 offset-1">
                        <div class="switch-field">
                            <input type="radio" id="radio-one" name="is_loading" value="1"/>
                            <label for="radio-one">Si</label>
                            <input type="radio" id="radio-two" name="is_loading" value="0" checked/>
                            <label for="radio-two">No</label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 offset-1">
                        <div class="switch-field">
                            <input required type="radio" id="radio-one-alimentos" name="is_food" value="1"/>
                            <label for="radio-one-alimentos">Si</label>
                            <input type="radio" id="radio-two-alimentos" name="is_food" value="0" checked/>
                            <label for="radio-two-alimentos">No</label>
                        </div>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Descripción de la comida</label>
                        <textarea class="form-control" disabled name="food_description" id="food_description" cols="30" rows="5" placeholder="Si por cuestión médica requiere alimentos especiales, por favor describirlos"></textarea>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="">Notas Adicionales</label>
                        <textarea class="form-control" name="notes" id="notes" cols="30" rows="5" placeholder="Ponga sus notas"></textarea>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    @endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            toastr.options = {
                'showDuration': '100000',
                'hideDuration': '100000',
                'timeOut': '500000'
            }
        })

        @if(session('message'))
                Command: toastr["success"]('Información cargada correctamente');
        @endif

        $('input[type=radio][name=is_food]').change(function() {
            if (this.value == '1') {
                $('#food_description').prop('disabled', false);
            }
            else if (this.value == '0') {
                $('#food_description').prop('disabled', true);
            }
        });

        jQuery.datetimepicker.setLocale('es');

        jQuery('#check_in').datetimepicker({
            format:'Y/m/d H:i'
        });
        jQuery('#check_out').datetimepicker({
            format:'Y/m/d H:i'
        });
    </script>
    @endsection