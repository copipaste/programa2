@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">editar Empleado</h1>
@stop

@section('content')

<form method="POST" action = "{{route('empleado.store')}}">
    @csrf
            <div>
                    <div class="row" >
                        <x-adminlte-input name="nombre" label="nombre"  type="text" placeholder="nombre" label-class="text-lightblue"  fgroup-class="col-md-6">

                        </x-adminlte-input>
                    </div>
                    <div class="row" >
                            <x-adminlte-input name="apellido" label="apellido"  type="text" placeholder="apellido" label-class="text-lightblue"  fgroup-class="col-md-6">

                            </x-adminlte-input>
                    </div>
                    <div class="row" >
                        <x-adminlte-input name="cedula" label="cedula"  type="text" placeholder="cedula" label-class="text-lightblue"  fgroup-class="col-md-6">

                        </x-adminlte-input>
                    </div>
                    <div class="row" >
                            <x-adminlte-input name="telefono" label="telefono" type="text" placeholder="telefono"
                                fgroup-class="col-md-6" />
                    </div>
                    <div class="row" >
                        <x-adminlte-input name="direccion" label="direccion"  type="text" placeholder="direccion" label-class="text-lightblue"  fgroup-class="col-md-6">

                        </x-adminlte-input>
                    </div>
                    <div class="row" >
                        <x-adminlte-input name="email" label="email" type="email" placeholder="email"
                            fgroup-class="col-md-6" />
                    </div>
                    <div class="row" >
        
                        <x-adminlte-select2 name="especialidad_id" fgroup-class="col-md-6">
                            @foreach ($especialidades as $especialidad)
                            <option value = "{{$especialidad->id}}">{{ $especialidad->nombre}}</option>
                            @endforeach
                        </x-adminlte-select2>
                  
                    </div>
                    <div class="row">
                        @php
                        $config = ['format' => 'YYYY-MM-DD'];
                        @endphp
                        <x-adminlte-input-date name="date" :config="$config" placeholder="fecha"
                        label="date"
                        
                        fgroup-class="col-md-6">
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









