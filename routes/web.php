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

Route::get('/movements',function(){
    return App\Movement::all();
});

Route::get('/movements/id/{id}',function($id){
    $us = App\Movement::find($id);
    return $us;
})->where('id','[0-9]+');

Route::get('/movements/desciption/{desciption}',function($desciption){
    $des = App\Movement::where('desciption',$desciption)->get();
    return $des;
})->where('desciption','[A-Z]');

Route::get('/movements/movement_date/{year?}/{month?}/{day?}',function($movement_date){
    $fecha = App\Movement::where('movement_date',$movement_date)->get();
    return $fecha;
})->where('movement_date','d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
