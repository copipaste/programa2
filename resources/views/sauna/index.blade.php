@extends('adminlte::page')



@section('content_header')
    <h1 class="m-0 text-dark">pagos</h1>
@stop

@section('content')
<div class = "card">

    <div class = "card-body">

        <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="dark" with-buttons>
            @foreach($saunas as $sauna)
                <tr>
                    <td>{{ $sauna->id}}</td>
                    <td>{{$sauna->monto}}</td>
                    <td>{{$sauna->date}}</td>

                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>

</div>
@stop
