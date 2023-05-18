@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Cambiar contraseña</h1>
@stop


@section('content')
<div class="card">

    <div class="card-body">
        <form action="{{ route('password.change') }}" method="POST">
        
            @csrf

            <div class="form-group">
                <label for="current_password">Contraseña actual</label>
                <input type="password" name="current_password" id="current_password" class="form-control">
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="new_password">Nueva Contraseña</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="new_password_confirmation">Confirmar Nueva Contraseña</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
        </form>
    </div>
</div>
@stop