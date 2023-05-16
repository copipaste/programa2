<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauna;

class SaunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // leer todos los registros
    {
    $saunas = Sauna::all();
    //asignar la cabecera de nuestro datatable
    $heads = [
        'id',
        'Monto',
        'Fecha',
        
    ];
    return view('sauna.index',compact('saunas','heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //abrir formulario para crear un registro
    {
        return view('sauna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la bd el nuevo registro 
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)    //visualizar un registro a detalle
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)  //para abrir un formulario para editar un registro
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //para actualizar un registro en la bd
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)   //para eliminar un registro de la bd  
    {
        //
    }
}
