@extends('adminlte::page')



@section('content_header')
    <h1 class="m-0 text-dark">registrar pago</h1>
@stop

@section('content')
<form method="POST" action = "{{route('sauna.store')}}">
    @csrf
            <div>
                    <div class="row">
                        <x-adminlte-input name="monto" label="monto" placeholder="monto" type="number"
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
                            <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
                        </div>
                        
                    </div>
            </div>
</form>


@stop
