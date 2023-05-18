<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        //asignar la cabecera de nuestro datatable
        $heads = [
            'id',
            'nombre',
            'apellido',
            'cedula',
            'telefono',
            'especialidad',
            'Acciones',
            'Acciones',


        ];
        return view('empleado.index',compact('empleados','heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('empleado.create',['especialidades' => Especialidad::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'especialidad' => 'required',
            'fecha_ingreso' => 'required',

        ]); //validacion de los campos osea que tienen que tener algun valor 
      
      
          $Empleado = empleado::create($request->all());
        return redirect()->route('empleado.index', $Empleado);        //estoy invocando la ruta sauna.index

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleado.edit',compact('sauna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleado.index', $empleado)->with('mensaje','registro eliminado correctamente');  
    }
}
