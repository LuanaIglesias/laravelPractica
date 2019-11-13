<?php

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


Route::get('/miPrimeraRuta', function () {
    return view('Creé mi primer ruta en Laravel');
});



Route::get('/esPar/{numero}', function ($numero) {
  if($numero%2==0){
    return view('El numero es par');
  }else{
    return view('El numero es impar');
  }
});

Route::get('/sumar/{numero1}/{numero2}', function ($numero1, $numero2) {
    return view($numero1 + $numero2);
});

Route::get('/peliculas', function () {

      $titulos = ['Toy Story', 'Toy Story 2', 'Poseidon', 'Atraco', 'Neverland'];
      return $titulos;
    });

Route::get('/actores', 'ActoresController@directory');

Route::get('/actor/{id}', 'ActoresController@show');
