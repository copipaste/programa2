@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">editar Empleado</h1>
@stop

@section('content')

@if (session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
<form method="POST" action = "{{route('empleado.update',$empleado)}}">
    @method("PUT")
    @csrf
            <div>
                    <div class="row" >
                        <div class="row">
                            <x-adminlte-input name="nombre" label="nombre" type="text" placeholder="nombre"
                                fgroup-class="col-md-6" disable-feedback/>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="row">
                            <x-adminlte-input name="apellido" label="apellido" type="text" placeholder="apellido"
                                fgroup-class="col-md-6" disable-feedback/>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="row">
                            <x-adminlte-input name="cedula" label="cedula" type="text" placeholder="cedula"
                                fgroup-class="col-md-6" disable-feedback/>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="row">
                            <x-adminlte-input name="telefono" label="telefono" type="text" placeholder="telefono"
                                fgroup-class="col-md-6" disable-feedback/>
                        </div>
                    </div>
                    <div class="row" >
                        <x-adminlte-input name="iExtraAddress" label="Other Address Data">
                            <x-slot name="prependSlot">
                                <div class="input-group-text text-purple">
                                    <i class="fas fa-address-card"></i>
                                </div>
                            </x-slot>
                            <x-slot name="bottomSlot">
                                <span class="text-sm text-gray">
                                    [Agregar direccion]
                                </span>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="email" type="email" placeholder="mail@example.com"/>
                    </div>
                    <div class="row" >
                        <div class="row">
                            <x-adminlte-input name="especialidad" label="especialidad" type="text" placeholder="especialidad"
                                fgroup-class="col-md-6" disable-feedback/>
                        </div>
                    </div>
                    <div class="row">
                        @php
                        $config = ['format' => 'YYYY-MM-DD'];
                        @endphp
                        <x-adminlte-input-date name="date" :config="$config" placeholder="fecha"
                        label="date"
                        
                        fgroup-class="col-md-6" value="{{$sauna->date}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <x-adminlte-button class="btn-flat" type="submit" label="Actualizar" theme="success" icon="fas fa-lg fa-save"/>
                        </div>
                        
                    </div>
            </div>
</form>
@stop









