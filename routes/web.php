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
Route::get('usuarios', function () {
    return DB::table('users')->get();
});
Route::get('movements', function (){
    return App\Movement::all();
});
Route::get('movements/id/{id}',function ($id){
    $usuarios = App\Movement::find($id);
    return $usuarios;

})->where(['id' => '[\d]+']);

Route::get('movements/desc/{desciption}',function ($desciption){
    return App\Movement::where('desription',$desciption)->get();
});

Route::get('movements/fecha/{movement_date}',function ($movement_date){
    return App\Movement::where('movement_date',$movement_date)->get();
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
