<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('hospital','App\Http\Controllers\HospitalController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('hospital/destroy/{id}', ['as' => 'hospital/destroy', 'uses'=>'App\Http\Controllers\HospitalController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('hospital/search', ['as' => 'hospital/search', 'uses'=>'App\Http\Controllers\HospitalController@search']);


Route::resource('eps','App\Http\Controllers\EpsController');
//una nueva ruta para eliminar registros con el metodo get
Route::get('eps/destroy/{id}', ['as' => 'eps/destroy', 'uses'=>'App\Http\Controllers\EpsController@destroy']);
//ruta para realizar busqueda de registros.
Route::post('eps/search', ['as' => 'eps/search', 'uses'=>'App\Http\Controllers\EpsController@search']);


require __DIR__.'/auth.php';
