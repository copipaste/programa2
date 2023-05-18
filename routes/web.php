<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaunaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ChangePasswordController;
use Illuminate\Database\Query\IndexHint;

//---------------------------borrador
//use App\Http\Controllers\Auth\ChangePasswordController;
//---------------------------borrador

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


//Route::get('/sauna', function() {
//    //obtenemos los eventos de la bd
//    $saunas = App\Models\Sauna::all();
//    //asignar la cabecera de nuestro datatable
//    $heads = [
//        'id',
//        'Monto',
//        'Fecha',
//        
 //   ];
//    return view('sauna',compact('saunas','heads'));
//})->name('sauna')->middleware('auth');

//Route::get('/sauna/create', function() {
//    return view('sauna-create');
//})->middleware('auth');

Route::resource('/sauna', SaunaController::class)->names('sauna')->middleware('auth');

Route::resource('/empleado', EmpleadoController::class)->names('empleado')->middleware('auth');
                            


//------------------------------------borrador

// Ruta para mostrar el formulario de cambio de contraseña
//Route::get('/change-password', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');

// Ruta para procesar la solicitud de cambio de contraseña
 //Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');



// Ruta para mostrar el formulario de cambio de contraseña
Route::get('/password/change', [ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');
// Ruta para procesar el cambio de contraseña
Route::post('/password/change', [ChangePasswordController::class, 'changePassword'])->name('password.update');
