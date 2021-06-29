<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('theme.back.app');
});
//(*) No toma la funcion con el @ en LARAVEL 8!!!
//Route::get('usuario/{nombre}', 'VentaController@user')->where('nombre', '[A-Za-z]+');
//Route::get('/venta/{nombre?}', 'VentaController@user')->name('usuarionombre');
//Route::get('/venta/{nombre?}', 'VentaController@user')->name('ventausuarionombre');
//Route::get('/venta/{nombre?}', [VentaController::class, 'user'])->name('ventausuarionombre');

Route::get('/venta/index', [VentaController::class, 'index'])->name('index_venta');
Route::get('/venta/crear', [VentaController::class, 'create'])->name('crear_venta');
Route::get('/venta/{id}/editar', [VentaController::class, 'edit'])->name('editar_venta');
Route::get('/venta/{id}/eliminar', [VentaController::class, 'show'])->name('eliminar_venta');
Route::post('/venta/store', [VentaController::class, 'store'])->name('guardar_venta');
//  Route::resource('ventas', 'VentaController');
//Route::get('ventas/create', 'VentaController@create');

/* PRUEBA VER
Route::get('libro', 'LibroController@index')->name('libro')->middleware('auth');
Route::get('libro/crear', 'LibroController@crear')->name('crear_libro')->middleware('auth');
*/