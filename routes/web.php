<?php

use App\Http\Controllers\EmpresaController;
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

Route::resource('empresa',EmpresaController::class);
Route::get('/', function(){
    return redirect('/empresa');
});

Route::get('/tiny', function () {
    return view('tiny');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/detalle', function () {
    return view('detalle');
});

Route::get('/buscador', function () {
    return view('buscador');
});

Route::get('/404', function () {
    return view('404');
});
