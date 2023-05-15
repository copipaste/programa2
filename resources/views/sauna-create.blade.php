@extends('adminlte::page')



@section('content_header')
    <h1 class="m-0 text-dark">registrar pago</h1>
@stop

@section('content')
<div>

    <div class="row">
        <x-adminlte-input name="name" label="nombre" placeholder="ingrese nombre"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    <div class="row">
        <x-adminlte-input name="iNum" label="Number" placeholder="number" type="number"
        fgroup-class="col-md-6">
            <x-slot name="appendSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-hashtag"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
    </div>

    <div class="row">
        @php
        $config = ['format' => 'YYYY-MM-DD'];
        @endphp
        <x-adminlte-input-date name="idTimeOnly" :config="$config" placeholder="Choose a time..."  
        fgroup-class="col-md-6">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fas fa-clock"></i>
                </div>
            </x-slot>
        </x-adminlte-input-date>

    </div>


</div>
@stop
