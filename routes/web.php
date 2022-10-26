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
Route::get('/mi_primer_ruta', function () {
    return "Hola Diana";
});
Route::get("/name/{name}", function($name){
    return "Hola soy ".$name;
});
Route::get('/name/{name}/lastname/{lastname?}', function($name,$lastname){
    return "Hola soy ".$name." ".$lastname;
});


Route::get('/login', function(){
    return view("login");
});

Route::get('/rutaprueba', 'pruebaController@prueba2');


Route::get('/catalog', 'catalogController@catalog1');
Route::get('/show/{id}', 'catalogController@show');
Route::get('/create', 'catalogController@create');
Route::get('/edit/{id}', 'catalogController@edit');

Route::resource('/trainers','TrainerContrller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('delete/{id}', 'TrainerContrller@destroy');