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
})->where('desciption','[a-z]','[A-Z]');

Route::get('/movements/movement_date/{year?}/{month?}/{day?}',function($movement_date){
    $fecha = App\Movement::where('movement_date',$movement_date)->get();
    return $fecha;
})->where('movement_date','[year [0-9]+, month [0-9]+, day[0-9]+]');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
