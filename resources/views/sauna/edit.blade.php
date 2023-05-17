@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">editar pago</h1>
@stop

@section('content')

@if (session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
<form method="POST" action = "{{route('sauna.update',$sauna)}}">
    @method("PUT")
    @csrf
            <div>
                    <div class="row" >
                        <x-adminlte-input name="monto" label="monto" placeholder="monto" type="number" fgroup-class="col-md-6" value="{{$sauna->monto}}">
                            <x-slot name="appendSlot">
                                <div class="input-group-text bg-dark" >
                                    <i class="fas fa-hashtag" ></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
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